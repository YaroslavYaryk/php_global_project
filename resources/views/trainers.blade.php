@extends("base")

@section("title", "Trainers")

@section('style')
	<link href="{{ url('css/trainers.css') }}" rel="stylesheet" type="text/css" >
@endsection



@section('content')

<div class="container__body">
	<div class="container__header">
		<div class="container__title">Тренери</div>
	</div>
	<div class="row" style="width: 100%;">
		@foreach ($trainers as $trainer)
			<div class="col-md-12 row__item" style="width: 85%;">
				<div class="col-sm-12__img row__item-img">
					<img class="row__item-img-image" src=" {{ url($trainer->image_link) }}" alt="">
				</div>
				<ul type="none" class="col-sm-12__list">
					<li><a style=" color:#ECDB3F" href="{{ url('trainers/' . $trainer->id) }}">ПІБ: {{$trainer->name}} </a></li>
					<li>Вік: {{$trainer->age}} р.</li>
					<li>Професіональний стаж: {{$trainer->experience}} p.</li>
					<li>Напрям спорту: {{$trainer->sport_direction}}</li>
					<li>Габарити тіла: {{$trainer->gabarites}} см</li>
					<li>Ціна тренування: {{$trainer->price}} грн</li>
				</ul>
			</div>
		@endforeach
		
	</div>

@endsection