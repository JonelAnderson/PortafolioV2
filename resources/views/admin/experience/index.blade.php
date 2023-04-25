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
								EXPERIENCES
							</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="page-body page-body-light pt-3">
				<div class="card card-header-actions">
					<div class="card-header">
						Experiences
						<a href="{{route('experience.create')}}" class="btn btn-primary lift">{{ __('Create New') }}</a>
					</div>
					@if (\Session::has('success'))
					<div class="alert alert-success">
						<ul>
							<li>{{\Session::get('success')}}</li>
						</ul>
					</div>
					@endif
					<!--<div class="d-grid gap-2 d-md-flex justify-content-md-end py-2 px-4">
						<form class="form-inline">
							<input name="busqueda" class="form-control me-md-2" type="search" placeholder="Ingrese nombre" aria-label="Search" autocomplete="off">
							<button class="btn btn-outline-primary btn-sm" type="submit">Buscar</button>
						</form>
					</div>-->
					<div class="card-body py-1">

						<table class="table table-sm table-hover" id="datatablesSimple">
							<thead class="table-light">
								<tr>
									<th class="text-center">ID</th>
									<th class="text-center">Periodo</th>
									<th class="text-center">Titulo</th>
									<th class="text-center">Descripcion</th>
									<th class="text-center">Acciones</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($experiences as $item)
								<tr>
									<td class="text-center">{{$item->id}}</td>
									<td class="text-center">{{$item->period}}</td>
									<td class="text-center">{{$item->title}}</td>
									<td class="text-center">{{$item->description}}</td>
									<td class="text-center">
									    
											<form action="{{ route('experience.destroy',$item->id) }}" method="POST" class="formEliminar">
												<a class="btn btn-warning  lift btn-sm" href="{{ route('experience.edit',$item->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger lift btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
											</form>
										</td>
								</tr>
								@endforeach
							</tbody>
						</table>
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



