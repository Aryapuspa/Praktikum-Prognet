@extends('layout.app')

@section('title','CRUD Penduduk')

@section('judul')
<br><br><br><br><br>

 <h1><b> Daftar Penduduk <b> </h1>

 @endsection

 @section('konten')

 

			<input  type="button" class="w3-button w3-block w3-green" style="width:15%" value="Tambah penduduk" onclick="location.href='/penduduk/create'">
			<br>
			@if($all_penduduk->isEmpty())
				Belum ada data ...
			@else
			<table align="center", border="10" class="w3-table-all" >
				<tr class="w3-blue" >
					<th>No</th>
					<th>Nama</th>
					<th>NIK</th>
					<th>Telepon</th>
					<th>Agama</th>
					<th>Alamat Lengkap</th>
					<th>Desa/Kelurahan</th>
					<th>Pekerjaan</th>
					<th>Aksi</th> 

				</tr>
				@foreach($all_penduduk as $pn)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$pn->nama}}</td>
						<td>{{$pn->nik}}</td>
						<td>{{$pn->telepon}}</td>
						<td>{{$pn->agama->agama}}</td>
						<td>{{$pn->alamat_lengkap}}</td>
						<td>{{$pn->alamat->desakelurahan}}</td>
						<td>{{$pn->pekerjaan->pekerjaan}}</td>
						<td>
							<span>
								<input type="button" class="w3-button w3-yellow w3-border" style="width:100%" value="Edit" onclick="location.href='/penduduk/{{$pn->id}}/edit'"> <br>
								<form style="display:inline-block;" action="/penduduk/{{$pn->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" class="w3-button w3-red w3-border" style="width:105%" value="Delete"> 
								</form><br>
								<input type="button"  class="w3-button w3-orange w3-border" style="width:100%" value="Details" onclick="location.href='/penduduk/{{$pn->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>

					<br><br>
                     <img  height="22" width="30" src="{{ ('img/photo.png') }}">  Copyright &copy 2020 All rights reserved 
                    <br><br>

			@endif
		@endsection