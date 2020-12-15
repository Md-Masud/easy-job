<head>
    <title>Owner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>
    <link href="{{asset('css/user.css')}}" rel="stylesheet" type="text/css" media="all"/>
</head>
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
                        <th>Resume View</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td><iframe src="{{asset('uploads/images/'.$Resume->photo)}}" height="900" width="1000"></iframe></td>
                        </tr >
                        </tbody>
                    </table>
                    <table>
                    <tr>
                        <td>
                            <a class="btn btn-success  " style="margin-left: 300px;" href="{{route('admin.company')}}" >BackPage</a>
                        </td>
                      <td>

                          <form action="{{route('select.resume')}}" method="post" >
                              @csrf
                                  <input type="hidden" value="{{$Resume->id}}" name="resume_id">
                                  <button type="submit" class="btn btn-primary">SelectResume</button>
                          </form>
                      </td>

                    </tr>
                    </table>
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

