
@extends('layout')

@section('content')
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Receipe Blog</h1>
      <p class="lead text-muted">Read Our interesting receipe articles and enjoy yourself.</p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
           
            <div class="card-body">
              <h3>{{$receipe->name}}</h3>
               @if($receipe->image)
              <img src="{{'/images/'. $receipe->image}}" width="300" height="200" alt="image">
              @endif
              <p class="card-text">{{$receipe->ingredients}}</p>
              <span>{{$receipe->categories->name}}</span>
               <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a href="/"><button type="button" class="btn btn-sm btn-outline-secondary">Back</button>
                </div>
                </div>
             
              </div>
            </div>
          </div>
        </div>
       

        
</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    
</footer>


