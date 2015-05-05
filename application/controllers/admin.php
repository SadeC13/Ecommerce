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
		
		$data['albums']= $this->Album->get_all_albums();

		$this->load->view('products', $data);
		$this->load->view('admin_edit', $data);

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

}

//end of main controller