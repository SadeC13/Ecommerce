<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function view()
	{
		$this->load->view('cart',array('info' => $this->session->userdata('info')));
	}

	public function add_to_cart()
	{
	// 	$this->session->sess_destroy();
	// die();
		if (!($this->session->userdata('info'))) {
			 $this->session->userdata('info', array());
				$cart = $this->session->userdata('info');
				$cart[] = $this->input->post();
				$this->session->set_userdata('info', $cart);
				redirect('/cart/view');
		}
		
				foreach ($this->session->userdata('info') as $key => $value) {
					if ($this->input->post('id') == $value['id']) {
						$this_one = $this->session->userdata('info')[$key];
						$this_one['quantity'] = (int)$this_one['quantity'] +  (int)$this->input->post('quantity');
						$food = $this->session->userdata('info');
						unset($food[$key]);
						$food[] = $this_one;
						$this->session->set_userdata('info', $food);
						// var_dump($food);
						redirect('/cart/view');
					}
				}
				$cart = $this->session->userdata('info');
				$cart[] = $this->input->post();
				$this->session->set_userdata('info', $cart);
				redirect('/cart/view');
				


		// $id = $this->input->post('id');
		// $cart = $this->session->userdata('info');
		// if (!empty($cart[$id]))
		// {
		// 	$item = $cart[$id];
		// 	$quantity = $this->input->post('quantity') + $item['quantity'];
		// 	$cart[$id]['quantity'] = $quantity;
		// 	$this->session->set_userdata('cart', $cart);
			
		// }
		// else if (!empty($this->session->userdata('cart')))
		// {
		// 	$cart[$id] = $this->input->post();
		// 	$this->session->set_userdata('cart', $cart);
		// }
		// else
		// {
		// 	$this->session->set_userdata('cart', array('id' => $this->input->post()));
		// }
		// $items=$this->session->userdata('info');
		// $post = $this->input->post();
		// // array_push($items, $post);
		// $this->session->set_userdata('info', $items);
		// $new_info = $this->session->userdata('info');
		// var_dump($post);
		// var_dump($old_info);
		// var_dump($new_info);
	}

public function complete()
	{
		$this->load->view('complete_purchase');
	}
	public function empty_cart()
	{
		 $this->session->unset_userdata('info');
		 $this->session->set_userdata('info',array());
		 redirect('/cart/view');
	}
	public function edit()
	{
		if($this->input->post('quantity'))
		{
			// var_dump($this->input->post());
			// die();
			$this->load->model('Album');
			$data['album']=$this->Album->view($this->input->post());
			$this->load->view('product_view',$data);
		}
		if($this->input->post('delete'))
		{
			
			$this->load->model('Album');
			$this->Album->destroy($this->input->post());
			redirect('/cart/view');
		}

	}
}