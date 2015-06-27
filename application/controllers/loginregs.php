<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginregs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->library('form_validation');
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}
	
	public function register()
	{		
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_message('email','Email not unique Error Message');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[confirm]');
		$this->form_validation->set_message('password','Password Error Message');
		$this->form_validation->set_rules('confirm', 'Password Confirmation', 'trim|required');
		$this->form_validation->set_message('confirm','Confirm Password Error');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|alpha');
		$this->form_validation->set_message('first_name','Error:first name cannot contain numbers');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|alpha');
		$this->form_validation->set_message('last_name','Error:last name cannot contain numbers');



		$errors="";

		if ($this->form_validation->run() == false) 
			{
				$errors= validation_errors();
			}
		if($errors)
			{
				$this->session->set_flashdata('add_errors', $errors);
				redirect('/');
			}
		else
		{
			$this->load->model('User');
			$post=$this->input->post();
			$user=$this->User->register($this->input->post());
			$this->session->set_flashdata('registered', "Registered! now log in!");
		 	redirect('/');
		 }
	}

	public function login_user() 
	{		
		
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_message('email','Email Error Message');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_message('password','Password Error Message');
		$errors = "";
		if(!$this->form_validation->run())
		{
			$errors.= validation_errors();
		}
		else
		{
			$this->load->model('User');
			$email=$this->input->post('email');
			$user=$this->User->get_user_by_email($email);
			// var_dump($user['email']);
			if(!isset($user['email']))
			{
				// echo "YOU SUCK";
				$errors.="<p class='error'>email does not exist, please register or try again!</p>";
			}
			elseif($this->input->post('password')!=$user['password'])
			{
				$errors.="<p class='error'>password does not exist in database</p>";
			}
			else {
				//SUCCESS
				$data['users']=$this->User->get_user_by_email($email);
				$this->load->view('home',$data);
			}
		if($errors)
		{
			$this->session->set_flashdata('add_errors', $errors);
			redirect('/loginregs/index');
		}
	}	
		
}
public function log_out()
{

	$this->session->sess_destroy();
	redirect('/loginregs/index');
}
}

//end of main controller