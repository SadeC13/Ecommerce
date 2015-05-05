<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function add_to_cart()
	{
		if($this->session->userdata($this->input->post('id')))
		{
		
			// $this->session->set_userdata('name', $this->input->post('name'));
			// $this->session->set_userdata('price', $this->input->post('price'));
			$this->session->set_userdata('quantity', $this->input->post('quantity')+$this->session->userdata('quantity'));
			$this->session->set_userdata('total', $this->session->userdata('quantity')*$this->session->userdata('price'));

		}
		else
		{
			$this->session->set_userdata('id');
			$this->session->set_userdata('name', $this->input->post('name'));
			$this->session->set_userdata('price', $this->input->post('price'));
			$this->session->set_userdata('quantity', $this->input->post('quantity'));
			$this->session->set_userdata('total', $this->input->post('quantity')*$this->input->post('price'));
		}
		$this->load->view('cart');
	}
	public function complete_purchase()
	{
		$this->load->view('complete_purchase');
	}

}