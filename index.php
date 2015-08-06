<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather Checker</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  	<div class="container">
  	  <div class="panel panel-default">
        <div class="panel-body">

    	<div class="jumbotron">
          <p>Get a weather report for your city:
        </div>

          <form action="index.php" method="post" class="form-horizontal">
          <div class="btn-group">
            <select name="city">
   	          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Choose a city: <span class="caret"></span>
              </button>
               <ul class="dropdown-menu">
               <li><option value=""> -- Please select -- </option></li>
               <li><option value="Baltimore">Baltimore, MD</option></li>
               <li><option value="Seattle">Seattle, WA</option></li>
               <li><option value="LosAngeles">Los Angeles, CA</option></li>
               <li><option value="Nome">Nome, AK</option></li>
               <li><option value="Paris">Paris, France</option></li>
               </ul>
             </select>
          </div>
          <div class="container">
          <p><input type="submit" value="Check Weather!" class="btn btn-primary btn-lg" role="button"></p>
          </div>
          </form>

      Your weather report:<br />
      
      <?php
      include 'brain.php';
      ?>

   	  </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


