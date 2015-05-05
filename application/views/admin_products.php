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
		#sort_select{
			width: 20%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
		    <h3>Dashboard</h3>
		    <h4><a href="#">Orders</a></h4>
		    <h4><b><a href="#">Products</a></b></h4>
		    <a href="">log off</a>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="input-group">
      			<div class="input-group-addon"><i class="fa fa-search"></i></div>
      			<input id="search_bar" type="text" class="form-control" placeholder="search">
      		</div>
			<button type="submit" class="btn btn-primary">Add new product</button>
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
</body>
</html>