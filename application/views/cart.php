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
<?php $cart = ($this->session->userdata('cart')); ?>
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
					$total=$item['quantity']* $item['price'];
					$sum+=$total;
				}
			?>

			<tr>
				<td><b>Total Price</b></td>
				<td></td>
				<td></td>
				<td></td>
				<td>$<?=$sum?></td>
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