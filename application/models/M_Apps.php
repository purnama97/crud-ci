<?php
class M_Apps extends CI_Model {

	public function search($table,$id)
    {
        $query = $this->db->get_where($table,$id);
		return $query;
    }
	
	public function show($table)
    {
        $query = $this->db->get($table);
		return $query;
    }
		
	public function hapus($table,$id)
    {
        $this->db->delete($table,$id);
    }
	
	public function create($table,$data)
    {
        $this->db->insert($table,$data);
    }
	
	public function update($table,$data,$where)
    {
        $this->db->update($table,$data,$where);
    }
	
}