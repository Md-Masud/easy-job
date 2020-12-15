
@extends('frontend.layouts.master')
@section('contain')
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <div class="header-section">
        <div class="container position-relative">
            <div class="row">
                <div class="col-xl-5 col-md-12 my-xl-5 mb-0 my-sm-3  position-static ">
                    <div class="main-menu d-none d-md-block">
                        <nav>
                            <ul>
                                <li><a href="{{url('/')}}">Home </a></li>
                                @auth('web')
                                    <li><a href="{{route('admin.users')}}">User Profile</a> </li>
                                @elseauth('owner')
                                    <li><a href="{{route('admin.company')}}">Owner Profile</a></li>
                                @endauth

                            </ul>
                        </nav>
                    </div>

                </div>
                <div class="col-xl-2 col-md-4 col-sm-12 text-center mb-0  my-xl-5 ">
                    <div class="">
                        <h1 style="font-family:  sans-serif;font-size: 40px; text-shadow: 3px 3px 3px #ababab">Easy JOb</h1>
                    </div>
                </div>
                <div class="col-xl-5 col-md-8 col-sm-12 mb-0  my-xl-5 text-center text-md-right position-relative">
                    <div class="header-right">
                        <ul>  @guest('web')
                                <li><a href="{{route('admin.log')}}">Login</a> </li>
                                <li><a href="{{route('admin.accoun')}}">Registation</a> </li>
                            @endguest

                            @auth('web')
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
                            @elseauth('owner')

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <span class="caret"></span>
                                        {{ Auth('owner')->user()->name }} <span class="caret"></span>
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
                            @endauth
                            <li><a href="#"><i class="fas fa-search"></i></a>
                                <div class="search-box">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--job circular-section start-->
    <!--circular-section End-->

    <!--job circular-section start-->

    <section class="subscribe-section  " style="margin:30px; border: royalblue; border-radius: 3px;">
        <div class="container">

                <div   class="subscribe  py-3">

                    <div style="margin: 5px 10px;"class="rwo ">
                        <h3 style="  color:green;font-weight:bold;">{{$circulars->name}} </h3>
                        <h3 style="  color:green;font-weight:bold;">{{$circulars->Owner->name}}</h3>
                        <h4 style="font-weight: bold;">No. of Vacancies:</h4>
                        <h4 style="margin-left: 30px;">{{$circulars->vacancies}}</h4>
                        <h4 style="font-weight: bold;">Job description:</h4>
                        <ul style="  list-style-type: square;">
                            <li>{{$circulars->description}}</li>
                        </ul>

                        <h4 style="font-weight: bold;">Educational Requirements:</h4>
                        <ul style="  list-style-type: square;">
                            <li>{{$circulars->education}}</li>
                        </ul>

                        <h4 style="font-weight: bold;" >Experience Requirements:</h4>
                        <ul style="  list-style-type: square;">
                            <li>{{$circulars->experience}}</li>
                        </ul>
                        <h4 style="font-weight: bold;">Additional Job Requirements:</h4>
                        <ul style="  list-style-type: square;">
                            <li>{{$circulars->additional}}</li>
                        </ul>

                        <h4 style="font-weight: bold;">Location:</h4>
                        <ul style="  list-style-type: square;">
                            <li>{{$circulars->location}}</li>
                        </ul>
                        <h4 style="font-weight: bold;">Salary:</h4>
                        <ul style="  list-style-type: square;">
                            <li>{{$circulars->salary}}</li>
                        </ul>

                        <a style="margin-left: 500px;  text-align:center;font-weight: bold;"  class="btn btn-info" href="{{route('resume.create',$circulars->id)}}">Apply Online</a>

                    </div>

                </div>
        </div>

    </section>
@endsection
