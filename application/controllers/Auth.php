<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function index()
    {

        if ($this->session->userdata('nim')) {
            if ($this->session->userdata('role_id') == 1) {
                redirect('Dashboard');
            } else {
                redirect('Dashboard');
            }
        }

        $this->form_validation->set_rules('nim', 'Nim', 'trim|required|numeric');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
        } else {
            $this->_login();  //underscore menandakan private function (bukan baku, hanya penanda)
        }
    }

    private function _login()
    {
        $nim = $this->input->post('nim');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['nim' => $nim])->row_array();

        //jika usernya ada
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                //memverifikasi kesamaan password yang diinputkan dengan yang ada di database
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id_user' => $user['id_user'],
                        'nim' => $user['nim'],
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    redirect('Dashboard');
                    // if ($user['role_id'] == 1) {       //menentukan apakah dia super admin atau staff
                    //     redirect('admin');
                    // } else {
                    //     redirect('user');
                    // }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password salah! </div>');
                    redirect('auth');
                }
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Nim tidak terdaftar!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nim');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
            Anda sudah keluar!
          </div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }

    public function registrasi()  //controller registrasi
    {

        $this->form_validation->set_rules(
            'nim',
            'nim',
            'required|trim|is_natural',
            [
                'is_unique' => 'This Email has already registered!'
            ]
        );
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email has already registered!'
        ]); //

        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[confirmpassword]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek (min 5 karakter)!'
        ]);

        $this->form_validation->set_rules('confirmpassword', 'Konfirmasi password', 'required|trim|matches[password]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/footer');
        } else {
            $this->_registrasi();
        }
    }

    public function _registrasi()
    {
        if ($this->form_validation->run()) {

            $gender = $this->input->post('gender');

            if ($gender == 'laki-laki') {
                $profil = 'male_default.jpg';
            } else {
                $profil = 'female_default.jpg';
            }

            $data = [
                'nim'   => $this->input->post('nim'),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => $profil,
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'jeniskelamin' => $gender,
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Congrats, a new account has been created!
      </div>');
            redirect('auth/index');
        }
    }
}
