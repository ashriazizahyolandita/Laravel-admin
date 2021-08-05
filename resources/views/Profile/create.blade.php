@extends('app')

@section('title', 'Tambah data')

@section('content')
<div class="container">
<div class="jumbotron">
<form action="/profile" method="POST">

@csrf


<div class="form-group">
<label for="namasaya">Nama saya</label>
<input type="text" class="form-control" id="namasaya"
                    name="namasaya" placeholder="namasaya"
                    value="">
</div>
<div class="form-group">
<label for="tentangsaya">tentangsaya</label>
<input type="text" class="form-control" id="tentangsaya"
                    name="tentangsaya" placeholder="tentangsaya"
                    value="">
                  
                    <div class="form-group">
<label for="namapendidikan">Nama Pendidikan</label>
<input type="text" class="form-control" id="namapendidikan"
                    name="namapendidikan" placeholder="namapendidikan"
                    value="">
</div>
<div class="form-group">
<label for="jurusan">Jurusan</label>
<input type="text" class="form-control" id="jurusan"
                    name="jurusan" placeholder="jurusan"
                    value="">
                  
                    <div class="form-group">
<label for="tahun">Tahun</label>
<input type="text" class="form-control" id="tahun"
                    name="tahun" placeholder="tahun"
                    value="">
</div>
<div class="form-group">
<label for="namausaha">Nama Usaha</label>
<input type="text" class="form-control" id="namausaha"
                    name="namausaha" placeholder="namausaha"
                    value="">
                  
                    <div class="form-group">
<label for="posisi">posisi</label>
<input type="text" class="form-control" id="posisi"
                    name="posisi" placeholder="posisi"
                    value="">
</div>
<div class="form-group">
<label for="keteranganusaha">keterangan usaha</label>
<input type="text" class="form-control" id="keteranganusaha"
                    name="keteranganusaha" placeholder="keteranganusaha"
                    value="">

<div class="form-group">
<label for="nohp">whatsapp</label>
<input type="number" class="form-control" id="nohp"
                    name="nohp" placeholder="nohp"
                    value="">
</div>
<div class="form-group">
<label for="instagram">instagram</label>
<input type="text" class="form-control" id="instagram"
                    name="instagram" placeholder="instagram"
                    value="">

<div class="form-group">
<label for="alamat">Alamat</label>
<input type="text" class="form-control" id="alamat"
                    name="alamat" placeholder="alamat"
                    value="">
</div>



 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



   
@endsection