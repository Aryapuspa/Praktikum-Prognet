@extends('layout.app')

		@section('title','CRUD penduduk')

		@section('judul')
		<br><br>
			  <h1><b> Details Penduduk <b> </h1>
		@endsection

		@section('konten')

		<form class="w3-container w3-card-4"> 
			<p>
				<label  for="nama">Nama</label>
				<input type="text" class="w3-input w3-border" name="nama" value="{{$penduduk->nama}}" readonly>
			</p>
			<br>
			<p>
				<label  for="telepon">Telepon</label>
				<input type="text" class="w3-input w3-border" name="telepon" value="{{$penduduk->telepon}}" readonly>
			</p>
			<br>

			<p>
				<label  for="nik">NIK</label>
				<input type="text" class="w3-input w3-border" name="nik" value="{{$penduduk->nik}}" readonly>
			</p>
			<br>
			
			
			<p>
				<label  for="id_agama">Agama </label>
				<select class="w3-input w3-border" name="id_agama">
					@foreach($agamas as $agama)
					<option value="{{$agama->id}}" @if($penduduk->id_agama==$agama->id) selected @endif> {{$agama->agama}}</option >
					@endforeach
				</select>
			</p>
			<br>

			<p>
				<label  for="alamat_lengkap">Alamat Lengkap</label>
				<input type="text" class="w3-input w3-border" name="alamat_lengkap" value="{{$penduduk->alamat_lengkap}}" readonly>
			</p>
			<br>

			<p>
				<p>
				<label  for="id_alamat">Desa/Kelurahan </label>
				<select class="w3-input w3-border" name="id_alamat">
					@foreach($alamats as $alamat)
					<option value="{{$alamat->id}}" @if($penduduk->id_alamat==$alamat->id) selected @endif> {{$alamat->desakelurahan}}</option >
					@endforeach
				</select>
			</p>
			<br>

			<p>
				<p>
				<label for="id_pekerjaan">Pekerjaan </label>
				<select class="w3-input w3-border" name="id_pekerjaan">
					@foreach($pekerjaans as $pekerjaan)
					<option value="{{$pekerjaan->id}}" @if($penduduk->id_pekerjaan==$pekerjaan->id) selected @endif> {{$pekerjaan->pekerjaan}}
					</option >
					@endforeach
				</select>
			</p>
			<p>
			<br>
				
			<p>
				<center>
				 <input type="button" class="w3-button w3-block w3-blue" style="width:25%" value="Kembali" onclick="location.href='/penduduk'">
				</center>
			</p>
			</form>
		@endsection	