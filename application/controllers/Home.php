<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index ()
    {
        $data['judul'] = 'Halaman Home | Sistem Layanan Perpustakaan';
        $this->load->view('header', $data);
        $this->load->view('home', $data);
    }
}