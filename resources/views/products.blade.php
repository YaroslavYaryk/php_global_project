@extends("base")

@section("title", "Services")

@section('style')
	<link href="{{ url('css/services.css') }}" rel="stylesheet" type="text/css" >
@endsection


@section('content')

	<div class="section2">
		<div class=" section2__title">
			Сервіси
		</div>
		<div class="containers">
			<div class="content">
				<div class=" row" >
					@foreach ($products as $product)
						{{$product->image_url}}
					<div class="section2__item col-sm-4 col-xs-12 " style="margin-bottom: 40px">
						<div class="section2__item-image">
							<img class="item__image" src="{{ url($product->image_link)}}" alt="">
						</div>
						<div class="section2__item-text">
							{{$product->name}} - <a style="text-decoration: none" href="{{url('products/'.$product->id.'/order/')}}">{{$product->price}}<i class="fa fa-shopping-cart" style="font-size:24px"></i>
							</a>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
		
	</div>

@endsection