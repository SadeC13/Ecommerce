<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			background: url(/assets/images/3.jpg) no-repeat center center fixed;
			background-size: cover;
		}
		#top_bar{
			background: url(/assets/images/BI3.png) no-repeat center center fixed;
			background-size: cover;
			height: 150px;
			border: none;
		}
		h3{
			font-size: 54px;
			position: relative;
			top: 63px;
			left: -7px;
		}
		#log{
			position: relative;
			left: 96%;
			top: 33px;
			color: white;
		}
		#nav_bar{
			background: linear-gradient(#757575, #303030);
			position: relative;
  			top: -23px;
  			text-align: center;
  			padding-top: 5px;
  			box-shadow: 5px 5px 5px ##1F1F1F;
		}
		#nav_bar ul li{
			display: inline;
			list-style-type: none;
			margin: 10px;
		}
		#nav_bar a{
			color: white;
		}
		th{
			color: #E8E8E8;
		}
	</style>
</head>
<body>
	<nav id="top_bar" class="navbar navbar-default">
		<div class="container">
		    <h3>Dashboard</h3>
		    <a id="log" href="">log off</a>
		</div>
	</nav>
	<div id="nav_bar" class="row">
		<ul>
			<li><a href=""><b>ORDERS</b></a></li>|
			<li><a href="">PRODUCTS</a></li>
		</ul>
	</div>
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