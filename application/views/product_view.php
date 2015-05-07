<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
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
		.go_back{
			position: relative;
			left: 11%;
			font-size: 18px;
		}
		.container{
			color: #E8E8E8;
		}
		#back{
			margin-left: 50px;
		}
		#album_view{
			height: 500px;
			padding: 30px;
		}
		#info{
			border-left: 1px solid #E8E8E8;
			height: 500px;
			padding: 50px;
		}
		#info p{
			width: 80%;
			font-size: 14px;
			padding-top: 25px;
		}
		#cart_btn{
			position: relative;
			left: 61%;
			top: -20px;
		}
		#price_select{
			width: 22%;
			position: relative;
			top: 15px;
		}
		#album_view img{
			width:250px;
			height:250px;
		}
	</style>
</head>
<body>
	<nav id="top_bar" class="navbar navbar-default">
		<div class="container">
			<div class="row">
			    <a href="/"><img src="/assets/images/logo4.png"></a>
			    <ul>
			    	<li><a href="/admin/log_reg">Log In</a></li>
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
	<a href="/admin/products" class="go_back">Go Back</a>
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
				<button id="cart_btn" class="btn btn-default" type='submit'>Add to Cart</button>
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