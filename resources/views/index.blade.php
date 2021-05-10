@extends('layouts.main')

@section('header')
<div class="page-header">
	<div class="page-header-content header-elements-md-inline">
		<div class="page-title d-flex">
			<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
			<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
		</div>

		<div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
			<div class="btn-group">
				<button type="button" class="btn bg-indigo-400"><i class="icon-stack2 mr-2"></i> Tambah Pengguna</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-xl">

		<!-- Marketing campaigns -->
		<div class="card">
			<div class="card-header header-elements-sm-inline">
				<h6 class="card-title">Daftar Pengguna Aplikasi</h6>
			</div>

			<div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
				<div class="table-responsive">
					<table id="datatable" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>Pekerjaan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Archie Cakra</td>
								<td>archiecakra1@gmail.com</td>
								<td>di rumah</td>
								<td>kerja</td>
								<td>
									<button class="btn btn-info btn-md">Edit</button>
									<button class="btn btn-danger btn-md">Delete</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /marketing campaigns -->

	</div>
</div>
@endsection