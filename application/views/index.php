<!DOCTYPE html>
<html>
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
			/*display: inline-block;*/
		}
		#reg{
  			border-color: white;
  			padding:2%;
  			
		}
		#log{
  			border-color: white;
  			padding:2%;
		}
		p{
			font-size: 30px;
			color: #E8E8E8;
			display: inline-block;
			position: relative;
			top: 282px;
			right: 38%;
		}
		#home{
			border:none;
			margin:auto;
			width:6%;
		}
		.error{
			text-align: center;
			margin-left:9em;
			color:black;
			font-weight: bold;
			font-size: 1.2em;
			margin-bottom:7em;
		}
		.registered{
			text-align: center;
			margin-left:14em;
			color:lime;
			font-weight: bold;
			font-size: 1.8em;
			margin-bottom:-7em;
			padding:0.5em;
		}
		
	</style>
</head>
<body>
<?php
session_start();
	if($this->session->userdata['logged_in']){
		$error="You are already logged in, log out to continue";
		$this->session->set_flashdata('logged_in', $error);
		header('Location: index');
	} ?>
<?php if($this->session->flashdata('add_errors')) { ?> 
<div class='error'> 
<?= $this->session->flashdata('add_errors');?> </div> 
<?php } ?>
<?php if ($this->session->flashdata('reg_errors')) { ?> 
<p class='error'> <?= $this->session->flashdata('reg_errors');?> </p>
<?php } ?>
<h2 class= 'registered'><?=$this->session->flashdata('registered')?></h2>
<div class="container">
		<a href="/"><img src="/assets/images/logo4.png"></a>
		<div class='row'>
			<div class="col-md-6">
				<form action='/loginregs/login_user' id="log" method='post'>
					<h2>Login</h2>
					<div class='form-group'>
						<label for='email'>Email address</label>
						<input type='email' class='form-control' name='email' placeholder='Enter email'>
					</div>
					<div class='form-group'>
						<label for='password'>Password</label>
						<input type='password' class='form-control' name='password' placeholder='password'>
					</div>
					<button type='submit' class='btn btn-default'>Submit</button>
				</form>
			</div>
			<div class="col-md-6">
				<form action='/loginregs/register' id="reg" method='post'>
					<h2>Register</h2>
					<div class='form-group'>
						<input type='hidden' name='id'>
					</div>
					<div class='form-group'>
						<label for='first_name'>First Name</label>
						<input type='text' class='form-control' name='first_name' placeholder='First Name'>
					</div>
					<div class='form-group'>
						<label for='last_name'>Last Name</label>
						<input type='text' class='form-control' name='last_name' placeholder='Last Name'>
					</div>
					<div class='form-group'>
						<label for='email'>Email address</label>
						<input type='email' class='form-control' name='email' placeholder='Enter email'>
					</div>
					<div class='form-group'>
						<label for='password'>Password</label>
						<input type='password' class='form-control' name='password' placeholder='password'>
					</div>
					<div class='form-group'>
						<label for='password'>Confirm Password</label>
						<input type='password' class='form-control' name='confirm' placeholder='confirm password'>
					</div>
					<button type='submit' class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
</div>
</div>
</body>
</html>
