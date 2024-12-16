<?php
defined('BASEPATH') or exit('No direct script access allowed');

class A_Lapangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lapangan_model');
    }

    public function getData()
    {
        $data = $this->Lapangan_model->get_all_lapangan(); 
        $result = array();
        $no = 1;
    
        foreach ($data as $row) {
            $result[] = array(
                'no' => $no++,
                'no_lapang' => $row['no_lapang'],
                'status' => $row['status'],
                'id' => $row['id'],
            );
        }
        echo json_encode(array('data' => $result));
    }

    public function delete($id)
    {
        if ($this->Lapangan_model->delete_lapangan($id)) {
            echo json_encode(['status' => 'success', 'message' => 'Data berhasil dihapus']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus data']);
        }
    }

    public function updateStatus() {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
    
        if (is_null($id) || is_null($status)) {
            echo json_encode(['success' => false, 'message' => 'ID atau status tidak valid']);
            return;
        }
    
        $this->db->set('status', $status);
        $this->db->where('id', $id);
        $this->db->update('m_lapang');
    
        if ($this->db->affected_rows() > 0) {
            echo json_encode(['success' => true, 'message' => 'Status berhasil diupdate']);
        } else {
            echo json_encode(['error' => false, 'message' => 'Gagal mengupdate status']);
        }
    }    

    public function getLapangan() {
        $lapangan = $this->Lapangan_model->getAllLapangan();
        
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($lapangan)); 
    }
    
}
