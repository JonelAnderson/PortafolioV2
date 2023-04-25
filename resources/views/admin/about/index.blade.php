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
								ACTUALIZAR ACERCA DE MI
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
						<form method="POST" action="{{ route('about.update', $about) }}"  role="form" enctype="multipart/form-data">
							{{ method_field('PATCH') }}
							@csrf
														   
							<!-- Form Row-->
							<div class="row gx-3 mb-3">
								<div class="col-md-6">
									<label class="small mb-1">Title</label>
									<input class="form-control"  type="text" name="title" placeholder="Enter" value="{{$about->title}}" required />
								</div>
								<div class="col-md-6">
									<label class="small mb-1">Web Site</label>
									<input class="form-control"  type="text" name="website" placeholder="Enter" value="{{$about->website}}" required />
								</div>
								<div class="col-md-6">
									<label class="small mb-1">Degree</label>
									<input class="form-control"  type="text" name="degree" placeholder="Enter" value="{{$about->degree}}" required />
								</div>
								<div class="col-md-6">
									<label class="small mb-1">City</label>
									<input class="form-control"  type="text" name="city" placeholder="Enter" value="{{$about->city}}" required />
								</div>
								<div class="col-md-6">
									<label class="small mb-1">Email</label>
									<input class="form-control"  type="email" name="email" placeholder="Enter" value="{{$about->email}}" required />
								</div>
								<div class="col-md-6">
									<label class="small mb-1">Phone</label>
									<input class="form-control"  type="text" name="phone" placeholder="Enter" value="{{$about->phone}}" required />
								</div>
								<div class="col-md-6">
									<label class="small mb-1">Freelance</label>
									<input class="form-control"  type="text" name="freelance" placeholder="Enter" value="{{$about->freelance}}" required />
								</div>
								<div class="col-md-6">
									<label class="small mb-1" >Descripción</label>
									<textarea class="form-control" type="text" name="description" placeholder="Enter descripcion" rows="3" required >{{$about->description}}</textarea>
								</div>
							</div>
							<!-- Save changes button-->
							<div style="float: right;" class="pt-4">
							    <a href="/public/admin/main" class="btn btn-danger lift">Cancelar</a>
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