<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {

        parent::__construct();
        $this->load->model('Admin_model');
        is_logged_in();

    }

    public function index()
    {

        $data['title'] = 'Dashboard';
        $identity = $this->session->userdata('email'); // Mengambil email dari session
        $identity_field = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $data['user'] = $this->db->get_where('user', [$identity_field => $identity])->row_array();


        // method untuk mengambil jumlah donasi buku
        $donasi_buku = $this->Admin_model->getTotalDonasiBuku();
        $data['donasi_buku'] = $donasi_buku;

        // method untuk mengambil jumlah usulan buku
        $usulan_buku = $this->Admin_model->ambilUsulanBuku();
        $data['usulan_buku'] = $usulan_buku;

        // method untuk mengambil jumlah penelaian
        $penilaian = $this->Admin_model->ambilPenilaian();
        $data['penilaian'] = $penilaian;

        $this->load->view('template/template2/header', $data);
        $this->load->view('template/template2/sidebar');
        $this->load->view('template/template2/topbar');
        $this->load->view('admin/index', $data);
        $this->load->view('template/template2/footer');

    }

    public function menu_management()
    {

        $data['title'] = 'Menu Management';
        $identity = $this->session->userdata('email'); // Mengambil email dari session
        $identity_field = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $data['user'] = $this->db->get_where('user', [$identity_field => $identity])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        // $data['access'] = $this->db->get('user_access_menu')->result_array();


        $this->form_validation->set_rules('menu', 'Menu', 'required');
        // $this->form_validation->set_rules('role_id', 'Role ID', 'required');
        // $this->form_validation->set_rules('menu_id', 'Menu ID', 'required');

        if($this->form_validation->run() == false) {
            $this->load->view('template/template2/header', $data);
            $this->load->view('template/template2/sidebar');
            $this->load->view('template/template2/topbar');
            $this->load->view('admin/menu_management', $data);
            $this->load->view('template/template2/footer');

        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                    Menu berhasil ditambahkan
                </div>');
                redirect('admin/menu_management');

            
        }
        



    }


    public function hapus_menu($id)
    {

        $this->Admin_model->hapus_menu($id);
        $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                    Anda berhasil mengahapus data menu
                </div>');
        redirect('admin/menu_management');

    }

    public function sub_menu()
    {
        $data['title'] = 'Sub Menu Management';
        $identity = $this->session->userdata('email'); // Mengambil email dari session
        $identity_field = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $data['user'] = $this->db->get_where('user', [$identity_field => $identity])->row_array();

        $this->load->model('Admin_model'); // Load the Admin_model if not autoloaded

        // Konfigurasi pagination
        $this->load->library('pagination');
        $config['base_url'] = site_url('admin/sub_menu'); // Ganti URL sesuai dengan alamat halaman sub_menu
        $config['total_rows'] = $this->Admin_model->countSubMenus(); // Jumlah total data sub-menu
        $config['per_page'] = 5; // Jumlah data per halaman
        $config['uri_segment'] = 3; // Nomor segmen URI yang digunakan untuk menyatakan halaman

        // Styling untuk pagination
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'next';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
            
        $config['prev_link'] = 'previous';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0; // Mendapatkan nomor halaman dari URI segment ke-3
        $data['submenu'] = $this->Admin_model->getPaginationSubMenus($config['per_page'], $page); // Mengambil data sub-menu dengan pagination
        $data['pagination'] = $this->pagination->create_links(); 

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/template2/header', $data);
            $this->load->view('template/template2/sidebar');
            $this->load->view('template/template2/topbar');
            $this->load->view('admin/sub_menu', $data);
            $this->load->view('template/template2/footer');
        } else {
            $sub_menu_data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->Admin_model->addSubMenu($sub_menu_data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub menu berhasil ditambahkan</div>');
            redirect('admin/sub_menu');
        }
    }



    public function proses_edit_menu()
    {

        $this->Admin_model->proses_edit_menu($id);
            $this->session->set_flashdata('message', '
                    <div class="alert alert-success" role="alert">
                        Anda berhasil mengedit nama menu
                    </div>');
            redirect('admin/menu_management');

    }

    public function proses_edit_submenu()
    {

        $this->Admin_model->proses_edit_submenu($id);
            $this->session->set_flashdata('message', '
                    <div class="alert alert-success" role="alert">
                        Anda berhasil mengedit data submenu
                    </div>');
            redirect('admin/sub_menu');

    }

    public function hapus_sub_menu($id)
    {

        $this->Admin_model->hapus_sub_menu($id);
        $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                    Anda berhasil mengahapus data sub menu
                </div>');
        redirect('admin/sub_menu');

    }


    


    

}