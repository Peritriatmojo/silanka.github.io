<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {
    public function __construct ()
    {
        parent::__construct();
        $this->load->model('usulan_model');
    }

    public function index ()
    {
        $data['judul'] = 'Usulan Buku | Sistem Layanan Perpustakaan';

        $limit = 5; // Atur sesuai dengan jumlah data yang ingin ditampilkan per halaman
        $offset = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

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

        $this->load->library('pagination');
        $config['base_url'] = base_url('usulan/index');
        $config['total_rows'] = $this->db->count_all('usulan'); // Hitung total data skor
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);

        $data['usulan'] = $this->db->get('usulan', $limit, $offset)->result_array();

        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('usulan', $data); 
    }

    public function tambah_data ()
    {
        $judul=htmlspecialchars($this->input->post('judul',TRUE),ENT_QUOTES);
        $pengarang=htmlspecialchars($this->input->post('pengarang',TRUE),ENT_QUOTES);
        $tahun_terbit=htmlspecialchars($this->input->post('tahun_terbit',TRUE),ENT_QUOTES);
        $nama_pengusul=htmlspecialchars($this->input->post('nama_pengusul',TRUE),ENT_QUOTES);
        $tgl_usul=htmlspecialchars($this->input->post('tgl_usul',TRUE),ENT_QUOTES);
        $nomor_kta=htmlspecialchars($this->input->post('nomor_kta',TRUE),ENT_QUOTES);
        $alamat=htmlspecialchars($this->input->post('alamat',TRUE),ENT_QUOTES);
        $nomor_hp=htmlspecialchars($this->input->post('nomor_hp',TRUE),ENT_QUOTES);
        $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $this->usulan_model->tambah_data($judul,$pengarang,$tahun_terbit,$nama_pengusul,$tgl_usul,$nomor_kta,$alamat,$nomor_hp,$email);
        echo $this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima kasih telah mengusulkan buku.</div>");
        redirect('usulan');
    }
}