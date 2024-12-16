<?php
class Booking_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function saveBooking($data) {
        $this->db->insert('t_booking', $data);
        return $this->db->insert_id(); 
    }

    public function updateLapanganStatus($lapang_id, $status) {
        $this->db->set('status', $status);
        $this->db->where('id', $lapang_id);
        $this->db->update('m_lapang');
    }

    public function getBookingById($booking_id) {
        $this->db->select('t_booking.*, m_lapang.no_lapang');
        $this->db->from('t_booking');
        $this->db->join('m_lapang', 'm_lapang.id = t_booking.id_lapang', 'left'); 
        $this->db->where('t_booking.id', $booking_id);
        $query = $this->db->get();
        return $query->row_array();
    }
    
}
