<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('identity', 'Username or Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('template/auth_footer');
        } else {
            // Validation success
            $this->_login();
        }
    }

    private function _login()
    {
        $identity = $this->input->post('identity');
        $password = $this->input->post('password');

        // Check if the input is an email or name
        $this->db->where('email', $identity);
        $this->db->or_where('name', $identity);
        $user = $this->db->get('user')->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '
                        <div class="alert alert-danger" role="alert">
                            Password salah!
                        </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '
                    <div class="alert alert-danger" role="alert">
                        Akun belum diaktifkan!
                    </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">
                    Nama atau Email tidak terdaftar!
                </div>');
            redirect('auth');
        }
    }

    
    public function registration()
    {
        if($this->session->userdata('email')) {
            redirect('user');
        }
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Layanan User Registration';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('template/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
                Selamat! Akun Anda telah dibuat. Silakan login sekarang
            </div>');
            redirect('auth');
        }
    }



    public function logout()
    {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
                Anda telah keluar!
            </div>');
            redirect('auth');

    }

    public function blocked() 
    {

        $this->load->view('auth/blocked');

    }
}