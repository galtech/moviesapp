<!DOCTYPE>
<html>
    <head>
        <title>Movies</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    </head>
    
    <body>
       @if (isset(Auth::user()->email))
       <div class="alert alert-danger success-block">
           <strong>Welcome {{Auth::user()->email}}</strong>
           <br/>
           <a href="{{url('/main/logout')}}">Logout</a>
       </div>
       @else
       <script>window.location="/main";</script>
       @endif
        
       <a href="{{ url('/movies')}}">Movie List</a>
       
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
    
    
</html>
        

<?php


