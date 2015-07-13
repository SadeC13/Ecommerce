<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('Album');
		// $this->output->enable_profiler();
	}
	public function index()
	{
		$data=$this->session->userdata('first_name');
		$this->load->view('home', $data);
	}
	public function about()
	{
		$this->load->view('About');
	}
	public function login()
	{
		$this->load->view('index');
	}
	public function products()
	{	if(isset($_POST['filter']) && $_POST['filter'] == 'artist'){
			$data['albums']=$this->Album->view_artist_filter();
			$this->load->view('products', $data);
		}
		else if(isset($_POST['filter']) && $_POST['filter'] == 'price'){
			$data['albums']=$this->Album->view_price_filter();
			$this->load->view('products', $data);
		}
		else if(isset($_POST['filter']) && $_POST['filter'] == 'name'){
			$data['albums']=$this->Album->view_name_filter();
			$this->load->view('products', $data);
		}
		else if(isset($_POST['filter']) && $_POST['filter'] == 'updated'){
			$data['albums']=$this->Album->view_created_filter();
			$this->load->view('products', $data);
		}
		else{
			// var_dump("hi");
			// die();
		$data['albums']= $this->Album->get_all_albums();
		$this->load->view('products', $data);
		}
	}

	public function create()
	{
		$this->Album->create($this->input->post());
		$this->load_partial();
		$data['albums']= $this->Album->all();
		redirect('/');
	}

	public function destroy()
	{
		$this->Album->destroy($this->input->post());
		$this->load_partial();
		$data['albums']= $this->Album->all();
		redirect('/');
	}
	public function update()
	{
		$this->Album->update($this->input->post());
		$this->load_partial();
		$data['albums']= $this->Album->all();
		redirect('/');
		
	}
	public function charge()
	{
		// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_eCkAjqz759isGbePQDqzxfal");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create the charge on Stripe's servers - this will charge the user's card
try {
$charge = \Stripe\Charge::create(array(
  "amount" => 1000, // amount in cents, again
  "currency" => "usd",
  "source" => $token,
  "description" => "Example charge")
);
} catch(\Stripe\Error\Card $e) {
  // The card has been declined
}
	}

}

//end of main controller