<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function Aktivasi()
    {
        $data['title'] = "Aktivasi user";

        $data['user'] = $this->db->get_where('user', ['nim' =>
        $this->session->userdata('nim')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/Aktivasi', $data);
        $this->load->view('templates/footer');
    }

    public function userManagement()
    {
        $data['title'] = "User management";

        $data['user'] = $this->db->get_where('user', ['nim' =>
        $this->session->userdata('nim')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/usermanagement', $data);
        $this->load->view('templates/footer');
    }
}
