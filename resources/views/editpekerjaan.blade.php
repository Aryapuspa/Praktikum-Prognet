@extends('layout.app')

		@section('title','CRUD Pekerjaan')

		@section('judul')
			  <h1><b> Edit Pekerjaan <b> </h1>
		@endsection

		@section('konten')
		<form class="w3-container w3-card-4" action="/pekerjaan/{{$pekerjaan->id}}" method="POST">
				@csrf
				@method('PUT')
			<p>
				<label for="pekerjaan">Pekerjaan</label>
				<input type="text" class="w3-input w3-border"  name="pekerjaan" value="{{$pekerjaan->pekerjaan}}" >
			</p>
			<br>

				<p>
					<label for="kategori"> Kategori </label>
					<select class="w3-input w3-border"  name="kategori" id="kategori">
						<option value="Negeri"> Negeri</option>
						<option value="Swasta"> Swasta</option>
						<option value="Lainnya "> Lainnya</option>
					</select>
				</p>
		<br>

			<p>
				<center>
					<input type="submit" class="w3-button w3-block w3-green"  style="width:25%" value="Simpan">
				</center>
			</p>
			</form>
		@endsection	