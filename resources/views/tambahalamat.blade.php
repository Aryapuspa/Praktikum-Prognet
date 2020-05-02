@extends('layout.app')

		@section('title','CRUD Alamat')

		@section('judul')
			  <h1><b> Tambah Alamat <b> </h1>
		@endsection

		@section('konten')
			<form class="w3-container w3-card-4"  action="/alamat" method="POST">
				@csrf
			
				<p>
					<label for="desakelurahan">Desa/Kelurahan</label>
					<input type="text"  class="w3-input w3-border"  name="desakelurahan" >
				</p>
				<br>

				<p>
					<label for="kabupaten">Kabupaten</label>
					<input type="text"  class="w3-input w3-border"  name="kabupaten" >
				</p>
				<br>

				<p>
					<label for="provinsi">Provinsi</label>
					<input type="text"  class="w3-input w3-border"  name="provinsi" >
				</p>
				<br>
				
				<p>
					<center>
					<input class="w3-button w3-block w3-green" style="width:25%" type="submit" value="Simpan"><br>
					<input class="w3-button w3-block w3-blue" style="width:25%" type="button" value="Kembali" onclick="location.href='/alamat'">
				</center>
				</p>
			</form>
		@endsection	