@extends('layout')

@section('content')

<div class="container">
	 	<h2>{{$receipe->name}} Page</h2>
		 <li>Ingredients- {{$receipe->ingredients}}</li>
		 <li>Category- {{$receipe->category}}</li>
	 
			 <a href="/receipe/{{$receipe->id}}/edit"><button type="submit" class="btn btn-success">Edit</button></a>
			 <br><br>

	<form action="\receipe\{{$receipe->id}}" method="post">
	    @csrf
	    @method("DELETE")
	    
	<button type="submit" class="btn btn-success">Delete</button>

	</form>
</div>

@endsection