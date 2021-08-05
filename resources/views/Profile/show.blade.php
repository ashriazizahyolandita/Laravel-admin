@extends('app')

@section('title', 'show')
@section('content')
<div class="card">
    <div class="card-body">
        <h3>Nama Lengkap :{{$profil['namasaya']}}</h3>
        <h3>Tentang :{{$profil['tentangsaya']}}</h3>
    </div>
</div>
@endsection