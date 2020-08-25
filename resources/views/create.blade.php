  @extends('layouts.app')

  @section('content')

  <div class="container">

  <h2>Add New Receipe</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="\receipe" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Receipe Name</label>
          <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" >
        </div>

        <div class="form-group">
          <label for="ingredients">Ingredients</label>
          <input type="text" name="ingredients" class="form-control" id="ingredients" value="{{old('ingredients')}}" >
        </div>

        <!-- <div class="form-group">
        	<label for="category">Category</label>
          <input type="text" name="category" class="form-control" id="category" value="{{old('category')}}" >
        </div> -->

        <div class="form-group">
          <label>Category</label>
          <select name="category" class="form-control">
            @foreach ($category as $value)
            <option value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Receipe Image</label>
         <input type="file" name="rimage">

        </div>

        <button type="submit" class="btn btn-primary">Add New Receipe</button>

    </form>

        </div>
     
  @endsection