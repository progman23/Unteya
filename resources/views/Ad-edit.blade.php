@extends('layouts.site')
@section('content')
<body>			      
@if($ads)
<div class="addAdForm__wrapper">  
					<form class="addAdForm" method="POST" action="{{route('adsEdit')}}">
						@csrf
							<label for="name"> Название продукта</label>
							<input type="text" class="form-controll" id="name" name="name" placeholder="{{$ads->name}}"><br>
							<label for="title"> Описание</label>
							<input type="text" class="form-controll" id="title" name="title" placeholder="{{$ads->title}}"> <br>
							<label for="price"> Цена</label>
							<input type="text" class="form-controll" id="price" name="price" placeholder="{{$ads->price}}"><br>
							<label for="quantitly"> Количество</label>
							<input type="text" class="form-controll" id="quantitly" name="quantitly" placeholder="{{$ads->quantitly}}">
							<label for="unit"> Ед. измерения</label>
							<input type="text" class="form-controll" id="unit" name="unit" placeholder="{{$ads->unit}}">
							<label for="media"> Фотография</label>
							<input type="file" class="form-controll" id="media" name="media" placeholder="Фотография">
				<button type="submit" class="addAdForm_submit"> submit</button>
			</form> 
</div>
@endif
</body>
@endsection