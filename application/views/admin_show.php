<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
		#search_bar{
			width: 20%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
		    <h3>Dashboard</h3>
		    <h4><a href="#">Orders</a></h4>
		    <h4><a href="#">Products</a></h4>
		    <a href="">log off</a>
		</div>
	</nav>
	<div class="container">
		<div id="order_box">
			<h5><b>Order ID:</b></h5>
			<div id="cust_ship" class="row">
			<h5><b>Customer Shipping Info:</b></h5>
			<p>Name:</p>
			<p>Address:</p>
			<p>City:</p>
			<p>State:</p>
			<p>Zip:</p>
			</div>
			<div id="cust_bill" class="row">
			<h5><b>Customer Shipping Info:</b></h5>
			<p>Name:</p>
			<p>Address:</p>
			<p>City:</p>
			<p>State:</p>
			<p>Zip:</p>
			</div>
		</div>
		<div id="info">
		<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>Item</th>
				<th>Quantity</th>
				<th>Total</th>
			</thead>
			<tbody>
				<tr>
					<td>100</td>
					<td>Abbey Road: The Beatles</td>
					<td>$19.99</td>
					<td>233</td>
					<td>$19.99</td>
				</tr>
			</tbody>
		</table>
			<div id="status">
				<p>Status: </p>
			</div>
			<div id="total_box">
				<p>Sub Total: </p>
				<p>Shipping: </p>
				<p>Total Price: </p>
			</div>
		</div>
	</div>
</body>
</html>