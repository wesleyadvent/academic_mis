@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Add Data Dosen</h4>
                                <a class="btn btn-primary btn-round ms-auto" href="{{route('dosenCreate')}}">
                                    <i class="fa fa-plus"></i> Add Row
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold"> New</span>
                                                <span class="fw-light"> Row </span>
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="small">
                                                Create a new row using this form, make sure you fill them all
                                            </p>
                                            <form>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Name</label>
                                                            <input id="addName" type="text" class="form-control" placeholder="fill name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pe-0">
                                                        <div class="form-group form-group-default">
                                                            <label>Position</label>
                                                            <input id="addPosition" type="text" class="form-control" placeholder="fill position" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Office</label>
                                                            <input id="addOffice" type="text" class="form-control" placeholder="fill office" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer border-0">
                                            <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Name</th>
                                        <th>Birth Date</th>
                                        <th>Email</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Name</th>
                                        <th>Birth Date</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($dosens as $dosen)
                                        <tr>
                                            <td>{{$dosen->nik}}</td>
                                            <td>{{$dosen->name}}</td>
                                            <td>{{$dosen->birth_date}}</td>
                                            <td>{{$dosen->email}}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button"
                                                            data-bs-toggle="tooltip"
                                                            title="Edit Dosen"
                                                            class="btn btn-link btn-primary btn-lg edit-dosen"
                                                            data-original-title="Edit Dosen"
                                                            data-url="{{route('dosenEdit', [$dosen->nik])}}"
                                                    >
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <form method="post" action="{{route('dosenDelete',[$dosen->nik])}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                                data-bs-toggle="tooltip"
                                                                title="Remove Dosen"
                                                                class="btn btn-link btn-danger delete-dosen"
                                                                data-original-title="Remove Dosen"
                                                        >
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
    <script src="{{asset('assets/js/plugin/sweetalert2/sweetalert2.all.min.js')}}"></script>
    <script>
        $(".edit-dosen").click(function (){
            window.location = $(this).data("url");
        });

        $(".delete-dosen").click(function(e) {
            e.preventDefault();
            Swal.fire({
                title:"Are you sure want to delete this data?",
                showCancelButton:true,
                confirmButtonText:"Yes"
            }).then((result) => {
                if(result.isConfirmed){
                    $(e.target).closest("form").submit()
                }
            })
        });
        @if(session('success'))
        $.notify({
            message: "{{ session('success') }}"
        }, {
            delay:5000,
            type:"info"
        })
        @endif
    </script>
@endsection
