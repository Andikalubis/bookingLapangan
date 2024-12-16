<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

class Booking extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Booking_model');

    }

    public function submit() {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('lapang', 'Lapangan', 'required');
        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('tgl_booking', 'Tanggal Booking', 'required');
        $this->form_validation->set_rules('jam_booking', 'Jam Booking', 'required');
        $this->form_validation->set_rules('durasi', 'Durasi Booking', 'required|numeric');
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'id_lapang' => $this->input->post('lapang'),
                'no_tlp' => $this->input->post('no_tlp'),
                'tgl_booking' => $this->input->post('tgl_booking'),
                'jam_booking' => $this->input->post('jam_booking'),
                'durasi' => $this->input->post('durasi'),
            ];
    
            $booking_id = $this->Booking_model->saveBooking($data);
            $lapang_id = $this->input->post('lapang');
            $this->Booking_model->updateLapanganStatus($lapang_id, 2);
            $data['id_booking'] = $booking_id;
            $this->load->view('landing/pages/sukses', $data);
        }
    }

    public function cetak($booking_id) {
        $dompdf = new Dompdf();
        $booking_data = $this->Booking_model->getBookingById($booking_id);
    
        if ($booking_data) {
            $html = $this->load->view('landing/pages/pdf/cetak_booking', $booking_data, true);

            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            
            $pdfOutput = $dompdf->output();
            $currentDate = date('Y-m-d');
            $filePath = FCPATH . 'assets/temp/Booking_' . $currentDate . '.pdf';
            
            $tempDir = FCPATH . 'assets/temp/';
            if (!is_dir($tempDir)) {
                mkdir($tempDir, 0777, true);
            }
            
            if (file_put_contents($filePath, $pdfOutput) !== false) {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(['status' => 'success', 'file_path' => base_url('assets/temp/Booking_' . $currentDate . '.pdf')]));
            } else {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(['status' => 'error', 'message' => 'Failed to save PDF file'])); 
            }
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(['status' => 'error', 'message' => 'Booking not found']));
        }
    }
    
}