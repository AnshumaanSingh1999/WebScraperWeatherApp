<?php include_once("script.php") ?>
<html>
    <head>
        <title>WeatherAppWebScrapper</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">  
        <style>
            
            
             body {
        background-image: url(pexels-brett-sayles-1431822.jpg);
    background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
        background-color: beige;
                 background-blend-mode:darken
            }
            
            .container{
                text-align: center;
                margin-top: 200px;
                width: 450px;
            }
            .margin{
                margin-top: 20px;
            }
            .centre{
                text-align: center;
            }
        
        
        
        </style>
    </head>
    <body>
        <div class="container">
            <h1>WeatherApp</h1>
        <form class="margin">
  <fieldset class="form-group">
    <label for="city">Enter the City Name</label>
    <input type="text" class="form-control centre" id="city" placeholder="Eg : Lucknow, Delhi, Vellore" name="city"  value = "<?php if (array_key_exists('city', $_GET)) {
    echo $_GET['city']; 
 }
 ?>">
      
  </fieldset>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        
        <?php 
              
              if ($weather) {
                  
                  echo '<div class="alert alert-success" role="alert">
  '.$weather.'
</div>';
                  
              } else if ($error) {
                  
                  echo '<div class="alert alert-danger" role="alert">
  '.$error.'
</div>';
                  
              }
              
              ?>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>  
    </body>
</html>
