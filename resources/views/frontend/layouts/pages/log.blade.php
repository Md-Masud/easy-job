<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
    <script src="{{('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>
</head>

<body>
<div "navbar-header">
<nav  class="navbar navbar-default">
</nav>
</div>
<div class="container margin:0 auto;">

    <div style="max-width:1000px">
        <div class="jumbotron">
            <div class="container">
                <h1 class="bg-primary text-white"> Login</h1>
                <p>Please choose an option</p>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 bg-success">
                            <h1>JOB SEEKERS</h1>
                            <P> Mangement resume and apply to right
                            </P>
                            <p>
                                jobs in easiest way
                            </p>
                            <a href="{{ route('login') }}"  class="btn btn-secondary" role="button">Login</a>
                        </div>
                        <div class="col-sm-6 bg-warning">
                            <h1>EMPLOYERS</h1>
                            <P>
                                Find the best candidate in the
                            </P>
                            <p>
                                fastest way
                            </p>
                            <a href="{{ route('ownerlogin') }}"  class="btn btn-secondary" role="button">Login</a>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
</html>
