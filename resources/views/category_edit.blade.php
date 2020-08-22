  @extends('layouts.app')

  @section('content')

  <div class="container">

  <h2>Edit Category</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="\category\{{$category->id}}" method="post">
      @method("PATCH")
        @csrf
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" name="name" class="form-control" id="name" value="{{$category->name}}" >
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" name="description" class="form-control" id="description" value="{{$category->description}}" >
        </div>

        

        <button type="submit" class="btn btn-primary">Add New Category</button>

    </form>

        </div>
     
  @endsection