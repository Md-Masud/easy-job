
  <head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">
  <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
  <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>
  <link href="{{asset('css/user.css')}}" rel="stylesheet" type="text/css" media="all"/>
</head>
<div class="container p-3 my-3 border">
    <div class="panel panel-primary">
        <h1 class="text-light bg-dark  font-weigt-bold">Add Post</h1>
      </div>
  <div class="panel-body">
     @if(Session::has('Success'))
      <div class=" alert alert-success">
        {{Session::get('Success')}}
        @endif
      </div>
      
     <form action="{{route('countrys.edit',$countrys->id)}}" method="post">
       @csrf
        <div class="form-group">
         <label for="exampleInputEmail1">Name</label>
         <input type="text" class="form-control" name="name"  id=" name" placeholder="Name"value="{{$countrys->name}}">
        </div>
        <button type="submit"  class="btn btn-info" name="Save"value="Save">Submit</button>
      </form>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

