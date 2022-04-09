@extends("base")

@section("title", "Login")

@section('style')
	<link href="{{ url('css/registration.css') }}" rel="stylesheet" type="text/css" >
@endsection


@section('content')

	<div class="section2" style="margin-bottom: 330px">
		<div class=" section2__title" style="margin-bottom: 50px; margin-top: 50px;">
			Логін
		</div>
		<div class="containers">
			<div class="content">
				<form class="content__form" action="{{url('login_user')}}">
					@csrf

					<div class="content__top1">
						<div class="content__item">
							<input type="text" name="name" id="" placeholder="Ім'я">
						</div>
						<div class="content__item">
							<input type="text" name="surname" id="" placeholder="Прізвище">
						</div>
					</div>
					<div class="content__top2">
						<div class="content__item">
							<input type="text" name="email" id="" placeholder="Адреса електронної пошти">
						</div>
						<div class="content__item">
							<input type="password" name="password" id="" placeholder="Пароль"> 
						</div>
					</div>

					<div class="form__button" style="margin-top: 50px;">
						<button>До тренувань</button>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />

				</form>
			</div>
		</div>
	</div>

@endsection