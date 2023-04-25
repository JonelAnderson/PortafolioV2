@extends('layouts.config')
@section('content')
@include('admin.admin')

<div id="layoutSidenav">
    @include('admin.sidebar')

    <div id="layoutSidenav_content">
        <main>
            <div class="page-body page-body-light pt-3">
				<div class="card card-header-actions">
					<div class="card-header">
						<span class="card-title">Correo de: <strong>{{ $correo->name }}</strong></span>
						<p class="small float-left"> Recibido {{$correo->created_at->diffForHUmans()}}, el {{$correo->created_at}} </p>
						<a href="/public/admin/correo" class="btn btn-danger lift">{{ __('Close') }}</a>
					</div>
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group">
                                <strong>ID:</strong>
                                {{ $correo->id }}
                            </div>
                            <div class="form-group">
                                <strong>Nombre:</strong>
                                {{ $correo->name }}
                            </div>
                            <div class="form-group">
                                <strong>Correo:</strong>
                                <a href="mailto:{{$correo->email}}">{{ $correo->email }}</a>
                            </div>
                            <div class="form-group">
                                <strong>Asunto:</strong>
                                {{ $correo->subject }}
                            </div>
                            <div class="form-group">
                                <strong>Mensaje:</strong>
                                <textarea class="form-control" rows="2" readonly>{{ $correo->message }}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        <hr>
		<footer class="footer-admin mt-auto footer-light">
			<div class="container-xl px-4">
				<div class="row">
					<div class="col-md-6 small">Copyright © Your Website 2022</div>
					<div class="col-md-6 text-md-end small">
						<a href="#!">Privacy Policy</a>
						·
						<a href="#!">Terms &amp; Conditions</a>
					</div>
				</div>
			</div>
		</footer>
    </div>
</div>

@endsection