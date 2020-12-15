@extends('frontend.owner.layouts.omaster')
@section('contain')
    <title>Resume View</title>
    <br>
    <div class="container p-3 my-3 border">
        <div class="panel  panel-primary">
            <div class="panel-heading ">
                <h1 class="text-light bg-success font-weigt-bold">Resume View</h1>
            </div>

            <div class="panel-body">
                @if(Session::has('Success'))
                    <div class=" alert alert-success">
                        {{Session::get('Success')}}
                    </div>
                @endif
                <div class="col-md-9">
                    <table class="table">
                        <thead>
                        <th>User name</th>
                        <th>Email</th>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach ($selectResume as $selectResumes)
                                <td>{{$selectResumes->Resume->User->name}}</td>
                                <td>{{$selectResumes->Resume->User->email}}</td>
                                <td>
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
