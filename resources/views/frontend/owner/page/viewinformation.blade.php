@extends('frontend.owner.layouts.omaster')
@section('contain')
    <title>Comany Information  View</title>
    <br>
   <div class="container p-3 my-3 border">
    <div class="panel  panel-primary">
      <div class="panel-heading ">
        <h1 class="text-light bg-success font-weigt-bold"> Company Parsonal Information</h1>
      </div>
    
      <div class="panel-body">
     @if(Session::has('Success'))
      <div class=" alert alert-success">
        {{Session::get('Success')}}
      </div>
      @endif      
        
       </div>
      </div>                                                                                          
        <div class="col-md-9">
    </div>
    @foreach ($ownerinformations as $ownerinformation)
    <h4>Name of company: {{$ownerinformation->name}}</h4>
    <h4>Bussiness description: {{$ownerinformation->description}}</h4><p></p>
    <h4>Country: {{$ownerinformation->countrys->name}}</h4>
    <h4>Social Media</h4>
    <h4>Email: {{$ownerinformation->email}}</h4>
    <h4>Web Address: {{$ownerinformation->web_address}}</h4>
    <h4>Facebook: {{$ownerinformation->facebook}}</h4>
   </div> 
   <a class="btn btn-info" href="{{route('admin.nformation.delete',$ownerinformation->id)}}">Delete</a>  
      
       @endforeach
        <a class="btn btn-info" href="{{route('admin.nformation')}}">update</a> 
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