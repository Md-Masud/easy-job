@extends('frontend.owner.layouts.omaster')
@section('contain')
    <title>Resume View</title>
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
                        <th>User name</th>
                        <th>Resume</th>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach ($Resume as $Resumes)
                                <td>{{$Resumes->User->name}}</td>
                                <img   src=" {{asset('uploads/images'.$Resumes->photo)}}"alt=""


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
