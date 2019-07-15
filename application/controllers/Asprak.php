<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asprak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_asprak');
    }

    public function inputnilai()
    {

        $data['title'] = "Input nilai";

        $data['user'] = $this->db->get_where('user', ['nim' =>
        $this->session->userdata('nim')])->row_array();

        $data['datamatkul'] = $this->Model_asprak->asprakMatkul();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('asprak/inputnilai', $data);
        $this->load->view('templates/footer', $data);
    }
}
