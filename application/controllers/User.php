<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_user');
    }

    public function index()
    {
        $data['title'] = 'My profile';

        $data['user'] = $this->db->get_where('user', ['nim' =>
        $this->session->userdata('nim')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit profile';

        $data['user'] = $this->db->get_where('user', ['nim' =>
        $this->session->userdata('nim')])->row_array();

        $this->form_validation->set_rules('name', 'Full name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Model_user->edit_profile();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your profile has been updated!
          </div>');
            redirect('user');
        }
    }

    public function changepassword()
    {
        $data['title'] = 'Change password';

        $data['user'] = $this->db->get_where('user', ['nim' =>
        $this->session->userdata('nim')])->row_array();

        //validasi password lama dan password baru
        $this->form_validation->set_rules('current_password', 'Current password', 'required|trim');
        $this->form_validation->set_rules('new_password', 'New password', 'required|trim|min_length[3]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Confirm password', 'required|trim|min_length[3]|matches[new_password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong current password!
          </div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    if (password_verify($current_password, $data['user']['password'])) {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cannot be the same as current password!
                  </div>');
                        redirect('user/changepassword');
                    }
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password changed!
                  </div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
}
