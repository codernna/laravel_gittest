	@extends('layout')

	<div class="container">
		<h2>Home Page &raquo;</h2>
		<a href="/receipe/create">
			<button class="btn btn-success">+ NewReceipe</button>
		</a>
		
		<br><br>

	@section('content')
	 @foreach ($data as $value)
	 <a href="/receipe/{{$value->id}}"><li>Name- {{$value->name}}</li></a>
	 <li>Ingredients- {{$value->ingredients}}</li>
	 <li>Category- {{$value->category}}</li>

	 <hr>

	 @endforeach
	 </div>
	@endsection