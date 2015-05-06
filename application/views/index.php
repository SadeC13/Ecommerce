<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			background: url(/assets/images/BI4.jpg) no-repeat center center fixed;
			background-size: cover; 
		}
		img{
			position: relative;
  			left: 23%;
		}
		form{
			border: 1px solid white;
			border-radius: 5px;
			color: #E8E8E8;
			padding-bottom: 15px; 
			height: 515px;
		}
		#reg{
			position: relative;
  			top: 52px;
		}
		#log{
			position: relative;
  			left: 12%;
  			top: 52px;
  			padding-top: 91px;
		}
		p{
			font-size: 30px;
			color: #E8E8E8;
			display: inline-block;
			position: relative;
			top: 282px;
			right: 38%;
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="/assets/images/logo4.png">
		<div class="row">
			<form id="reg" class="col-md-5">
				<h2>Register</h2>
				<div class="form-group">
				    <label for="first_name">First Name</label>
				    <input type="text" class="form-control" id="first_name">
				</div>
				<div class="form-group">
				    <label for="last_name">Last Name</label>
				    <input type="text" class="form-control" id="last_name">
				</div>
				<div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" id="password">
				</div>
				<div class="form-group">
				    <label for="con_password">Confirm Password</label>
				    <input type="password" class="form-control" id="con_password">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>	
			<p>-or-</p>
			<form id="log" class="col-md-5">
				<h2>Login</h2>
				<div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" id="password">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>	
		</div>
	</div>
</body>
</html>