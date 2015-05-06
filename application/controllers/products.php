<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

public function view_product_info()
{
	$this->load->model('Album');
	$data['album']=$this->Album->view($this->input->post());
	$this->load->view('product_view',$data);
}

}