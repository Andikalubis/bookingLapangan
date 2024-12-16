<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('auth/login');
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('auth');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->Auth_model->get_user_by_user($username);

            if ($user) {
                if (password_verify($password, $user->password)) {
                    $session_data = array(
                        'id'        => $user->id,
                        'username'  => $user->username,
                        'nama'      => $user->nama,
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($session_data);
                    $this->session->set_flashdata('success', 'Login berhasil');
                    redirect('dashboard/home');
                } else {
                    $this->session->set_flashdata('error', 'Password salah');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('error', 'Username tidak ditemukan');
                redirect('auth');
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
