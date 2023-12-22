<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Petugas_model');
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';

        // is_logged_in();

    }


    public function index()
    {

        $this->load->model('Petugas_model');

        $data['title'] = 'Data Donasi Buku';
        $identity = $this->session->userdata('email'); // Mengambil email dari session
        $identity_field = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $data['user'] = $this->db->get_where('user', [$identity_field => $identity])->row_array();

        $limit = 8; // Atur sesuai dengan jumlah data yang ingin ditampilkan per halaman
        $offset = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

        if ($this->input->post('start_date') && $this->input->post('end_date')) {
            $start_date = $this->input->post('start_date');
            $end_date = $this->input->post('end_date');

            // Panggil model untuk mengambil data usulan berdasarkan range tanggal dengan limit dan offset
            $data['donasi'] = $this->Petugas_model->getDonasiByDateRangeWithLimit($start_date, $end_date, $limit, $offset);

            // Hitung total data usulan berdasarkan range tanggal
            $total_rows = $this->Petugas_model->getTotalDonasiByDateRange($start_date, $end_date);
        } else {
            // Jika tidak ada input tanggal, ambil semua data usulan dengan limit dan offset
            $data['donasi'] = $this->Petugas_model->getAllDonasiWithLimit($limit, $offset);

            // Hitung total data usulan tanpa memperhatikan tanggal
            $total_rows = $this->Petugas_model->getTotalDonasi();
        }


        // Tambahkan $offset ke dalam data yang akan dikirimkan ke tampilan
        $data['offset'] = $offset;

        // styling pagination
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
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
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        // Tambahkan library pagination ke dalam data
        $this->load->library('pagination');
        $config['base_url'] = base_url('petugas/index');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        

        // $this->form_validation->set_rules('nama_buku', 'Nama Buku', 'required');
        // $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        // $this->form_validation->set_rules('talamat', 'Alamat', 'required');
        // $this->form_validation->set_rules('Jumlah_donasi', 'Jumlah Donasi', 'required');

        $this->load->view('template/template2/header', $data);
        $this->load->view('template/template2/sidebar');
        $this->load->view('template/template2/topbar');
        $this->load->view('petugas/index', $data);
        $this->load->view('template/template2/footer');

    }

    public function hapus_donasi($id)
    {
        $this->Petugas_model->hapus_donasi($id);
        $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                    Anda berhasil mengahapus data donasi buku
                </div>');
        redirect('petugas');

    }

    public function edit_donasi($id)
    {

        $data['title'] = 'Edit Donasi';
        $identity = $this->session->userdata('email'); // Mengambil email dari session
        $identity_field = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $data['user'] = $this->db->get_where('user', [$identity_field => $identity])->row_array();

        $data['tdonasi'] = $this->Petugas_model->ambil_id_donasi($id);
        
        $this->load->view('template/template2/header', $data);
        $this->load->view('template/template2/sidebar', $data);
        $this->load->view('template/template2/topbar', $data);
        $this->load->view('petugas/edit_donasi', $data);
        $this->load->view('template/template2/footer');

    }

    public function proses_edit_donasi()
    {

        $this->Petugas_model->proses_edit_donasi($id);
        $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                    Anda berhasil mengedit data donasi buku
                </div>');
        redirect('petugas');

    }

    public function data_usulan()
    {
        $this->load->model('Petugas_model');

        $data['title'] = 'Data Usulan Buku';
        $identity = $this->session->userdata('email'); // Mengambil email dari session
        $identity_field = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $data['user'] = $this->db->get_where('user', [$identity_field => $identity])->row_array();

        $limit = 8; // Atur sesuai dengan jumlah data yang ingin ditampilkan per halaman
        $offset = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

        if ($this->input->post('start_date') && $this->input->post('end_date')) {
            $start_date = $this->input->post('start_date');
            $end_date = $this->input->post('end_date');

            // Panggil model untuk mengambil data usulan berdasarkan range tanggal dengan limit dan offset
            $data['usulan'] = $this->Petugas_model->getUsulanByDateRangeWithLimit($start_date, $end_date, $limit, $offset);

            // Hitung total data usulan berdasarkan range tanggal
            $total_rows = $this->Petugas_model->getTotalUsulanByDateRange($start_date, $end_date);
        } else {
            // Jika tidak ada input tanggal, ambil semua data usulan dengan limit dan offset
            $data['usulan'] = $this->Petugas_model->getAllUsulanWithLimit($limit, $offset);

            // Hitung total data usulan tanpa memperhatikan tanggal
            $total_rows = $this->Petugas_model->getTotalUsulan();
        }


        // Tambahkan $offset ke dalam data yang akan dikirimkan ke tampilan
        $data['offset'] = $offset;

        // styling pagination
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
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
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');


        // Tambahkan library pagination ke dalam data
        $this->load->library('pagination');
        $config['base_url'] = base_url('petugas/data_usulan');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('template/template2/header', $data);
        $this->load->view('template/template2/sidebar');
        $this->load->view('template/template2/topbar');
        $this->load->view('petugas/data_usulan', $data);
        $this->load->view('template/template2/footer');
    }

    public function hapus_usulan($id)
    {

        $this->Petugas_model->hapus_usulan($id);
        $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                    Anda berhasil mengahapus data usulan buku
                </div>');
        redirect('petugas/data_usulan');

    }

    public function edit_usulan($id)
    {

        $data['title'] = 'Edit Usulan';
        $identity = $this->session->userdata('email'); // Mengambil email dari session
        $identity_field = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $data['user'] = $this->db->get_where('user', [$identity_field => $identity])->row_array();

        $data['usulan'] = $this->Petugas_model->ambil_id_usulan($id);
        
        $this->load->view('template/template2/header', $data);
        $this->load->view('template/template2/sidebar', $data);
        $this->load->view('template/template2/topbar', $data);
        $this->load->view('petugas/edit_usulan', $data);
        $this->load->view('template/template2/footer');

    }

    public function proses_edit_usulan()
    {

        $this->Petugas_model->proses_edit_usulan($id);
        $this->session->set_flashdata('message', '
                <div class="alert alert-success" role="alert">
                    Anda berhasil mengedit data usulan buku
                </div>');
        redirect('petugas/data_usulan');

    }


    public function cetak()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        $data['usulan'] = $this->db->query("SELECT * FROM usulan ORDER BY id DESC")->result();
        
        // title dari pdf
        $data['title'] = 'Laporan Data Usulan Buku';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Usulan Buku';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('laporan/laporan_view',$data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

    public function cetak_donasi()
    {
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

        $data['donasi'] = $this->db->query("SELECT * FROM tdonasi ORDER BY id DESC")->result();
        
        // title dari pdf
        $data['title'] = 'Laporan Data Donasi Buku';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'Laporan Donasi Buku';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('laporan/laporan_donasi',$data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

     

    

    




}