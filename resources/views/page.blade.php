@extends('layouts.site')
@section('content')

<body>
        
        <!-- Форма выбора входа/регистрации (Начало) -->
        <div class="choiceForm__wrapper">
          <form class="choiceForm" action="#">
            <i class="fas fa-user-circle choiceForm_man"></i>
            <i class="fas fa-times choiceForm_close"></i>
            <a href="{{ route('login') }}" class="choiceForm_enter"> Вход </a>
            <a href="{{ route('register') }}"  class="choiceForm_registration"> Регистрация </a>
          </form>
        </div>
        <!-- Форма выбора входа/регистрации (Конец) -->

        
    <div class="wrapper">
        
        <!-- Шапка(Хэдер) (Начало) -->
        <header class="header">
            <div class="header_wrapper">
                <div class="header__control">
                    <form class="header__control__form" action="#" method="GET">
                        <input class="header__control__form__input" type="text" placeholder="Что нужно найти?">
                    </form>
                    <i class="fas fa-search header_search"></i>
                    <i class="fas fa-user-alt header_login"></i>
                   <a href="{{route('adsAdd')}}"> <i class="fas fa-plus header_add" ></i> </a>
                </div>
                <h1 class="header_title">UNTEYA</h1>
            </div>
        </header>
        <!-- Шапка(Хэдер) (Конец) -->


        <!-- Контент (Блок с объявлениями) (Начало) -->
        <main class="content">
            <div class="content__adverts">
        @foreach($ads as $ad)
                <div class="content__adverts__item"> <!-- Внутри блока с классом "content__adverts__item" находится название категории, цена, описание, и номер телефона -->
                    <!--<img class="content__adverts__item__img" src="{{asset('/storage/'.$ad->photo)}}">-->
                    <p class="content__adverts__item__category">{{$ad->name}}</p>
                    <p class="content__adverts__item__price">{{$ad->price}} сом</p>
                    <p class="content__adverts__item__description">{{$ad->title}}</p>
                    <p class="content__adverts__item__telephone"><i class="fas fa-mobile-alt content__adverts__item__telephone__icon"></i>{{$ad->number}}</p>
                    <a href="{{route('adsShow',['id'=>$ad->id])}} role="button" class="btn btn-danger">Подробнее </a>
                    <form action="{{route('adsDelete',['ads'=>$ad->id])}}" method="POST">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                        <button type="submit" class="btn btn-danger"> Удалить</button></form>
                </div>           
             @endforeach
            </div>
        </main>
        <!-- Контент (Блок с объявлениями) (Конец) -->
        
    </div>
    <script src="{{asset('../js/script.js')}}"></script>

</body>

</html>
@endsection