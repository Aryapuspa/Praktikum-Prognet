@extends('layout.app')

		@section('title','CRUD Alamat')

		@section('judul')
			  <h1><b> Details Alamat <b> </h1>
		@endsection

		@section('konten')
		<form class="w3-container w3-card-4">
			<p>
				<label for="desakelurahan">Desa/Kelurahan</label>
				<input type="text" class="w3-input w3-border"  name="desakelurahan" value="{{$alamat->desakelurahan}}" readonly>
			</p>
			<br>

			<p>
				<label for="kabupaten">Kabupaten</label>
				<input type="text" class="w3-input w3-border"  name="kabupaten" value="{{$alamat->kabupaten}}" readonly>
			</p>
			<br>


			<p>
				<label for="provinsi">Provinsi</label>
				<input type="text" class="w3-input w3-border"  name="provinsi" value="{{$alamat->provinsi}}" readonly>
			</p>
			<br>
			
			<p>
				<center>
				<input type="button" class="w3-button w3-block w3-blue" style="width:25%"  value="Kembali" onclick="location.href='/alamat'">
				</center>
			</p>
			</form>
		@endsection	