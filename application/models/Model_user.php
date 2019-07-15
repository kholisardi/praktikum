<?php

class Model_user extends CI_Model
{
    public function edit_profile()
    {
        $data['user'] = $this->db->get_where('user', ['nim' =>
        $this->session->userdata('nim')])->row_array();

        $nim = $this->input->post('nim');
        $name = $this->input->post('name');
        $email = $this->input->post('email');

        // jika ada gambar yang akan di update
        $image = $_FILES['image']['name'];

        if ($image) {
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size']     = '1024';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $old_image = $data['user']['image'];

                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image);
                }

                $newImage = $this->upload->data('file_name');
                $this->db->set('image', $newImage);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('name', $name);
        $this->db->set('email', $email);
        $this->db->where('nim', $nim);
        $this->db->update('user');
    }
}
