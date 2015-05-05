<?php 

class Order extends CI_Controller 
{
	public function get_all_orders()
	{
		$query="SELECT * FROM orders";
		$orders=$this->db->query($query)->result_array();
		return $orders;
	}
}