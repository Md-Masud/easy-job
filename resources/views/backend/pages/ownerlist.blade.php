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
                <div class="col-md-9">
                    <a class="btn btn-info" href="{{route('category.create')}}">Create Category</a>

                    <table class="table">
                        <thead>
                        <th>Owner list</th>
                        </thead>
                        <tbody>
                        </tbody>
                        @foreach ($owners as $owner)
                            <td>{{$owner->name}}</td>
                            <td>{{$owner->email}}</td>
                            <td>
                                <a class="btn btn-warning "onclick="return confirm('Are you sure?') "href="" "=>Delete</a>
                                <a class="btn btn-info" href="">Update</a>
                            </td>
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
