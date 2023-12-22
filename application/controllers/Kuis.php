<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuis extends CI_Controller {

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Petugas_model');
        $this->load->model('M_kuis');

        // is_logged_in();

    }

    public function index()
    {
        $data['judul'] = 'Kuesioner Kepuasan Pelayanan';

        $query = $this->db->select('kategori.kategori, pertanyaan.id_per, pertanyaan.pertanyaan')
                        ->from('tbl_kategori kategori')
                        ->join('tbl_pertanyaan pertanyaan', 'kategori.id_kategori = pertanyaan.id_kategori', 'left')
                        ->order_by('kategori.id_kategori', 'ASC')
                        ->order_by('pertanyaan.id_per', 'ASC')
                        ->get();

        $tbl_pertanyaan = $query->result_array();
        $tabel_pertanyaan = array();

        foreach ($tbl_pertanyaan as $row) {
            $kategori_nama = $row['kategori'];
            $id_per = $row['id_per'];
            $pertanyaan = $row['pertanyaan'];
            
            // Sertakan nilai "id_per" dalam array untuk digunakan pada view
            $tabel_pertanyaan[$kategori_nama][] = array('id_per' => $id_per, 'pertanyaan' => $pertanyaan);
        }

        $data['tabel_pertanyaan'] = $tabel_pertanyaan;

        $this->load->view('kuis/index', $data);
    }


    public function data_kuis()
    {
        
        $query = $this->db->distinct()
        ->select('kategori.*, pertanyaan.*')
        ->from('tbl_kategori kategori')
        ->join('tbl_pertanyaan pertanyaan', 'kategori.id_kategori = pertanyaan.id_kategori', 'left')
        ->get();

        $data['tbl_kategori'] = $query->result_array();

        $data['title'] = 'Data Kuis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



        // $data['tbl_kategori'] = $this->db->get('tbl_kategori')->result_array();
        $this->load->view('template/template2/header', $data);
        $this->load->view('template/template2/sidebar');
        $this->load->view('template/template2/topbar');
        $this->load->view('kuis/data_kuis', $data);
        $this->load->view('template/template2/footer');

    }

    public function proses_edit_pertanyaan()
    {

        $this->M_kuis->proses_edit_pertanyaan($id_per);
        $this->session->set_flashdata('msg', '
                <div class="alert alert-success" role="alert">
                    Anda berhasil mengedit data pertanyaan
                </div>');
        redirect('kuis/data_kuis');

    }


    public function tambah_kategori()
    {

        $kategori=htmlspecialchars($this->input->post('kategori',TRUE),ENT_QUOTES);
        $this->M_kuis->tambah_kategori($kategori);
        echo $this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima kasih telah mengirimkan donasi buku.</div>");
        redirect('kuis/data_kuis');

    }

    public function hapus_kategori($kategori)
    {

        $this->M_kuis->hapus_kategori($kategori);
        $this->session->set_flashdata('msg', '
                <div class="alert alert-success" role="alert">
                    Anda berhasil mengahapus kategori
                </div>');
        redirect('kuis/data_kuis');

    }

    public function hapus_pertanyaan($id_per)
    {

        $this->M_kuis->hapus_pertanyaan($id_per);
        $this->session->set_flashdata('msg', '
                <div class="alert alert-success" role="alert">
                    Anda berhasil mengahapus kategori
                </div>');
        redirect('kuis/data_kuis');

    }

    public function tambah_pertanyaan()
    {

        $id_kategori=htmlspecialchars($this->input->post('id_kategori',TRUE),ENT_QUOTES);
        $pertanyaan=htmlspecialchars($this->input->post('pertanyaan',TRUE),ENT_QUOTES);
        $this->M_kuis->tambah_pertanyaan($id_kategori,$pertanyaan);
        echo $this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima kasih telah mengirimkan donasi buku.</div>");
        redirect('kuis/data_kuis');

    }

    public function tambah_data()
    {
        $nama_penilai = htmlspecialchars($this->input->post('nama_penilai', TRUE), ENT_QUOTES);
        $pendidikan = htmlspecialchars($this->input->post('pendidikan', TRUE), ENT_QUOTES);
        $jenis_kelamin = htmlspecialchars($this->input->post('jenis_kelamin', TRUE), ENT_QUOTES);
        $tgl_penilaian = htmlspecialchars($this->input->post('tgl_penilaian', TRUE), ENT_QUOTES);
        $saran = htmlspecialchars($this->input->post('saran', TRUE), ENT_QUOTES);

        // Hapus htmlspecialchars() agar array 'nilai' tidak menjadi string
        $nilai = $this->input->post('nilai'); 

        // Menghitung total skor per pertanyaan
        $total_skor_per_pertanyaan = array();
        foreach ($_POST['nilai'] as $pertanyaan_id => $skor) {
            $total_skor_per_pertanyaan[] = intval($skor);
        }

        // Menghitung total skor keseluruhan
        $total_skor = array_sum($total_skor_per_pertanyaan);

        // Simpan data ke database menggunakan model M_kuis dan ambil hasil_kuis_id
        $hasil_kuis_id = $this->M_kuis->simpan_kuis($nama_penilai, $pendidikan, $jenis_kelamin, $tgl_penilaian, $saran, $total_skor);

        // Menghitung jumlah pemilihan setiap nilai sebelumnya
        $jumlah_nilai_sebelumnya = array(
            1 => 0,
            2 => 0,
            3 => 0,
            4 => 0,
            5 => 0
        );

        foreach ($_POST['nilai'] as $skor) {
            $skor_int = intval($skor);
            if ($skor_int >= 1 && $skor_int <= 5) {
                $jumlah_nilai_sebelumnya[$skor_int]++;
            }
        }

        // Update atau tambah data jumlah pemilihan setiap nilai ke dalam tabel "nilai_counts"
        foreach ($jumlah_nilai_sebelumnya as $nilai => $jumlah) {
            // Cek apakah data nilai sudah ada dalam tabel "nilai_counts"
            if ($this->M_kuis->nilai_exists($nilai)) {
                // Jika sudah ada, tambahkan jumlah pemilihan
                $this->M_kuis->update_nilai_count($nilai, $jumlah);
            } else {
                // Jika belum ada, tambahkan data baru
                $this->M_kuis->tambah_nilai_count($nilai, $jumlah);
            }
        }

        // Simpan data jawaban untuk setiap pertanyaan
        foreach ($_POST['nilai'] as $pertanyaan_id => $jawaban) {
            $this->M_kuis->simpan_jawaban($pertanyaan_id, $jawaban);
        }

        // Set pesan flashdata dan redirect
        $this->session->set_flashdata('msg', "<div class='alert alert-info'>Terima kasih telah mengisi kuesioner kepuasan pelayanan website.</div>");
        redirect('home');
    }


    public function data_skor()
    {
        $data['title'] = 'Data Skor';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $limit = 8; // Atur sesuai dengan jumlah data yang ingin ditampilkan per halaman
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
        $config['base_url'] = base_url('Kuis/data_skor');
        $config['total_rows'] = $this->db->count_all('skor'); // Hitung total data skor
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);

        $data['skor'] = $this->db->get('skor', $limit, $offset)->result_array();

        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('template/template2/header', $data);
        $this->load->view('template/template2/sidebar');
        $this->load->view('template/template2/topbar');
        $this->load->view('kuis/data_skor', $data);
        $this->load->view('template/template2/footer');
    }


    public function hapus_data($id_skor)
    {

        $this->M_kuis->hapus_skor($id_skor);
        $this->session->set_flashdata('msg', '
                <div class="alert alert-success" role="alert">
                    Anda berhasil mengahapus data skor
                </div>');
        redirect('kuis/data_skor');

    }

    





}