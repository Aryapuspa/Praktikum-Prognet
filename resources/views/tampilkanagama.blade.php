@extends('layout.app')

		@section('title','CRUD Agama')

		@section('judul')
			  <h1><b> Details Agama <b> </h1>
		@endsection

		@section('konten')
		<form class="w3-container w3-card-4">
			<p>
				<label for="agama">Agama</label>
				<input type="text" class="w3-input w3-border" name="agama" value="{{$agama->agama}}" readonly>
			</p>
			<br>
			
			<p>
				<center>
				<input type="button" class="w3-button w3-block w3-blue" style="width:25%"  value="Kembali" onclick="location.href='/agama'">
			</center>
			</p>
			</form>
		@endsection	