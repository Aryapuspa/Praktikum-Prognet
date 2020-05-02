@extends('layout.app')

@section('title','CRUD Alamat')

@section('judul')
<br><br><br><br><br>

 <h1><b> Daftar Alamat <b> </h1>

 @endsection

 @section('konten')

 

			<input type="button" class="w3-button w3-block w3-green" style="width:25%" value="Tambah Alamat" onclick="location.href='/alamat/create'">
			<br>
			@if($all_alamat->isEmpty())
				Belum ada data ...
			@else
			<table align="center", border="10" class="w3-table-all">
				<tr  class="w3-blue">
					<th>No</th>
					<th>Desa/Kelurahan</th>
					<th>Kabupaten</th>
					<th>Provinsi</th>
					<th>Aksi</th> 

				</tr>
				@foreach($all_alamat as $pn)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$pn->desakelurahan}}</td>
						<td>{{$pn->kabupaten}}</td>
						<td>{{$pn->provinsi}}</td>
						<td>
							<span>
								<input type="button" class="w3-button w3-yellow w3-border" style="width:100%" value="Edit" onclick="location.href='/alamat/{{$pn->id}}/edit'"><br>
								<form style="display:inline-block;" action="/alamat/{{$pn->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" class="w3-button w3-red w3-border" style="width:155%" value="Delete">
								</form><br>
								<input type="button" class="w3-button w3-orange w3-border" style="width:100%" value="Details" onclick="location.href='/alamat/{{$pn->id}}'">
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