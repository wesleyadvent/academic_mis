@extends('layouts.index')

@section('content')
<<<<<<< HEAD
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Manage Data Dosem</h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <p>You are unauthorized to access this page.</p>
                            <a href="{{ route('dashboard') }}" class="status">
                                Back to Dashboard
                            </a>
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
=======
<div class="container d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
    <div class="text-center">
        <h1 class="fw-bold text-danger">403</h1>
        <h3 class="fw-semibold">Unauthorized Access</h3>
        <p class="text-muted">Anda tidak memiliki izin untuk mengakses halaman ini.</p>
        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-round">
            <i class="fa fa-home"></i> Kembali ke Dashboard
        </a>
    </div>
</div>
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
@endsection
