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
			font-size: 11px;
			padding-top: 25px;
		}
		#price_select{
			width: 22%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="row">
			    <h3>Website Name</h3>
			    <p><a href="#">Shopping Cart <i class="fa fa-shopping-cart"></i> (3)</a></p>
		    </div>
		</div>
	</nav>
	<a id="back" href="">Go Back</a>
	<div class="container">
		
		<div id="album_view" class="col-md-5">
			
			<div class="col-xs-6 col-md-3">
				<h3>Beyonce</h3>
				<p>Beyonce</p>
				<img src="/assets/images/beyonce.png" alt="...">

			</div>
		</div>
		<div id="info" class="col-md-7">
			<p>Product Description Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id lacus quam. Duis volutpat nisi sed ligula pretium pretium. Praesent vehicula euismod eros et tincidunt. Praesent ultrices tempor arcu. Suspendisse malesuada diam non enim elementum, at elementum quam pulvinar. Morbi vitae neque purus. Nunc eu risus eros.

				Nunc nec dolor facilisis, commodo ex quis, imperdiet felis. Nunc tristique erat sed enim rhoncus congue. Mauris nec sagittis tortor. Nulla in feugiat tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus tempus odio vel purus faucibus, sit amet pretium lectus blandit. Quisque condimentum ex ex, eget hendrerit arcu rhoncus vel. Aliquam eleifend porta sapien, iaculis rhoncus tortor mattis et. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec quis ultricies sem. Phasellus at luctus purus. Nam dui orci, dapibus vel ex et, rhoncus elementum velit. Donec massa felis, scelerisque nec commodo id, semper quis sapien. Praesent elementum euismod efficitur. Phasellus pretium malesuada turpis in consequat. Nam viverra leo in libero tincidunt, ut scelerisque sem rutrum.</p>
			<form>
				<select id="price_select" class="form-control">
					<option>1 ($19.99)</option>
					<option>2 ($39.98)</option>
					<option>3 ($59.97)</option>
				</select>
				<button type="submit" class="btn btn-primary">Buy</button>
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