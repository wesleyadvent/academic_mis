@extends('layouts.index')

@section('content')
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
                                        <h4 class="card-title">Edit Data Dosen</h4>
                                        <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                                            <i class="fa fa-plus"></i> Add Row
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <form method="POST" action="{{route('dosenUpdate',[$dosen->nik])}}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="nik"
                                                    id="nik"
                                                    placeholder="{{ $dosen->nik }}"
                                                    required readonly maxlength="7"
                                                    value="{{$dosen->nik}}"
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
                                                    required autofocus
                                                    value="{{$dosen->name}}"
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
                                                    value="{{$dosen->birth_date}}"
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
                                                    value="{{$dosen->email}}"
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
@endsection
