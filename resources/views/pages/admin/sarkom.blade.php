@extends('layouts/admin/admin')

@section('title','Saran & Komentar')

@section('content')


<div class="card shadow mb-4" width="100%">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Saran & Komentar</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Saran & Komentar</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					@foreach($sarkom as $data)
					<tr>
						<td>{{$no++}}</td>
						<td>{{$data->nama_sarkom}}</td>
						<td>{{$data->email_sarkom}}</td>
						<td>{{$data->isi_sarkom}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection