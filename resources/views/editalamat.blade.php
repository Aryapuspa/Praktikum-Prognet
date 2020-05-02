@extends('layout.app')

		@section('title','CRUD Alamat')

		@section('judul')
		  <h1><b> Edit Alamat <b> </h1>
		@endsection

		@section('konten')
		<form class="w3-container w3-card-4" action="/alamat/{{$alamat->id}}" method="POST">
				@csrf
				@method('PUT')
			<p>
				<label for="desakelurahan">Desa/Kelurahan</label>
				<input type="text" class="w3-input w3-border" name="desakelurahan" value="{{$alamat->desakelurahan}}" >
			</p>
			<br>

			<p>
				<label for="kabupaten">Kabupaten</label>
				<input type="text" class="w3-input w3-border" name="kabupaten" value="{{$alamat->kabupaten}}" >
			</p>
			<br>

			<p>
				<label for="provinsi">Provinsi</label>
				<input type="text" class="w3-input w3-border" name="provinsi" value="{{$alamat->provinsi}}" >
			</p>
			<br>
			
			<p>
				<center>
					<input type="submit" class="w3-button w3-block w3-green"  style="width:25%" value="Simpan">
					</center>
			</p>
			</form>
		@endsection	