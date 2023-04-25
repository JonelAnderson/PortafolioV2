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
								SERVICIOS
							</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="page-body page-body-light pt-3">
				<div class="card card-header-actions">
					<div class="card-header">
						CODIGO FUENTE DE SERVICIOS
					</div>
					@if (\Session::has('success'))
					<div class="alert alert-success">
						<ul>
							<li>{{\Session::get('success')}}</li>
						</ul>
					</div>
					@endif
					<form action="{{route('save_cambios.config')}}" method="POST">
						@csrf
						<div class="card">
							<textarea id="code" name="code">
								<?php echo $service?>
							</textarea>
							<div class="card-footer">
							    <div style="float:right;">
							        <button class="btn btn-primary lift" type="submit">Guardar cambios</button>
							    </div>
							</div>
						</div>
					</form>
				</div>
            </div>
            <style>
                .CodeMirror {border-top: 1px solid black; border-bottom: 1px solid black;}
                .CodeMirror pre > * { text-indent: 0px; }
                pre.CodeMirror-line {
                        padding-left: 10px !important;
            }
			</style>
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
@push('scripts')
<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        lineWrapping: true,
        mode: "text/html",

      });

      editor.refresh();
      editor.setOption("theme", 'monokai');
      editor.setSize('100%', 400);

</script>
@endpush
@endsection



