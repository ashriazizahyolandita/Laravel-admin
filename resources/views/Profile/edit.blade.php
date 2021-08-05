@extends('app')

@section('title', 'Edit data')

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
                  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



   
@endsection