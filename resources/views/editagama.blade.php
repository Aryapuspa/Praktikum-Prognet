@extends('layout.app')


		@section('title','CRUD Agama')

		@section('judul')
			  <h1><b> Edit Agama <b> </h1>
		@endsection

		@section('konten')
		<form class="w3-container w3-card-4" action="/agama/{{$agama->id}}" method="POST">
				@csrf
				@method('PUT')
			<p>
				<label for="agama">Agama</label>
				<input type="text" class="w3-input w3-border" name="agama" value="{{$agama->agama}}" >
			</p>
			<br>
			
			<p>
				<center>
					<input type="submit" class="w3-button w3-block w3-green"  style="width:25%" value="Simpan">
				</center>
			</p>
			</form>
		@endsection	