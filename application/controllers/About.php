<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index ()
    {

        $data['judul'] = 'Sejarah Perpustakaan | Sistem Layanan Perpustakaan';
        $this->load->view('header', $data);
        $this->load->view('about', $data);

    }
}