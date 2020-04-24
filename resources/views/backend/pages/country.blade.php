@extends('backend.layouts.amaster')
@section('contain')
<div class="container p-3 my-3 border">
    <div class="panel panel-primary">
        <h1 class="text-light bg-dark  font-weigt-bold">Create Country</h1>
      </div>

  <div class="panel-body">
     @if(Session::has('Success'))
      <div class=" alert alert-success">
        {{Session::get('Success')}}
      </div>
      @endif
     <form action="{{route('store.add')}}" method="post">
       @csrf
        <div class="form-group">
         <label for="exampleInputEmail1">Name</label>
         <input type="text" class="form-control" name="name"  id=" name" placeholder="Name">
        </div>
        <button type="submit"  class="btn btn-info" name="Save"value="Save">Submit</button>
         <a class="btn btn-info pull-right" href="{{route('country')}}">Back All information</a>
      </form>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
@endsection