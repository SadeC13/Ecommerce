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
<style>
img{
	height:150px;
	width:150px;
}
#continue input{
	background-color:green;
}
</style>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
		    <h3>Website Name</h3>
		    <p><a href="">Shopping Cart <i class="fa fa-shopping-cart"></i><?=count($info)?></a></p>
		</div>
	</nav>
	<div class="container">
		<table class="table table-striped">
			<thead>
				<th>album</th>
				<th>Item</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
			</thead>
			<form action='/cart/complete' method='post'>
			<tbody>
			<?for($i=0;$i<count($info);$i++)
		{?>
			<tr>
				<td><img src=<?=$info[$i]['image']?>></td>
				<td><?=$info[$i]['name']?></td>
				<td>$<?=$info[$i]['price']?></td>
				<td><?=$info[$i]['quantity']?></td>
				<td>$<?=$info[$i]['quantity']* $info[$i]['price']?></td>
				<td><button class="btn btn-default" type='submit' >Complete Purchase</button></td>
			</tr>
			<?}
			?>
			</form>
			<form id='continue' name='continue' action='/admin/products' method='post'>
			<button class= "btn btn-success" type='submit'>Continue shopping</button>
			</form>
			</tbody>
			
		
		<!-- <div class="row">
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
			<form class="col-md-6">
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
		</div> -->
	</div>
</body>
</html>