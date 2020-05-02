@extends('layout.app')

@section('title','CRUD Agama')

@section('judul')
<br><br><br><br><br><br><br>
  <h1><b> Daftar Agama <b> </h1>

 @endsection

 @section('konten')

 

			<input type="button" class="w3-button w3-block w3-green" style="width:25%" value="Tambah Agama" onclick="location.href='/agama/create'">
			<br>
			@if($all_agama->isEmpty())
				Belum ada data ...
			@else
			<table align="center", border="10" class="w3-table-all" >
				<tr class="w3-blue">
					<th>No</th>
					<th>Agama</th>
					<th>Aksi</th> 

				</tr>
				@foreach($all_agama as $pn)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$pn->agama}}</td>
						<td>
							<span>
							<input type="button" class="w3-button w3-yellow w3-border" style="width:100%" value="Edit" onclick="location.href='/agama/{{$pn->id}}/edit'"><br>
								<form style="display:inline-block;" action="/agama/{{$pn->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" class="w3-button w3-red w3-border" style="width:251%" value="Delete">
								</form><br>
								<input type="button" class="w3-button w3-orange w3-border" style="width:100%" value="Details" onclick="location.href='/agama/{{$pn->id}}'">
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