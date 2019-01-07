@extends('layouts.site')
@section('content')
<body>			        
	@if($ads)
    <div class="moreAboutAd">
    	<div class="moreAboutAd__wrapper">
            <p class="content__adverts__item__price" > {{$ads->name}}</p>
            <p class="content__adverts__item__description">{{$ads->title}}</p>
            <p class="content__adverts__item__telephone">Продам по {{$ads->price}} сом {{$ads->quantitly}} {{$ads->unit}}</p>
        </div>	
    </div>
    @endif
</body>
@endsection