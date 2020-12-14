<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title> Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <link rel="stylesheet" type="text/css" href="{{asset('css/reg.css')}}">
</head>
<body>
<div class="signup-form">
    <form method="POST" action="{{route('ownerRegistration')}}">
        @csrf
        <h2 style="text-align: center">Owner Registration </h2>
        <h2>Sign Up</h2>
        @if(Session::has('message'))
            <div class=" alert alert-{{Session::get('type')}}">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="form-group">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder=" Company Name">

            @error('name')
            <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
           </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"placeholder="Email Address">
            @error('email')
            <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
           </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="Password">

            @error('password')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
             </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

        </div>
        <div class="form-group">
            <!-- <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>-->
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
</div>
<div class="card-footer">
    <div class="d-flex justify-content-center links">
        Don't have an account?<a href="{{asset('ownerlogin')}}">Sign Up</a>
    </div>
</div>
</body>
</html>
