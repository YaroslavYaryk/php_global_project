@extends("base")


@section("title", "MGym")
 

@section('style')
	<link href="{{ url('css/lending.css') }}" rel="stylesheet" type="text/css" >
@endsection


@section('header-part')
	<div class="header__middle">
		<div class="header__middle-title">Excercise<br />makes you<br />heathier</div>
		<div class="header__middle-button"><a style="text-decoration: none; color:#3D3C3C" href="{{url('registration/')}}">GET STARTED</a>		</div>
	</div>
@endsection
 

@section("content")
	<div class="section1">
		<div class="container">
			<div class="container__header">
				<div class="container__title">Build your<br /> body with us</div>
				<div class="container__subtitle">Get the best facilities from us to support your<br />
					health and focus</div>
			</div>

			<div class="container__body">
				<div class="row">
					<div class=" container__body-item col-lg-3 col-sm-6 col-xs-6">
						<div class="container__body-title">
							25
						</div>
						<div class="container__body-content">
							Year experience
						</div>
					</div>
					<div class="container__body-item col-lg-3 col-sm-6 col-xs-6">
						<div class="container__body-title">
							150
						</div>
						<div class="container__body-content">
							Excelent equipments
						</div>
					</div>
					<div class="container__body-item col-lg-3 col-sm-6 col-xs-6">
						<div class="container__body-title">
							250
						</div>
						<div class="container__body-content">
							Expert trainers
						</div>
					</div>
					<div class="container__body-item col-lg-3 col-sm-6 col-xs-6">
						<div class="container__body-title">
							9000+
						</div>
						<div class="container__body-content">
							Good Rewiews
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="section2">
		<div class="section2__title">
			Build with our<br />personal trainers
		</div>
		<div class="containers">
			<div class="row">
				@foreach ($trainers as $trainer)
					<div class="section2__item col-sm-4 col-xs-12 ">
						<div class="section2__item-image">
							<img class="item__image" src="{{ url($trainer->image_link) }}" alt="">
						</div>
						<div class="section2__item-text">
							{{$trainer->name}}
						</div>
					</div>
				@endforeach
			</div>

		</div>
	</div>

	<div class="section3">
		<div class="section2__title">
			Pricing plan
		</div>
		<div class="conteiner">
			<div class="row">
				<div class="section3__item col-md-4 ">
					<div class="section3__header">
						<div class="section3__header-title">BASIC</div>
						<div class="section3__header-item">20$</div>
					</div>
					<div class="section3__body">
						<ul type="none" class="section3__list">
							<li class="section3__link">unlimited gym access</li>
							<li class="section3__link">1 training program</li>
							<li class="section3__link">free fitness consultation</li>
						</ul>
					</div>
					<div class="section3__footer">
						<div class="section3__footer-text">
							JOIN NOW
						</div>
					</div>

				</div>
				<div class="section3__item col-md-4 ">
					<div class="section3__header">
						<div class="section3__header-title">PREMIUM</div>
						<div class="section3__header-item">35$</div>
					</div>
					<div class="section3__body">
						<ul type="none" class="section3__list">
							<li class="section3__link">unlimited gym access</li>
							<li class="section3__link">5 training programs</li>
							<li class="section3__link">free fitness consultation</li>
							<li class="section3__link">personal trainer</li>
						</ul>
					</div>
					<div class="section3__footer">
						<div class="section3__footer-text section3__footer-active">
							JOIN NOW
						</div>
					</div>

				</div>
				<div class="section3__item col-md-4 ">
					<div class="section3__header">
						<div class="section3__header-title">ELITE</div>
						<div class="section3__header-item">45$</div>
					</div>
					<div class="section3__body">
						<ul type="none" class="section3__list">
							<li class="section3__link">unlimited gym access</li>
							<li class="section3__link">1 training program</li>
							<li class="section3__link">free fitness consultation</li>
							<li class="section3__link">personal trainer</li>
							<li class="section3__link">50% off drinks</li>
						</ul>
					</div>
					<div class="section3__footer">
						<div class="section3__footer-text">
							JOIN NOW
						</div>
					</div>

				</div>

			</div>

		</div>
	</div>
@endsection
