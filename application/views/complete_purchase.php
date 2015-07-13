<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>Stripe Getting Started Form</title>
 
  <!-- The required Stripe lib -->
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
 
  <!-- jQuery is used only for this example; it isn't required to use Stripe -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 
  <script type="text/javascript">
    // This identifies your website in the createToken call below
    Stripe.setPublishableKey('YOUR_PUBLISHABLE_KEY');

    var stripeResponseHandler = function(status, response) {
      var $form = $('#payment-form');

      if (response.error) {
        // Show the errors on the form
        $form.find('.payment-errors').text(response.error.message);
        $form.find('button').prop('disabled', false);
      } else {
        // token contains id, last4, and card type
        var token = response.id;
        // Insert the token into the form so it gets submitted to the server
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));
        // and re-submit
        $form.get(0).submit();
      }
    };

    jQuery(function($) {
      $('#payment-form').submit(function(e) {
        var $form = $(this);

        // Disable the submit button to prevent repeated clicks
        $form.find('button').prop('disabled', true);

        Stripe.card.createToken($form, stripeResponseHandler);

        // Prevent the form from submitting with the default action
        return false;
      });
    });
  </script>
</head>
<style>
.back{
	background-color:yellow;
	border-radius:10%;
	width:8em;
	height:2.5em;
	margin:1em;
}
</style>
<body>
<nav class="navbar navbar-default">
		<div class="container">
		<div class="row">
			<form class="col-md-6">
				<h2>Shipping Information</h2>
				<div class="form-group">
				    <label for="first_name">First Name</label>
				    <input type="text" class="form-control" id="first_name">
				</div>
				<div class="form-group">
				    <label for="last_name">Last Name</label>
				    <input type="text" class="form-control" id="last_name">
				</div>
				<div class="form-group">
				    <label for="address">Address</label>
				    <input type="text" class="form-control" id="address">
				</div>
				<div class="form-group">
				    <label for="address2">Address 2</label>
				    <input type="text" class="form-control" id="address2">
				</div>
				<div class="form-group">
				    <label for="city">City</label>
				    <input type="text" class="form-control" id="city">
				</div>
				<div class="form-group">
				    <label for="state">State</label>
				    <input type="text" class="form-control" id="state">
				</div>
				<div class="form-group">
				    <label for="zip">Zipcode</label>
				    <input type="text" class="form-control" id="zipcode">
				</div>
				<button id="cont_shop" type="submit" class="btn btn-default">Submit</button>
			</form>	
			<form action= '/card/buy' method='post' id="payment-form" class="col-md-6">
 		 <h2>Billing Information</h2>
				 <div class="checkbox">
					<label>
			    		<input type="checkbox"> Same as Shipping
			    	</label>
				</div>
				<div class="form-group">
				    <label for="first_name">First Name</label>
				    <input type="text" class="form-control" id="first_name">
				</div>
				<div class="form-group">
				    <label for="last_name">Last Name</label>
				    <input type="text" class="form-control" id="last_name">
				</div>
				<div class="form-group">
				    <label for="address">Address</label>
				    <input type="text" class="form-control" id="address">
				</div>
				<div class="form-group">
				    <label for="address2">Address 2</label>
				    <input type="text" class="form-control" id="address2">
				</div>
				<div class="form-group">
				    <label for="city">City</label>
				    <input type="text" class="form-control" id="city">
				</div>
				<div class="form-group">
				    <label for="state">State</label>
				    <input type="text" class="form-control" id="state">
				</div>
				<div class="form-group">
				    <label for="zip">Zipcode</label>
				    <input type="text" class="form-control" id="zipcode">
				</div>
  <h1>Charge $<?=$this->session->userdata('sum')?> with Stripe</h1>
 
  <form action="/admin/charge" method="POST" id="payment-form">
    <span class="payment-errors"></span>
 
    <div class="form-row">
      <label>
        <span>Card Number</span>
        <input type="text" size="20" data-stripe="number"/>
      </label>
    </div>
 
    <div class="form-row">
      <label>
        <span>CVC</span>
        <input type="text" size="4" data-stripe="cvc"/>
      </label>
    </div>
 
    <div class="form-row">
      <label>
        <span>Expiration (MM/YYYY)</span>
        <input type="text" size="2" data-stripe="exp-month"/>
      </label>
      <span> / </span>
      <input type="text" size="4" data-stripe="exp-year"/>
    </div>
 
    <button type="submit">Submit Payment</button>
  </form>

  <button class='back' onclick="goBack()">Go Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>

	
				
			
