<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Dashboard";

		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar');
		$this->load->view('welcome_message', $data);
		$this->load->view('templates/footer');
	}
}
