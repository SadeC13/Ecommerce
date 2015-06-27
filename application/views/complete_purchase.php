<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
		<div class="row">
			<form class="col-md-6">
				<h2>Shipping Information</h2>
				<div class="form-group">
				    <label for="first_name">First Name</label>
				    <input type="text" class="form-control" id="first_name">
				</div>
				<div class="form-group">
				    <label for="last_name">Last Name</label>
				    <input type="text" class="form-control" id="last_name">
				</div>
				<div class="form-group">
				    <label for="address">Address</label>
				    <input type="text" class="form-control" id="address">
				</div>
				<div class="form-group">
				    <label for="address2">Address 2</label>
				    <input type="text" class="form-control" id="address2">
				</div>
				<div class="form-group">
				    <label for="city">City</label>
				    <input type="text" class="form-control" id="city">
				</div>
				<div class="form-group">
				    <label for="state">State</label>
				    <input type="text" class="form-control" id="state">
				</div>
				<div class="form-group">
				    <label for="zip">Zipcode</label>
				    <input type="text" class="form-control" id="zipcode">
				</div>
				<button id="cont_shop" type="submit" class="btn btn-default">Submit</button>
			</form>	
			<form action= '/card/buy' method='post' class="col-md-6">
				<h2>Billing Information</h2>
				 <div class="checkbox">
					<label>
			    		<input type="checkbox"> Same as Shipping
			    	</label>
				</div>
				<div class="form-group">
				    <label for="first_name">First Name</label>
				    <input type="text" class="form-control" id="first_name">
				</div>
				<div class="form-group">
				    <label for="last_name">Last Name</label>
				    <input type="text" class="form-control" id="last_name">
				</div>
				<div class="form-group">
				    <label for="address">Address</label>
				    <input type="text" class="form-control" id="address">
				</div>
				<div class="form-group">
				    <label for="address2">Address 2</label>
				    <input type="text" class="form-control" id="address2">
				</div>
				<div class="form-group">
				    <label for="city">City</label>
				    <input type="text" class="form-control" id="city">
				</div>
				<div class="form-group">
				    <label for="state">State</label>
				    <input type="text" class="form-control" id="state">
				</div>
				<div class="form-group">
				    <label for="zip">Zipcode</label>
				    <input type="text" class="form-control" id="zipcode">
				</div>
				
				<div class="form-group">
				    <label for="card_num">Card</label>
				    <input type="text" class="form-control" id="card_num">
				</div>
				<div class="form-group">
				    <label for="security">Security Code</label>
				    <input type="text" class="form-control" id="security">
				</div>
				<div class="form-group">
				    <label for="exp">Expiration</label>
				    <input type="text" id="mm" class="form-control"> / <input type="text" id="dd" class="form-control">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>	
		</div>
		<form action='/admin/index' method='post'>
			<button class="btn btn-default" type='submit' >Home</button>
			</form>
	</div>
</body>
</html>