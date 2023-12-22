<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
    
    public function index ()
    {
        $data['judul'] = 'Halaman Layanan | Silanka Arpusda';
        $this->load->view('header', $data);
        $this->load->view('layanan/index', $data);
    }



}