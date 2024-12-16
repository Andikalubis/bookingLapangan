<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user_by_user($username) {
        $query = $this->db->get_where('auth_user', ['username' => $username]);
        return $query->row();
    }
}
