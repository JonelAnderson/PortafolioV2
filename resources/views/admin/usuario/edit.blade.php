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
								ACTUALIZAR
							</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- Main page content-->
			<div class="page-body page-body-light pt-3">
				<!-- Pagina details card-->
				<div class="card mb-4 card-header-actions">
					<div class="card-header">Actualizar Usuario</div>  
					<div class="card-body">
						@if (\Session::has('success'))
						<div class="alert alert-success">
							<ul>
								<li>{{\Session::get('success')}}</li>
							</ul>
						</div>
						@endif
						<form method="POST" action="{{ route('user.update', $user) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                                @csrf
                                
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-12">
                                        <label class="small mb-1">Nombre</label>
                                        <input class="form-control" type="text" name="name" placeholder="Enter username" value="{{$user->name}}"  required />
                                        @error('name')
                                            <small class="text-danger" autofocus> {{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label class="small mb-1" >Email</label>
                                        <input class="form-control"  type="email" name="email" placeholder="Enter email" value="{{$user->email}}" required />
                                        @error('email')
                                            <small class="text-danger" autofocus> {{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label class="small mb-1" >Ingrese Contraseña</label>
                                        <input class="form-control"  type="password" name="password" placeholder="Enter password" />
                                        <p style="color:#28a745; font-size:12px;">Deje en blanco el campo contraseña si no desea modificarla.</p>
                                        @error('password')
                                            <small class="text-danger" autofocus> {{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary lift" type="submit">Save changes</button>
                                <a href="{{route('user.index')}}" class="btn btn-danger lift">Cancelar</a>
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