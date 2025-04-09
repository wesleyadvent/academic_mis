@extends('layouts.index')

@section('content')
<<<<<<< HEAD
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class ="row">
                        <div class="col-md-12">
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
                                    <div class="row">
                                        <form method="POST" action="{{route('dosenStore')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="nik"
                                                    id="nik"
                                                    placeholder="e.g.720001"
                                                    required autofocus maxlength="7"
                                                />
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="name"
                                                    id="name"
                                                    placeholder="e.g.John Doe"
                                                    required
                                                />
                                            </div>
                                            <div class="form-group">
                                                <label for="birth_date">Birth Date</label>
                                                <input
                                                    type="date"
                                                    class="form-control"
                                                    name="birth_date"
                                                    id="birth_date"
                                                    placeholder="e.g.John Doe"
                                                    required
                                                />
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    name="email"
                                                    id="email"
                                                    placeholder="e.g.johndoe@gmail.com"
                                                />
                                            </div>
                                            <div class="card-action">
                                                <input type="submit" class="btn btn-success" value="Submit" >
                                                <input type="submit" class="btn btn-danger" value="Cancel">

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('ExtraCss')
@endsection

@section('ExtraJS')
=======
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
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
@endsection
