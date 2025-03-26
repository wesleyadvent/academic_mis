@extends('layouts.index')

@section('content')
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
@endsection
