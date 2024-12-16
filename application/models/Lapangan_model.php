<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan_model extends CI_Model {
    protected $table = "m_lapang"; 

    public function __construct() {
        parent::__construct();
    }

    public function insert_lapangan($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update_lapangan($id_lapang, $data)
    {
        $this->db->where('id', $id_lapang);
        return $this->db->update($this->table, $data);
    }

    public function delete_lapangan($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    public function get_all_lapangan()
    {
        $this->db->select('id, no_lapang, status');
        $this->db->from($this->table);
        $this->db->where('deleted', 0);
        $this->db->order_by('id', 'ASC');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAllLapangan() {
        $this->db->select('id, no_lapang');
        $this->db->from($this->table);
        $this->db->where('status', 1);
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
}
