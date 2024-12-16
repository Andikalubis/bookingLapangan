<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapangan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login'); 
        }
        
        $this->load->model('Lapangan_model'); 
    }

    public function index()
    {
        $data = array(
            'title' => 'Lapangan',
        );

        $data['contents'] = $this->load->view('dashboard/pages/lapangan', $data, TRUE);
        $this->load->view('dashboard/layout/templates', $data);
    }

	public function save()
	{
		$id_lapang = $this->input->post('id_lapang');
		$kode_lapangan = $this->input->post('lapangan');
		$lapangan_text = $this->input->post('lapangan_text');
		$created_by = $this->session->userdata('id');
		
		// print_r($kode_lapangan); die;
		if (empty($kode_lapangan)) {

			$this->session->set_flashdata('error', 'Kode Lapangan tidak boleh kosong.');
			redirect('dashboard/lapangan');
		}
		
		$data = array(
			'no_lapang' => $kode_lapangan,
			'created_by' => $created_by,
			'created_at' => date('Y-m-d H:i:s'),
		);
	
		if (empty($id_lapang)) {
			if ($this->Lapangan_model->insert_lapangan($data)) {
				$this->session->set_flashdata('success', 'Data Lapangan berhasil ditambahkan.');
			} else {
				$this->session->set_flashdata('error', 'Terjadi kesalahan saat menambahkan data.');
			}
		} else {
			// Jika id_lapang tidak kosong, lakukan update
			$data['updated_at'] = date('Y-m-d H:i:s');
			if ($this->Lapangan_model->update_lapangan($id_lapang, $data)) {
				$this->session->set_flashdata('success', 'Data Lapangan berhasil diperbarui.');
			} else {
				$this->session->set_flashdata('error', 'Terjadi kesalahan saat memperbarui data.');
			}
		}
	
		// Redirect kembali ke halaman lapangan
		redirect('dashboard/lapangan');
	}
	
}
