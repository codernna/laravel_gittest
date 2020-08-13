@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        		<div class="container">
					<h2>Home Page &raquo;</h2>

					@if(session("message"))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
  						{{session("message")}}
 					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
					</div>
					@endif
				
						<a href="/receipe/create"><button class="btn btn-success">+ NewReceipe</button></a>
						<br><br>
		
						@foreach ($data as $value)
					 	<a href="/receipe/{{$value->id}}"><li>Name- {{$value->name}}</li></a>
					 	<hr>

					 	@endforeach
				</div>
				
				</div>
			</div>
		</div>
	</div>
</div>

@endsection




