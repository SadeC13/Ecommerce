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
		$post = $this->input->post();
		$old_info = $this->session->userdata('info');

		if (!$this->session->userdata('info'))
		{
			$this->session->set_userdata('info', array());
		}
		$items=$this->session->userdata('info');
		$post = $this->input->post();
		array_push($items, $post);
		$this->session->set_userdata('info', $items);

		$new_info = $this->session->userdata('info');
		// var_dump($post);
		// var_dump($old_info);
		// var_dump($new_info);
		redirect('/cart/view');
	}

	public function complete()
	{
		$this->load->view('complete_purchase');
	}
	public function empty_cart()
	{
		 $this->session->unset_userdata('info');
		 redirect('/cart/view');
	}
	public function edit()
	{
		if($this->input->post('quantity'))
		{
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

			// $items=$this->session->userdata('info');
			// for($i=0;$i<count($items);$i++)
			// {
			// 	if ($items[$i]== $this->input->post())
			// 	{
			// 		$temp=$items[$i];
			// 		$items[$i]=$items[count($items)-1];
			// 		$items[count($items)-1]=$temp;

			// 		array_pop($items[count($items)-1]);
			// 		$this->session->set_userdata('info',$items);
			// 		redirect('/cart/view');
			// 	}
			// }
			// var_dump($items);
		}

	}