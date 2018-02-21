<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Signin:PARS-Library </title>

    <meta name="description" content="A Library Management System">
    <meta name="author" content="Arkopal Ray">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  </style>
</head>

  <body>
	<?php require 'menu.php'?>
	<?php require 'header.php'?>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-4" style="padding-left:3%" >
			  <img src="images/login.png" alt="Login" height="250px" width="300px" class="img-rounded" style = "margin:2%"/>

		</div>
		<div class="col-md-8">
			
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Email address
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Password
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1">
				</div>
				
				<button type="submit" class="btn btn-default">
					Submit
				</button>
			</form>
			<a href="register.php"> Not Yet Registered? Click Here </a>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>