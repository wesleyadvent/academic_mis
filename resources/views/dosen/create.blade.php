@extends('layouts.index')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Manage Dosen Data</h3>
                <h6 class="op-7 mb-2">Manage lecturer information efficiently.</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#addRowModal">Add Dosen</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Add Row</h4>
                    <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                        <i class="fa fa-plus"></i> Add Row
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('dosenStore') }}" method="POST">
                    @csrf
                    <!-- NIK -->
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input
                            type="text"
                            class="form-control @error('nik') is-invalid @enderror"
                            id="nik"
                            name="nik"
                            placeholder="Enter NIK"
                            required
                            maxlength="7"
                            value="{{ old('nik') }}"
                        />
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input
                            type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            id="name"
                            name="name"
                            placeholder="Enter Name"
                            required
                            value="{{ old('name') }}"
                        />
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Birth Date -->
                    <div class="form-group">
                        <label for="birth_date">Birth Date</label>
                        <input
                            type="date"
                            class="form-control @error('birth_date') is-invalid @enderror"
                            id="birth_date"
                            name="birth_date"
                            required
                            value="{{ old('birth_date') }}"
                        />
                        @error('birth_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            name="email"
                            placeholder="Enter Email"
                            required
                            value="{{ old('email') }}"
                        />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small id="emailHelp" class="form-text text-muted">
                            We'll never share your email with anyone else.
                        </small>
                    </div>

                    <!-- Submit Button -->
                   <div class="card-action">
                    <button class="btn btn-success">Submit</button>
                    <button class="btn btn-danger">Cancel</button>
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
