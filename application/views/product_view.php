<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
		#back{
			margin-left: 50px;
		}
		#album_view{
			border: 1px solid black;
			height: 500px;
			padding: 30px;
		}
		#info{
			border: 1px solid black;
			height: 500px;
			padding: 50px;
		}
		#info p{
			width: 80%;
			font-size: 14px;
			padding-top: 25px;
		}
		#price_select{
			width: 22%;
		}
		img{
			width:250px;
			height:250px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="row">
			    <h3>Website Name</h3>
			    <p><a href="/cart/add_to_cart">Shopping Cart <i class="fa fa-shopping-cart"></i></a></p>
		    </div>
		</div>
	</nav>
	<a id="back" href="">Go Back</a>
	<div class="container">
		
		<div id="album_view" class="col-md-5">		
			<div class="col-xs-6 col-md-3">
				<h3><?=$album['name']?></h3>
				<p><?=$album['artist']?></p>
				<img src=<?=$album['image']?>>
			</div>
		</div>
		<div id="info" class="col-md-7">
			<p><?=$album['description']?></p>
			<form action='/cart/add_to_cart' method='post'>
			<input type='hidden' name='id' value=<?=$album['id']?>>
			<input type='hidden' name='name' value=<?=$album['name']?>>
			<input type='hidden' name='artist' value=<?=$album['artist']?>>
			<input type='hidden' name='image' value=<?=$album['image']?>>
			<input type='hidden' name='price' value=<?=$album['price']?>>

			<select id="price_select" name='quantity' class="form-control">
					<option value='1'>1: $<?=$album['price']?></option>
					<option value='2'>2: $<?=$album['price'] * 2?></option>
					<option value='3'>3: $<?=$album['price'] * 3?></option>
				</select>
				<input type='submit' value="Add to cart">
			</form>
		</div>
		<div class=".col-md-12">
			<h4>Similar Items</h4>
			<div class="col-xs-4 col-md-2">
				<a href="#" class="thumbnail">
				    <img src="/assets/images/beatles.jpg" alt="...">
				    <div class="caption">
						<p>Abbey Road: The Beatles</p>
					</div>
				</a>
			</div>
			<div class="col-xs-4 col-md-2">
				<a href="#" class="thumbnail">
				    <img src="/assets/images/beatles.jpg" alt="...">
				    <div class="caption">
						<p>Abbey Road: The Beatles</p>
					</div>
				</a>
			</div>
			<div class="col-xs-4 col-md-2">
				<a href="#" class="thumbnail">
				    <img src="/assets/images/beatles.jpg" alt="...">
				    <div class="caption">
						<p>Abbey Road: The Beatles</p>
					</div>
				</a>
			</div>
			<div class="col-xs-4 col-md-2">
				<a href="#" class="thumbnail">
				    <img src="/assets/images/beatles.jpg" alt="...">
				    <div class="caption">
						<p>Abbey Road: The Beatles</p>
					</div>
				</a>
			</div>
			<div class="col-xs-4 col-md-2">
				<a href="#" class="thumbnail">
				    <img src="/assets/images/beatles.jpg" alt="...">
				    <div class="caption">
						<p>Abbey Road: The Beatles</p>
					</div>
				</a>
			</div>
			<div class="col-xs-4 col-md-2">
				<a href="#" class="thumbnail">
				    <img src="/assets/images/beatles.jpg" alt="...">
				    <div class="caption">
						<p>Abbey Road: The Beatles</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</body>
</html>