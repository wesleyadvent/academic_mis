@extends('layouts.index')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Manage Mahasiswa Data</h3>
                <h6 class="op-7 mb-2">Manage student information efficiently.</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#addMahasiswaModal">Add Mahasiswa</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Add Mahasiswa</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswaStore') }}" method="POST">
                    @csrf

                    <!-- NRP -->
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror"
                            id="nrp" name="nrp" placeholder="Enter NRP" required
                            value="{{ old('nrp') }}" maxlength="20" />
                        @error('nrp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            id="name" name="name" placeholder="Enter Name" required
                            value="{{ old('name') }}" />
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Birth Date -->
                    <div class="form-group">
                        <label for="birth_date">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('birth_date') is-invalid @enderror"
                            id="birth_date" name="birth_date" required
                            value="{{ old('birth_date') }}" />
                        @error('birth_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" name="email" placeholder="Enter Email" required
                            value="{{ old('email') }}" />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <!-- Phone -->
                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                            id="phone" name="phone" placeholder="Enter Phone Number" required
                            value="{{ old('phone') }}" />
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Address -->
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <textarea class="form-control @error('address') is-invalid @enderror"
                            id="address" name="address" placeholder="Enter Address">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Dosen Wali -->
                    <div class="form-group">
                        <label for="dosen_nik">Dosen Wali (NIK)</label>
                        <select class='form-control' name='Dosen_nik'>
                            @foreach($dosens as $d)
                            <option value="{{$d->nik}}">{{$d -> name}}</option>
                            @endforeach
</select>

                    </div>

                    <!-- Submit Button -->
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('ExtraCss')
<!-- Add any additional CSS here -->
@endsection

@section('ExtraJS')
<!-- Add any additional JavaScript here -->
@endsection
