@extends('layout.app')

		@section('title','CRUD Pekerjaan')

		@section('judul')
			  <h1><b> Details Pekerjaan <b> </h1>
		@endsection

		@section('konten')
		<form class="w3-container w3-card-4">

			<p>
				<label for="pekerjaan">Pekerjaan</label>
				<input type="text" class="w3-input w3-border" name="pekerjaan" value="{{$pekerjaan->pekerjaan}}" readonly>
			</p>
			<br>

			<p>
				<label for="kategori">Kategori</label>
				<input type="text" class="w3-input w3-border" name="kategori" value="{{$pekerjaan->kategori}}" readonly>
			</p>
			<br>

				
		
			<p>
				<center>
				<input type="button" class="w3-button w3-block w3-blue" style="width:25%" value="Kembali" onclick="location.href='/pekerjaan'">
				</center>
			</p>
			</form>
		@endsection	