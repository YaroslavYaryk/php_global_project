@extends("base")

@section("title", $trainer->name)

@section('style')
	<link href="{{ url('css/trainers.css') }}" rel="stylesheet" type="text/css" >
@endsection



@section('content')

<div class="container__body">
	<div class="container__header">
		<div class="container__title">Тренери</div>
	</div>
	<div class="row" style="width: 100%; margin-bottom: -50px;">
			<div class="col-md-12 row__item" style="width: 85%;">
				<div class="col-sm-12__img row__item-img">
					<img class="row__item-img-image" src=" {{ url($trainer->image_link) }}" alt="">
				</div>
				<ul type="none" style="font-weight: 300" class="col-sm-12__list">
					<li >ПІБ: {{$trainer->name}} </li>
					<li>Вік: {{$trainer->age}} р.</li>
					<li>Професіональний стаж: {{$trainer->experience}} p.</li>
					<li>Напрям спорту: {{$trainer->sport_direction}}</li>
					<li>Габарити тіла: {{$trainer->gabarites}} см</li>
					<li>Ціна тренування: {{$trainer->price}} грн</li>
				</ul>
			</div>
	</div>

	<div class="container__header">
		<div class="container__title">Місце роботи</div>
	</div>
	<div class="col-md-12 row__item" style="width: 85%;">
		<div class="col-sm-12__img row__item-img">
			<img class="row__item-img-image" src='{{ url($trainer->place->image_link) }}' alt="">
		</div>
		<ul type="none" class="col-sm-12__list">
			<li class="list__item-head" style="font-weight: 500; color: #ECDB3F">Bon Loage</li>
			<li >Адреса: {{$trainer->place->address}}</li>
			<li>Адміністратор: {{$trainer->place->administrator}}</li>
			<li>Viber: {{$trainer->place->viber}}</li>
			<li>Telegram: {{$trainer->place->telegram}}</li>
			<li>WhatsApp: {{$trainer->place->whatsup}}</li>
		</ul>
	</div>


@endsection