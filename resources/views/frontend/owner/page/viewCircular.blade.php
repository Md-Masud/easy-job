
  
</html>
@extends('frontend.layouts.master')
@section('contain')

 <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<div class="menu">
  <ul id="dc_mega-menu-orange" class="dc_mm-orange">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="{{route('admin.users')}}">User</a> </li>
    <li><a href="{{route('admin.company')}}">Owner</a></li>
    <li><a href="cart.html">Feature</a></li>
    <li><a href="contact.html">Contact</a> </li>
    <div class="right">
       @guest
     <li><a href="{{route('admin.log')}}">Login</a> </li>
    <li><a href="{{route('admin.accoun')}}">Registation</a> </li>
      @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </div>
    <div class="clear"></div>
  </ul>
  </div>
 </div>
  <div class="content_circular">
    <div class="c_heading">
      <h1>JOB Catagery</h1>
    </div>
  <ul>
  @foreach ($categorys as $category)
   <li><a href="">{{$category->name}}</a></li> 
     @endforeach  
 </ul>
 </div>
    <div class="content">
      <div class="content_top">
        <div class="heading">
        <h3>JOB CIRCULAR Information</h3>
        </div>
        <div class="clear"></div>
      </div>
      <div class="section group">  
        <div class="grid_1_of_4 images_1_of_4">
          
           <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">
  <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
  <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>
  <link href="{{asset('css/user.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <br>
   <div class="container p-3 my-3 border bg-warning">
    <div class="panel  panel-primary">
      <div class="panel-heading ">
        <h1 class="text-light bg-success font-weigt-bold">Job Circular Information</h1>
      
       </div>
      </div>                                                                                          
        <div class="col-md-9">
    </div>
   
    <h4>{{$circulars->name}} </h4>
     <h4>{{$circulars->categorys->name}} </h4>
    <h4>No. of Vacancies</h4>
    <h4>{{$circulars->vacancies}}</h4>
    <h4>Job description:</h4>
    <h6>{{$circulars->description}}</h6>
    <h4>Educational Requirements:</h4>
    <h6>{{$circulars->education}}</h6>
    <h4>Experience Requirements:</h4>
    <h6>{{$circulars->experience}}</h6>
    <h4>Additional Job Requirements:</h4>
    <h6>{{$circulars->additional}}</h6>
    <h4>Location:</h4>
    <h6>{{$circulars->location}}</h6>
    <h4>Salary:</h4>
    <h6>{{$circulars->salary}}</h6>
  <a class="btn btn-info" href="">Apply Online</a> 
      </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
               
        </div>
      
        </div>
       
      </div>
    </div>
 </div>
</div>
@endsection