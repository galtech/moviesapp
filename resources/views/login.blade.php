<!DOCTYPE>
<html>
    <head>
        <title>Movies</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <style>
      #login-container{
          width: 600px;
          margin: 0px auto;
          padding-top: 40px;
      }
  </style>
    </head>
    <body>
        <div id="login-container">
            @if(isset(Auth::user()->email))
                <script>window.location="/main/successlogin";</script>
            @endif
            
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong> {{$message}} </strong>
            </div>
            @endif
            
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <form method="post" action="{{ url('/main/checklogin')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password: </label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="login" value="Login" class="btn btn-primary">
                </div>
            </form>
        </div>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
    
    
</html>


<?php


