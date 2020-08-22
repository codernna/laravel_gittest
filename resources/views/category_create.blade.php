  @extends('layouts.app')

  @section('content')

  <div class="container">

  <h2>Add New Category</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="\category" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" >
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" name="description" class="form-control" id="description" value="{{old('description')}}" >
        </div>


      

        <button type="submit" class="btn btn-primary">Add New Category</button>

    </form>

        </div>
     
  @endsection