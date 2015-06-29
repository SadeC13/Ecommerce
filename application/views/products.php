<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="https:code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
		$(document).ready(function()
		{
			$('img').click(function()
			{
				$.post($(this).attr('action'), $(this).serialize(), function(res)
				{
					$('#notes').html(res);
					$('.updateForm textarea').change(function()
					{
						$(this).parent().submit();
					})
				})
				return false;
			});

			$('.updateForm textarea').change(function()
			{
				$(this).parent().submit();
			})
		});
	</script>
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
		.container{
			color: white;
		}
		#sidebar{
			border: 1px solid #757575;
			border-radius: 5px;
			padding: 10px;
			font-size: 12px;
		}
		#search_btn{
			  position: relative;
			  left: 82%;
			  top: -32px;
			  background-color: white;
			  font-size: 20px;
			  height: 29px;
			  border: none;
			  border-radius: 3px;
			  color: grey;
		}
		#search_input{
			width: 80%;
		}
		#main{
			margin-left: 30px;
		}
		.thumbnail{
			background-color: transparent;
			border: none;
			height: 265px;
		}
		.thumbnail .caption{
			color: white;
		}
		.thumbnail img{
			width:170px;
			height:170px;
		}
		#info_btn{
			  position: relative;
			  left: 60%;
			  top: -47px;
		}
		ul{
			list-style-type: none;
		}
		#sort_select{
			  width: 20%;
			  position: relative;
			  top: -50px;

		}
		#pagination{
			text-align: center;
		}

	</style>
</head>
<body>
	<nav id="top_bar" class="navbar navbar-default">
		<div class="container">
			<div class="row">
			    <a href="/"><img src="/assets/images/logo4.png"></a>
			    <ul>
			   		<li><a href="/loginregs/log_out">Log Out</a></li>
			    	<li><a href="/admin/login">Log In</a></li>
			    	<li><a href="/cart/view">
			    	<?if($this->session->userdata('logged_in')){echo $this->session->userdata('first_name')."'s ";}?>
			    	Shopping Cart <i class="fa fa-shopping-cart"></i></a>
		    </div></li>
			    </ul>
			    
		</div>
	</nav>
	<div id="nav_bar" class="row">
		<ul>
			<li><a href="/admin/index">HOME</a></li>|
			<li><a href="/admin/about">ABOUT</a></li>|
			<li><a href="">MUSIC</a></li>|
			<li><a href="/admin/about">CONTACT</a></li>
		</ul>
	</div>
	<div class="container">
		<div id="sidebar" class="col-md-3">
			<form id="search" class="form-group">
				<input id="search_input" class="form-control" type="text" placeholder="search product...">
				<button id="search_btn" type="submit"><i class="fa fa-search"></i></button>
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
			<h2>Albums</h2>
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
			<form action='/products/view_product_info' method='post'>
			<input type='hidden' name='id' value=<?=$album['id']?>>
				<div class="col-xs-6 col-md-4">
				    <a href="#" class="thumbnail">
				    	<div class="caption">
				    		<img src=<?=$album['image']?>>
							<p><b><?=$album['name']?></b></p>
							<p><?=$album['artist']?></p>
							<p>$<?=$album['price']?></p>
						<button id="info_btn" class="btn btn-default" type="submit">Info</button>
						</div>
				    </a>
				</div>
			</form>
				<?}
				?>
			</div>
			<nav id="pagination">
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