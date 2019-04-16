<!DOCTYPE>
<html>
    <head>
        <title>Movies</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    </head>
    
    <body>
        <h1>Movies</h1>
        <a href="{{url('/main')}}">Back to Homepage</a>
        
        <div id="app"> <!-- start of Vue app -->
            <app></app>
            
            <!-- TODO finish enabling Laravel/Vue integration. iFrame is a placeholder until then -->
            <iframe width="600" height="800" style="border:none;" src="http://movies.heylinprojects.com/themovies"></iframe> 

        </div> <!-- end of Vue app -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <!--<script type="text/javascript" src="js/get_data.js"></script>-->
    </body>
    
</html>
<?php

