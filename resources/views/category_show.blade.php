@extends('layouts.app')

@section('content')

<div class="container">
	 	<h2>{{$category->name}} Page</h2>
		 <li>Description- {{$category->description}}</li>
		 
			 <a href="/category/{{$category->id}}/edit"><button type="submit" class="btn btn-success">Edit</button></a>
			 <br><br>

	<form action="\category\{{$category->id}}" method="post">
	    @csrf
	    @method("DELETE")
	    
	<button type="submit" class="btn btn-success">Delete</button>

	</form>
</div>

@endsection