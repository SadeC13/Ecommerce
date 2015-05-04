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
		$query="DELETE FROM albums Where id= ?";
		$this->db->query($query, array($post['id']));
	}

	public function update($post)
	{
		$query="UPDATE albums SET name = ?, artist= ?, genre= ?, description = ?, price= ?  WHERE id =?";
		$this->db->query($query, array($post['name'],$post['artist'], $post['genre'],$post['description'],$post['price'],$post['id']));
	}
}