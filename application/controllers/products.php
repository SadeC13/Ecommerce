<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

public function view_product_info()
{
	$this->load->model('Album');
	$data['album']=$this->Album->view($this->input->post());
	$this->load->view('product_view',$data);
}
// public function filter()
// {
// 	$this->load->model('Album');
// 	if($this->input->post('filter') && $this->input->post('filter') == 'artist'){
// 	$data['albums']=$this->Album->view_artist_filter($this->input->post());
// 	$this->load->view('products', $data);
// 	};
// }

}