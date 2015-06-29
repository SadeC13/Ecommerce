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
		body{
		  background: url(/assets/images/BI.jpg) no-repeat center center fixed;
		  background-size: cover;
		}
		#top_bar{
			background: url(/assets/images/BI4.jpg) no-repeat center center fixed;
			background-size: cover;
			height: 150px;
			border: none;
		}
		#top_bar ul li{
			  position: relative;
			  display: inline-block;
			  float: right;
			  bottom: 25px;
			  margin: 10px;
			  color: white;
		}
		#top_bar img{
			position: relative;
  			top: 6px;
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
		.container{
			color: white;
		}
		.total{
			color: #E8E8E8;
		}
table img{
	height:150px;
	width:150px;
}
th{
	color: #E8E8E8;
}
</style>
<body>
<?php $cart = ($this->session->userdata('info')); ?>
	<nav id="top_bar" class="navbar navbar-default">
		<div class="container">
			<div class="row">
			    <a href="/"><img src="/assets/images/logo4.png"></a>
			    <ul>
			    	<li><a href="/loginregs/log_out">Log Out</a></li>
			    	<li><a href="/admin/login">Log In</a></li>
			    	<li><a href="/cart/view">Shopping Cart <i class="fa fa-shopping-cart"></i></a>
		    </div></li>
			    </ul>
			    
		</div>
	</nav>
	<div id="nav_bar" class="row">
		<ul>
			<li><a href="/admin/index">HOME</a></li>|
			<li><a href="/admin/about">ABOUT</a></li>|
			<li><a href="/">MUSIC</a></li>|
			<li><a href="/admin/about">CONTACT</a></li>
		</ul>
	</div>
	<div class="container">
		<table class="table table-striped">
			<thead>
				<th>album</th>
				<th>Item</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
			</thead>
			<tbody>
		<?php foreach ($info as $item) {?>
			<form action='/cart/edit' method='post'>

			<tr>
				<input type='hidden' name='id' value=<?=$item['id']?>>
				<td><img src=<?=$item['image']?>></td>
				<td><?=$item['name']?></td>
				<td>$<?=$item['price']?></td>
				<td><?=$item['quantity']?><input type='submit' name='quantity' value='change'></td>   
				<td>$<?=$item['quantity']* $item['price']?></td>
				<td><input name='delete' type='submit' value="delete"></td>
				<!-- <a href=""><i class="fa fa-trash-o"></i></a><a href="/cart/edit/<?=$info[$i]['id']?>"> <i class="fa fa-pencil"></i></a></td> -->
			</tr>
			</form>
				<?}
				$sum=0;
				foreach ($info as $item){
					// var_dump($info);
					// die();
					$total=$item['quantity']* $item['price'];
					$sum+=$total;
				}
			?>

			<tr>
				<td class="total"><b>Total Price</b></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="total">$<?=$sum?></td>
				<td>
			<form action='/cart/complete' method='post'>
			<button class="btn btn-default" type='submit' >Complete Purchase</button>
			</form>
			</td>


			<form id='continue' name='continue' action='/admin/products' method='post'>
			<button class= "btn btn-success" type='submit'>Continue shopping</button>
			</form>
			<form id='empty' name='empty' action='/cart/empty_cart' method='post'>
			<button class='btn btn-danger' type='submit'>Empty Cart</button>
			</form>
			</tbody>
	</div>
</body>
</html>