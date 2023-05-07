@extends('layouts.config')
@section('content')
@include('admin.admin')

<div id="layoutSidenav">
    @include('admin.sidebar')
    <div id="layoutSidenav_content">
        <main>
			<div class="page-header page-header-dark bg-gradient-primary-to-secondary">
				<div class="page-header-content">
					<div class="row justify-content-center">
						<div class="col-12 col-xl-auto">
							<h1 class="page-title">
								REGISTRO 
							</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- Main page content-->
			<div class="page-body page-body-light pt-3">
				<!-- Pagina details card-->
				<div class="card mb-4 card-header-actions">
					<div class="card-header">Registro de Servicios</div>
					<div class="card-body">
						@if (\Session::has('success'))
						<div class="alert alert-success">
							<ul>
								<li>{{\Session::get('success')}}</li>
							</ul>
						</div>
						@endif
						<form method="POST" action="{{ route('service.store') }}"  role="form" enctype="multipart/form-data">
							@csrf

							<div class="row gx-3 mb-3">
								
								<div class="col-md-12">
									<label class="small mb-1" >Titulo</label>
									<input class="form-control"  type="text" name="title" placeholder="Enter title" required />
									@error('title')
										<small class="text-danger" autofocus> {{$message}}</small>
									@enderror
								</div>
								<div class="col-md-12">
									<label class="small mb-1">Icono</label>
									<input class="form-control" type="text" name="image_service" placeholder="Enter icon name"  required />
									@error('image_service')
										<small class="text-danger" autofocus> {{$message}}</small>
									@enderror
								</div>
								<div class="col-md-12">
									<label class="small mb-1" >Descripcion</label>
									<textarea name="description" type="text" class="form-control" placeholder="Enter description" required></textarea>
									@error('description')
										<small class="text-danger" autofocus> {{$message}}</small>
									@enderror
								</div>
							</div>
							<!-- Save changes button-->
							<hr>
							<div style="float:right;">
							    <a href="{{route('service.index')}}" class="btn btn-danger lift">Cancelar</a>
							    <button class="btn btn-primary lift" type="submit">Save changes</button>
							    
							</div>
						</form>
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
