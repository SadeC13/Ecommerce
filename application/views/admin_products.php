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
		#search{
			position: relative;
			left: 3%;
			top: 8px;
		}
		#search_bar{
			width: 20%;
		}
		#new_prod{
			width: 15%;
			position: relative;
  			left: 80%;
  			top: -29px;
		}
		th{
			color: #E8E8E8;
		}
		#pagination{
			position: relative;
  			left: 41%;

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
			<li><a href="">ORDERS</a></li>|
			<li><a href=""><b>PRODUCTS</b></a></li>
			
		</ul>
	</div>
	<div class="container">
		<div class="row">
			<div id="search" class="input-group">
      			<div class="input-group-addon"><i class="fa fa-search"></i></div>
      			<input id="search_bar" type="text" class="form-control" placeholder="search">
      		</div>
			<button id="new_prod" type="submit" class="btn btn-primary">Add new product</button>
		</div>
		<table class="table table-striped">
			<thead>
				<th>Picture</th>
				<th>ID</th>
				<th>Name</th>
				<th>Inventory Count</th>
				<th>Quantity Sold</th>
				<th>Action</th>
			</thead>
			<tbody>
				<tr>
					<td><img src=""></td>
					<td>1</td>
					<td>Lengend: Bob Marley</td>
					<td>54</td>
					<td>302</td>
					<td>
						<a href="">edit</a>
						<a href="">delete</a>
					</td>
				</tr>
			</tbody>
		</table>
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
</body>
</html>