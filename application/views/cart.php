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
img{
	height:150px;
	width:150px;
}
#continue input{
	background-color:green;
}
</style>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
		    <h3>Website Name</h3>
		    <?if($this->session->userdata('info'))
		    {?>
		    <p><a href="">Shopping Cart <i class="fa fa-shopping-cart"></i><?=count($info)?></a></p>
		    <?}
		    else
		    {?>
			<p><a href="">Shopping Cart <i class="fa fa-shopping-cart"></i>0</a></p>
		    <?}?>
		    <p><a href="">Shopping Cart <i class="fa fa-shopping-cart"></i>   (<?=count($info)?>)</a></p>
		</div>
	</nav>
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
			
			<?for($i=0; $i<count($info); $i++)
		{?>
			<form action='/cart/edit' method='post'>
			<tr>
				<input type='hidden' name='id' value=<?=$info[$i]['id']?>>
				<td><img src=<?=$info[$i]['image']?>></td>
				<td><?=$info[$i]['name']?></td>
				<td>$<?=$info[$i]['price']?></td>
				<td><?=$info[$i]['quantity']?><button class="btn btn-default" name='quantity' type='submit' ><i class="fa fa-pencil"></i></button></td>   
				<td>$<?=$info[$i]['quantity']* $info[$i]['price']?></td>
				<td><input name='delete' type='submit' value="delete"></td>

				<!-- <a href=""><i class="fa fa-trash-o"></i></a><a href="/cart/edit/<?=$info[$i]['id']?>"> <i class="fa fa-pencil"></i></a></td> -->
			</tr>
			</form>
			<?}
			?>
			<form action='/cart/complete' method='post'>
			<button class="btn btn-default" type='submit' >Complete Purchase</button>
			</form>
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