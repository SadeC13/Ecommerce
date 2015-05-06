<?php 

class Album extends CI_Controller 
{
	public function get_all_albums()
	{
		$query="SELECT * FROM albums";
		$albums=$this->db->query($query)->result_array();
		return $albums;
	}

	public function create($post)
	{
		$query="INSERT INTO albums(name) VALUES(?)";
		return $this->db->query($query, array($post['name']));

	}

	public function destroy($post)
	{
		$new_session_data = array();
		foreach($this->session->userdata('info') as $album) {
			if ($album['id'] != $post['id']) {
				array_push($new_session_data, $album);
			}			
		}
		$this->session->set_userdata('info', $new_session_data);
	}

	public function update($post)
	{
		$query="UPDATE albums SET name = ?, artist= ?, genre= ?, description = ?, price= ?  WHERE id =?";
		$this->db->query($query, array($post['name'],$post['artist'], $post['genre'],$post['description'],$post['price'],$post['id']));
	}
	public function view($post)
	{
		$query="SELECT * FROM albums Where id= ?";
		return $this->db->query($query, array($post['id']))->row_array();
	}
	public function product($id)
	{
		$query= "SELECT * FROM albums where id= ?";
		return $this->db->query($query, array($post['id']))->row_array();
	}
}