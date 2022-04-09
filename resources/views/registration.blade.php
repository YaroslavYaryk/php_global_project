@extends("base")

@section("title", "Registration")

@section('style')
	<link href="{{ url('css/registration.css') }}" rel="stylesheet" type="text/css" >
@endsection



@section('content')

	<div class="section2">
		<div class=" section2__title">
			Реєстрація
		</div>
		<div class="containers">
			<div class="content">
				<form class="content__form" action="{{url('register_user')}}"  >
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
					<div class="content__middle">
						<div class="content__item content__item-middle">
							<input type="text" name="health_group" id="" placeholder="Група здоров'я">
						</div>
					</div>
					<div class="content__middle">
						<div class="content__item content__item-middle">
							<select name="training_gym"> <!--Supplement an id here instead of using 'name'-->
								<option selected disabled>Зал тренування</option>
								@foreach ($places as $place)
								<option value="{{$place->id}}">{{$place->name}} - {{$place->address}}</option>
								@endforeach
							  </select>
						</div>
					</div>
					<div class="form__button">
						<button>До тренувань</button>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />

				</form>
			</div>
		</div>
	</div>

@endsection