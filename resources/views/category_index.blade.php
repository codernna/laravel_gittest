@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
           <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        		<div class="container">
					<h2>Category Page &raquo;</h2>

					@if(session("message"))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
  						{{session("message")}}
 					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
					</div>

					@endif
				
						<a href="/category/create"><button class="btn btn-success">+ Add Category</button></a>
						<br><br>
		
						@foreach ($categories as $value)
					 	<a href="/category/{{$value->id}}"><li>Name- {{$value->name}}</li></a>
					 	<hr>

					 	@endforeach
				</div>
				
				{{$categories->links()}}
				
				</div>
		
		</div>
	</div>
</div>

@endsection




