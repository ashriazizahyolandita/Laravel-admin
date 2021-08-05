@extends('app')

@section('title', 'Data Admin')

@section('content')
<div class="container">
<div class="jumbotron">
@if(session('msg'))
<div class="alert alert-success alert-dismissible fade show mt-2"
                role="alert">
{{session('msg')}}
<button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<center><h1><font size="6" color="black" face="Cursive" >Data Admin</font></h1></center>
<a href="profile/create" class="btn btn-primary mb-1">
Tambah Data</a> </br>
<button> <a href="/profile/{{$profile['id']}}/edit" class='button' style='width:auto;'>Edit</button>
<button> <a href="" class='button' style='width:auto;'>Hapus</button>


<table class="table table-bordered border-secondary">
<thead class="thead-dark">
<tr>
<th scope="col">Nama Lengkap </th>
<th scope="col">Tentang Saya</th>
</th>
</tr>
</thead>
<tbody>
@foreach ($profile as $profil)
<tr>
<tr bgcolor='#B0E0E6'  align='center'>
<td>{{ $profil->namasaya }}</td>
<td>{{ $profil->tentangsaya }}</td>
</tr>
@endforeach
<div>
    {{$profile->links()}}
 </div>
 </br>
<h3><font size="4" color="black" face="Cursive" >Profile</font></h3>



<table class="table table-bordered border-secondary">
<thead class="thead-dark">
<tr>
<th scope="col">Nama Pendidikan</th>
<th scope="col">Jurusan</th>
<th scope="col">Tahun </th>
</th>
</tr>
</thead>
<tbody>
@foreach ($profile as $profil)
<tr>
<tr bgcolor='#B0E0E6'  align='center'>
<td>{{ $profil->namapendidikan }}</td>
<td>{{ $profil->jurusan }}</td>
<td>{{ $profil->tahun }}</td>
</tr>
@endforeach
<div>
    {{$profile->links()}}
 </div>
 </br>
<h3><font size="4" color="black" face="Cursive" >Pendidikan</font></h3>


 <table class="table table-bordered border-secondary">
<thead class="thead-dark">
<tr> 
<th scope="col">Nama Usaha</th>
<th scope="col">Posisi</th>
<th scope="col">Keterangan</th>
</th>
</tr>
</thead>
<tbody>
@foreach ($profile as $profil)
<tr>
<tr bgcolor='#B0E0E6'  align='center'>
<td>{{ $profil->namausaha }}</td>
<td>{{ $profil->posisi }}</td>
<td>{{ $profil->keteranganusaha }}</td>
</tr>
@endforeach
<div>
    {{$profile->links()}}
 </div>
 </br>
<h3><font size="4" color="black" face="Cursive" >Pengalaman Kerja/ Usaha</font></h3>


<table class="table table-bordered border-secondary">
<thead class="thead-dark">
<tr> 
<th scope="col">whatsapp</th>
<th scope="col">email</th>
<th scope="col">instagram</th>
<th scope="col">alamat</th>
</th>
</tr>
</thead>
<tbody>
@foreach ($profile as $profil)
<tr>
<tr bgcolor='#B0E0E6'  align='center'>
<td>{{ $profil->nohp }}</td>
<td>{{ $profil->email }}</td>
<td>{{ $profil->instagram }}</td>
<td>{{ $profil->alamat }}</td>
</tr>
@endforeach
<div>
</br>
<h3><font size="4" color="black" face="Cursive" >Kontak</font></h3>
{{$profile->links()}}
 </div>
@endsection