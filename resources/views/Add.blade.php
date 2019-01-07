
@extends('layouts.site')
@section('content')
<body>
<!-- Форма добавления объявления (Начало) -->
          <form class="addAdForm" action="{{route('adsStore')}}" method="POST">
            {{csrf_field()}}
            <i class="far fa-calendar-plus addAdForm_plus"></i>
            <a href="{{route('adsIndex')}}"><i class="fas fa-times addAdForm_close"></i></a>
            <p class="addAdForm_title">Добавление объявления</p>
            <div class="addAdForm_item">
              <label for="number">Введите номер телефона:</label>
              <input id="number" required type="tel" name="number">
            </div>
            <div class="addAdForm_item">
              <label for="name">Название продукта:</label>
              <input id="name" required type="text" name="name">
            </div>
            <div class="addAdForm_item">
              <label for="title">Описание:</label>
              <input id="title" required type="text" name="title">
            </div>
            <div class="addAdForm_item">
              <label for="price">Цена:</label>
              <input id="price" type="number" name="price">
            </div>
            <div class="addAdForm_item">
              <label for="quantitly">Количество:</label>
              <input id="quantitly" required type="number" name="quantitly">
            </div>
            <div class="addAdForm_item">
              <label for="unit">Единицы измерения:</label>
              <input id="unit" required type="text" name="unit">
            </div>
            <div class="addAdForm_item">
              <label for="media">Выберите фотографию:</label>
              <input class="addAdForm_photo" id="media" type="file" name="media">
            </div>
            <input class="addAdForm_submit" type="submit" value="Опубликовать">
          </form>
        </div>
        <!-- Форма добавления объявления (Конец) -->
</body>
@endsection