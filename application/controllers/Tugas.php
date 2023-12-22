<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

    public function index ()
    {

        $data['judul'] = 'Tugas Dan Funsi | Sistem Layanan Perpustakaan';
        $this->load->view('header', $data);
        $this->load->view('tugas', $data);

    }
}