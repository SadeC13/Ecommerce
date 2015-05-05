<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
		#sidebar{
			border: 1px solid black;
			padding: 10px;
			font-size: 12px;
		}
		#search_input{
			width: 80%;
		}
		#main{
			border: 1px solid black;
			margin-left: 30px;
		}
		ul{
			list-style-type: none;
		}
		#sort_select{
			width: 20%;
		}
		img{
			width:170px;
			height:170px;
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
	<div class="container">
		<div id="sidebar" class="col-md-3">
			<form id="search" class="form-group">
				<input id="search_input" class="form-control" type="text" placeholder="search product...">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
			<ul>
			        <label>Albums</label>
			        <?foreach ($albums as $album) {?>
			        <ul>
			            <li><?=$album['name']?></li>
	        		</ul>
	   
	    		<?}
	    		?>
	    		<label>Artists</label>
	    		<?foreach ($albums as $album) {?>
	    		<ul>
	    			<li><?=$album['artist']?></li>
	    		</ul>

	    		<?}
	    		?>
	    		<label>Genre</label>
	    		<?foreach ($albums as $album) {?>
	    		<ul>
	    			<li><?=$album['genre']?></li>
	    		</ul>

	    		<?}
	    		?>
	    		<li><i>Show All</i></li>
			</ul>
		</div>
		<div id="main"class="col-md-8">
			<h3>Albums (2)</h3>
			<nav>
			  <ul class="pager">
			    <li><a href="#"><i class="fa fa-arrow-left"></i>   Previous</a></li>
			    <li><a href="#">Next   <i class="fa fa-arrow-right"></i></a></li>
			  </ul>
			</nav>
			<select id="sort_select" class="form-control">
				<option>Sort by...</option>
				<option>Most Popular</option>
				<option>Price</option>
				<option>Recently Added</option>
			</select>
		<div id="products_diplay" class="row">
			<?foreach ($albums as $album) {?>
				<div class="col-xs-6 col-md-4">
				    <a href="#" class="thumbnail">
				    	<div class="caption">
				    		<img src=<?=$album['image']?>>
							<p><b><?=$album['name']?></b></p>
							<p><?=$album['artist']?></p>
							<p>$<?=$album['price']?></p>
						</div>
				    </a>
				</div>
				<?}
				?>
			</div>
			<nav>
			  <ul class="pagination">
			    <li>
			      <a href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</div>
	</div>
</body>
</html>