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
								PRINCIPAL
							</h1>
						</div>
					</div>
				</div>
			</div>
             <div class="page-body page-body-light pt-3">
				<div class="card card-header-actions">
					<div class="card-header">
						Actualizar Datos
					</div>
					<div class="card-body">
						@if (\Session::has('success'))
						<div class="alert alert-success">
							<ul>
								<li>{{\Session::get('success')}}</li>
							</ul>
						</div>
						@endif
						<form method="POST" action="{{ route('home.update', $home) }}"  role="form" enctype="multipart/form-data">
							{{ method_field('PATCH') }}
							@csrf
														   
							<!-- Form Row-->
							<div class="row" style="margin: auto; height: 100%">
								<div class="col col-md-7">
									<div class="col col-md-11">
										<label class="small mb-1">nombre</label>
										<input class="form-control"  type="text" name="nombre" placeholder="Enter your username" value="{{$home->nombre}}" required />
										<br>
    									@error('nombre')
    										<small class="text-danger">{{$message}}</small>
    									@enderror
									</div>
									<div class="col col-md-11">
										<label class="small mb-1" >Descripci&oacute;n</label>
										<textarea class="form-control" type="text" name="descripcion" placeholder="Enter descripcion" rows="3" required >{{$home->descripcion}}</textarea>
										<br>
    									@error('descripcion')
    										<small class="text-danger">{{$message}}</small>
    									@enderror
									</div>
								</div>
								<div class="col col-md-3">
									<label class="small mb-1" >Imagen destacada</label><br>
									<img src="../images/home/{{$home->imagen}}" height="180" width="160"  class="img-shadow">
									<input type="file" name="imagen" accpet="image/jpg,image/jpeg,image/png" class="py-2"/>
									<br>
									@error('imagen')
										<small class="text-danger">{{$message}}</small>
									@enderror
								</div>
							</div>
							<!-- Save changes button-->
							<div style="float: right;" class="pt-4">
							    <a href="/page/admin/main" class="btn btn-danger lift">Cancelar</a>
							    <button class="btn btn-primary lift" type="submit" >Save changes</button>
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