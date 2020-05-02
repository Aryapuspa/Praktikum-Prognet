@extends('layout.app')

		@section('title','CRUD Pekerjaan')

		@section('judul')
			  <h1><b> Tambah Pekerjaan <b> </h1>
		@endsection

		@section('konten')
			<form class="w3-container w3-card-4" action="/pekerjaan" method="POST">
				@csrf
			
				<p>
					<label for="pekerjaan">Pekerjaan</label>
					<input type="text"  class="w3-input w3-border"   name="pekerjaan" >
				</p>
				<br>
				
				<p>
					<label for="kategori"> Lama Bekerja </label>
					<select  class="w3-input w3-border"  name="kategori" id="kategori">
						<option value="Negeri ">Negeri</option>
						<option value="Swasta"> Swasta</option>
						<option value="lainnya "> Lainnya </option>
					</select>
				</p>
				<br>

				<p>
					<center>
					<input class="w3-button w3-block w3-green" style="width:25%" type="submit" value="Simpan"> <br>
					<input class="w3-button w3-block w3-blue" style="width:25%" type="button" value="Kembali" onclick="location.href='/pekerjaan'">
				</center>
				</p>
			</form>
		@endsection	