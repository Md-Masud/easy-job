@extends('backend.layouts.amaster')
@section('contain')
    <title>Country View</title>
    <br>
   <div class="container p-3 my-3 border">
    <div class="panel  panel-primary">
      <div class="panel-heading ">
        <h1 class="text-light bg-success font-weigt-bold"> Category List</h1>
      </div>
     
    <div class="panel-body">
     @if(Session::has('Success'))
      <div class=" alert alert-success">
        {{Session::get('Success')}}
      </div>
      @endif                                                                                          
            <table class="table">
              <thead>
                <th>Category Name</th>
                </thead>
               <tbody>
               </tbody>
                @foreach ($ccategorys as $category)
                <td>{{$categorys->name}}</td>
               
                 @endforeach
                 
                 
                  </td>
                  </td>
                </tr >
                </tbody>
              
       </div>
      </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>
@endsection