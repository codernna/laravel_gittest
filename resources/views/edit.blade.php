  @extends('layouts.app')

  @section('content')

  <div class="container">

  <h2>Edit Receipe >>{{$receipe->name}}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="\receipe\{{$receipe->id}}" method="post">
        @csrf
        @method("PATCH")
        <div class="form-group">
          <label for="name">Receipe Name</label>
          <input type="text" name="name" value="{{$receipe->name}}" class="form-control" id="name" >
        </div>

        <div class="form-group">
          <label for="ingredients">Ingredients</label>
          <input type="text" name="ingredients" value="{{$receipe->ingredients}}" class="form-control" id="ingredients">
        </div>

         <div class="form-group">
          <label>Category</label>
          <select name="category" class="form-control">
            @foreach($category as $value)
            <option value="{{$value->id}}"
               {{ $receipe->categories->id == $value->id ? "selected" : ""}}
              >{{$value->name}}</option>
              }
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Receipe</button>

    </form>

        </div>
     
  @endsection