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
   <li><a href="{{route('index.category',$category->id)}}">{{$category->name}}</a></li> 
     @endforeach            
 </ul>
 </div>
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>JOB CIRCULAR</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
    	@foreach ($circulars as $circular)
			<div class="section group">  
				<div class="grid_1_of_4 images_1_of_4">
					
					 <h2>{{$circular->categorys->name}}</h2>
					 <br>
					 <h2>{{$circular->name}}</h2><br>
					 <h2>{{$circular->education}}</h2>
					 <p><span class="price"></span></p>
				     <div class="button"><span><a href="{{route('view.job.circular',$circular->id)}}" class="details">Details</a></span>
				   <h2 class="text-left" >Job Post:{{$circular->created_at}}</h2>
				 <h2 class="text-right">Dead Line:{{$circular->created_at}}</h2>
				 </div>     
				</div>
				 @endforeach
				</div>
				{!!$circulars->links() !!}
			</div>
    </div>
 </div>
</div>
@endsection