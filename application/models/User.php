<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model
{

	public function get_all_users()
	{
		$users_query="SELECT * FROM users";
		return $this->db->query($users_query)->result_array();
	}
	
	public function register($post)
	{
		$id=$post['id'];
		$first_name=$post['first_name'];
		$last_name=$post['last_name'];
		$email=$post['email'];
		$password=$post['password'];
		$query="INSERT INTO users(first_name,last_name,email,password,created_at,updated_at)
		VALUES(?,?,?,?,NOW(),NOW())";
		return $this->db->query($query, array($first_name,$last_name,$email,$password));
	}

	public function get_user_by_email($email)
	{
		$query="SELECT * FROM users WHERE users.email= ?";
		return $this->db->query($query, array($email))->row_array();
	}

	public function get_id($email)
	{
		$query="SELECT * FROM users WHERE users.email = ? ";
		return $this->db->query($query, array($email))->row_array();
	}
		
}