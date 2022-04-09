<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	@yield("style")
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="icon" href=" {{ url('img/logo.png') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

	<?php
		try {
			$footer = $footer_needed;
		} catch (Exception $e) {
			$footer = 1;
		}

		session_start();
		if (isset($_SESSION["user"])){
            $is_authenticated = 1;
			$username = $_SESSION["user"]->id;
        }else{
            $is_authenticated = 0;
        }

	?>

	<div class="containers">
		<header class="header__container">
			<div class="header">
				<div class="header__logo">
					<img src=" {{ url('img/logo.png') }}" alt="">
					<span>MGym</span>
				</div>
				<nav>
					<div class="topnav" id="myTopnav">
						<a class="topnav__item" href="{{url('/')}}">HOME</a>
						<a class="topnav__item" href="{{url('trainers/')}}">TRAINERS</a>
						<a class="topnav__item" href="{{url('services/')}}">SERVICES</a>
						<a class="topnav__item" href="{{url('pricing/')}}">PRICING</a>

						@if ($is_authenticated)
								<a href="{{url('logout/')}}">Logout</a>
								<a href="{{url('profile/' . $username)}}">Profile</a>

						@else
								<a class="topnav__item"  href="{{url('login/')}}">LOGIN</a> 
								<a class="topnav__item create-account" href="{{url('registration/')}}">CREATE ACCOUNT</a>

						@endif

						<a href="#" id="menu" class="icon">&#9776</a>
					</div>
				</nav>
			</div>
			@yield('header-part')
		</header>

		@yield('content')

		@if($footer)
			<div class="section4">

				<div class="containers">
					<div class="row">
						<div class="section4__item col-md-6 col-lg-3 col-sm-12">
							<div class="section4__title">
								<a style="color: #ECDB3F" href="{{ url('places/1') }}">Sport Hub</a>
							</div>
							<div class="section4__address">
								м. Київ<br />вул. А.Янгеля 5
							</div>
							<div class="section4__phone">
								+380684874561
							</div>
							<div class="section4__icons">
								<img class="section4__icons-ico" src="img/lending/telegram.png" alt="">
								<img class="section4__icons-ico" src="img/lending/whatsapp.png" alt="">
								<img class="section4__icons-ico" src="img/lending/viber.png" alt="">
							</div>
						</div>
						<div class="section4__item col-md-6 col-lg-3 col-sm-12">
							<div class="section4__title">
								
								<a style="color: #ECDB3F" href="{{ url('places/2') }}">White House</a>
							</div>
							<div class="section4__address">
								м. Київ<br />вул. С.Петлюри 5
							</div>
							<div class="section4__phone">
								+380684872222
							</div>
							<div class="section4__icons">
								<img class="section4__icons-ico" src="img/lending/telegram.png" alt="">
								<img class="section4__icons-ico" src="img/lending/whatsapp.png" alt="">
								<img class="section4__icons-ico" src="img/lending/viber.png" alt="">
							</div>
						</div>
						<div class="section4__item col-md-6 col-lg-3 col-sm-12">
							<div class="section4__title">
								
								<a style="color: #ECDB3F" href="{{ url('places/3') }}">Bon Luage</a>
							</div>
							<div class="section4__address">
								м. Київ<br />вул. Л.Яроса 21
							</div>
							<div class="section4__phone">
								+380684123456
							</div>
							<div class="section4__icons">
								<img class="section4__icons-ico" src="img/lending/telegram.png" alt="">
								<img class="section4__icons-ico" src="img/lending/whatsapp.png" alt="">
								<img class="section4__icons-ico" src="img/lending/viber.png" alt="">
							</div>
						</div>
						<div class="section4__item col-md-6 col-lg-3 col-sm-12">
							<div class="section4__title">
								<a style="color: #ECDB3F" href="{{ url('places/4') }}">Silver Life</a>
							</div>
							<div class="section4__address">
								м. Київ<br />вул. Академічна 11
							</div>
							<div class="section4__phone">
								+380684123212
							</div>
							<div class="section4__icons">
								<img class="section4__icons-ico" src="img/lending/telegram.png" alt="">
								<img class="section4__icons-ico" src="img/lending/whatsapp.png" alt="">
								<img class="section4__icons-ico" src="img/lending/viber.png" alt="">
							</div>
						</div>
					</div>
					<div class="section4__item-schedule ">
						<div class="section4__title">
							Режим роботи
						</div>
						<div class="section4__text">
							Пн-Пт: 7:00-22:00 <br />
							Сб: <span>9:00-22:00</span><br />
							Нд: <span>9:00-21:00</span><br />
						</div>
					</div>
				</div>

			</div>
		@endif
	</div>
</body>

<script src="{{ url('js/script.js') }}"></script>

</html>