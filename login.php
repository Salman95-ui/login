<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	
		body {
			background-image: url('jpg45.jpg');
			background-position: center;
			background-size: cover;
			
			background-repeat: no-repeat;
		}
		.form-border{
			width: 100%;
			height: 1px;
			background-color: white;
		}
		h2{
			color: white;
			font-family: sans-serif;
			text-align: center;
			margin-bottom: 30px;
		}
		input{
			background:transparent;
			border: none;
			padding: 10px 20px; 
			color: white;
		}
		input:focus{
			outline: none;
		}
		.login{
			width: 500px;
			height: auto;
			margin: 250px auto ;
			
		}


		@media screen and (max-width: 600px) {
  .login {
  width: 400px;
  background-position: none ;
  }
}

.w{
	color: white;
	text-decoration: none;
}
.w:hover {
text-decoration: none;
}

.login .social {
	text-align: center;
}
.login .social span{
	margin-right: 20px;
}

	</style>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body >
	
	
<div class="login">
 <h2 class="mb-3">Login</h2>
 	<span><i class="fas fa-user pt-1" style="font-size:24px;text-align: center;color: white"></i></span>
 	<input type="text" size="35" placeholder="Username" name="">
 	<div class="form-border mb-3"></div>
 	
 	<span><i class="fas fa-lock pt-1" style="font-size:24px;text-align: center;color: white">
 	</i></span>
 	<input type="password" size="35" placeholder="Username" name="">
 	<div class="form-border"></div><br>
 	<input type="checkbox" name=""><span><a class="w" href="#">  Remember Me?</a></span>
    <span style="float: right;"><a class="w" href="#">Forgot Password</a></span><br>
    <input style="width: 100%" class="btn btn-primary mt-3" type="submit" value="Submit" name="">
     <div class="social mt-3">
     	<span><a href="#"><i class='fab fa-facebook-f' style='font-size:24px;color: white;'></i></a></span>
     	<span><a href="#"><i class='fab fa-instagram' style='font-size:24px;color: white;'></i></a></span>
     	<span><a href="#"><i class='fab fa-twitter' style='font-size:24px;color: white;'></i></a></span>
     </div>
</div>

</body>
</html>