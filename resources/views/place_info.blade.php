@extends("base")


@section("title", $place->name)
 

@section('style')
	<link href="{{ url('css/info.css') }}" rel="stylesheet" type="text/css" >
@endsection


@section('content')
	<div class="container__body">
		<div class="container__header">
			<div class="container__title">{{ $place->name }}</div>
		</div>
		<div class="row" style="width: 100%;">
			<div class="col-md-12 row__item" style="width: 85%;">
				<div class="col-sm-12__img row__item-img">
					<img class="row__item-img-image" src="{{ url($place->image_link) }}" alt="">
				</div>
				<ul type="none" class="col-sm-12__list">
					<li class="list__item-head" style="font-weight: 500; color:#ECDB3F">{{$place->name}}</li>
					<li>Адреса :  {{$place->address}}</li>
					<li>Адміністратор: {{$place->administrator}}</li>
					<li>Viber: {{$place->viber}}</li>
					<li>Telegram: {{$place->telegram}}</li>
					<li>WhatsApp: {{$place->whatsup}}</li>
				</ul>
			</div>
			
		</div>
	</div>

@endsection