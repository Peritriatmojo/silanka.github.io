<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller {

    public function index ()
    {

        $data['judul'] = 'Visi Dan Misi | Sistem Layanan Perpstakaan';
        $this->load->view('header', $data);
        $this->load->view('visi', $data);

    }
}