@extends("base")

@section("title", "Profile")

@section('style')
	<link href="{{ url('css/trainers.css') }}" rel="stylesheet" type="text/css" >
@endsection



@section('content')

<div class="container__body">
	<div class="container__header">
		<div class="container__title" style="font-size: 40px;">Профіль {{ucfirst(trans($user->name))}} {{ucfirst(trans($user->surname))}}</div>
	</div>


	@if ($user->plan)
		<div class="" style="margin-left: 280px; font-size: 20px;">Тренувальний план : {{$user->plan->name}} <a style="color:aliceblue" href="{{url('pricing/')}}">(Змінити)</a></div>
	@else
		<div class="" style="margin-left: 280px; font-size: 20px;">Тренувальний план : <a 
			style="text-decoration: none; border-bottom: 2px dashed white; color:aliceblue" 
			href="{{url('pricing/')}}">Вибрати тариф</a></div>

	@endif	
	<br>
	
	<div class="container__title" style="font-size: 30px;">Зал відвідування</div>
	<div class="col-md-12 row__item" style="width: 85%;">
		<ul type="none" class="col-sm-12__list">
		</ul>
	</div>
	<div class="row" style="width: 100%;">
		<div class="col-md-12 row__item" style="width: 85%; margin-top: -100px;">
			<div class="col-sm-12__img row__item-img">
				<img class="row__item-img-image" src="{{ url($user->place->image_link) }}" alt="">
			</div>
			<ul type="none" class="col-sm-12__list">
				<li class="list__item-head" style="font-weight: 500; color:#ECDB3F">{{$user->place->name}}</li>
				<li>Адреса :  {{$user->place->address}}</li>
				<li>Адміністратор: {{$user->place->administrator}}</li>
				<li>Viber: {{$user->place->viber}}</li>
				<li>Telegram: {{$user->place->telegram}}</li>
				<li>WhatsApp: {{$user->place->whatsup}}</li>
			</ul>
		</div>
		
	</div>

	
	@if ($user->products)
		<div class="container__title" style="margin-left: 30px; margin-top: -30px; font-size: 30px; margin-bottom: 10px;">Куплені продукти: </div>
	
	@endif

	<div class="products__blog" style="display: grid; grid-template-columns: repeat(4, 300px) ;" >
		@foreach ($user->products as $product)
			
			<div class="section2__item col-sm-4 col-xs-12 " style="margin-left:280px;  ">
				<div class="section2__item-image">
					<img class="item__image" src=" {{ url($product->image_link) }}" alt="">
				</div>
				<div class="section2__item-text" style="font-size: 15px">
					{{$product->name}}
				</div>
			</div>
		@endforeach
	</div>
	<br>
	<br>



@endsection