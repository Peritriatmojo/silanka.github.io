<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct ()
    {
        parent::__construct();

        is_logged_in();
    }
    

    public function index()
    {

        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/template2/header', $data);
        $this->load->view('template/template2/sidebar', $data);
        $this->load->view('template/template2/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/template2/footer');

    }

    public function edit()
    {

        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Nama', 'required|trim');

        if($this->form_validation->run() == false) {
            $this->load->view('template/template2/header', $data);
            $this->load->view('template/template2/sidebar', $data);
            $this->load->view('template/template2/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('template/template2/footer');

        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar untuk profile
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|img';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/images/profile/';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/images/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);

                } else {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-danger" role="alert">'.$this->upload->display_errors().
                    '</div>');
                    redirect('user');
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
                Profile anda behasil di update
            </div>');
            redirect('user');
        }



    }





}