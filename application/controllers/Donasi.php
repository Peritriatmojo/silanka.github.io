<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {
    public function __construct ()
    {
        parent::__construct();
		$this->load->model('donasi_model');
    }

    public function index ()
    {
        $data['judul'] = 'Donasi Buku | Sistem Layanan Perpustakaan';

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
        $config['base_url'] = base_url('Donasi/index');
        $config['total_rows'] = $this->db->count_all('tdonasi'); // Hitung total data skor
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);

        $data['tdonasi'] = $this->db->get('tdonasi', $limit, $offset)->result_array();

        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('donasi', $data);

    }

    public function tambah_data ()
    {
        $tnama=htmlspecialchars($this->input->post('tnama',TRUE),ENT_QUOTES);
        $judul_buku=htmlspecialchars($this->input->post('judul_buku',TRUE),ENT_QUOTES);
        $tpengarang=htmlspecialchars(($this->input->post('tpengarang',TRUE)),ENT_QUOTES);
        $tahun_terbit=htmlspecialchars(($this->input->post('tahun_terbit',TRUE)),ENT_QUOTES);
        $talamat=htmlspecialchars(trim($this->input->post('talamat',TRUE)),ENT_QUOTES);
        $temail=htmlspecialchars(($this->input->post('temail',TRUE)),ENT_QUOTES);
        $nomor_hp=htmlspecialchars(($this->input->post('nomor_hp',TRUE)),ENT_QUOTES);
        $jumlah_donasi=htmlspecialchars(($this->input->post('jumlah_donasi',TRUE)),ENT_QUOTES);
        $tketerangan=htmlspecialchars(($this->input->post('tketerangan',TRUE)),ENT_QUOTES);
        $tdeskrip=htmlspecialchars(trim($this->input->post('tdeskrip',TRUE)),ENT_QUOTES);
        $this->donasi_model->tambah_data($tnama,$judul_buku,$tpengarang,$tahun_terbit,$talamat,$temail,$nomor_hp,$jumlah_donasi,$tketerangan,$tdeskrip);
        echo $this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima kasih telah mengirimkan donasi buku.</div>");
        redirect('kuis');
    }
}