@extends('layouts.site')
@section('content')
<div class="container">
@foreach($photo as $photo)


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('/storage/'.$photo->photo)}}" width="300" height="200">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


@endforeach
<form method="POST" action="{{route('add_photo')}}" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="file" name="photo"><br>
	<button type="submit" class="btn btn-success">Добавить</button>
</form>
</div>
@endsection