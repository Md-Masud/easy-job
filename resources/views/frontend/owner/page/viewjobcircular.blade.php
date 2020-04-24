
@extends('frontend.owner.layouts.omaster')
@section('contain')
 <title>Job Circular View</title>
    <br>
   <div class="container p-3 my-3 border">
    <div class="panel  panel-primary">
      <div class="panel-heading ">
        <h1 class="text-light bg-success font-weigt-bold">Job Circular</h1>
      </div>
     
    <div class="panel-body">
     @if(Session::has('Success'))
      <div class=" alert alert-success">
        {{Session::get('Success')}}
      </div>
      @endif                                                                                       
        <div class="col-md-9">
          <a class="btn btn-info" href="{{route('create.job.circular')}}">Job Circular Create</a> 
         
           <table class="table">
              <thead>
                <th>Company Name</th>
                 <th>Job Category</th>
                <th>No. of Vacancies</th>
                <th>Educational Requirements</th>
                <th>Job Requirements</th>
                <th>Location</th>
                <th>Salary</th>
                </thead>
               <tbody>
                <tr>
                  @foreach ($circulars as $circular) 
                  <td>{{$circular->name}}</td>
                  <td>{{$circular->categorys->name}}</td>
                  <td>{{$circular->vacancies}}</td>
                  <td>{{$circular->education}}</td>
                  <td>{{$circular->additional}}</td>
                  <td>{{$circular->location}}</td>
                  <td>{{$circular->salary}}</td>
                 <td>
                  <a class="btn btn-warning "onclick="return confirm('Are you sure?') "href="{{route('jobcircular.delete',$circular->id)}}" "=>Delete</a>
                 </td>
                 <td>
                    <a class="btn btn-info" href=""">Update</a>
                  </td>
                </tr >
                </tbody>
               @endforeach
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
