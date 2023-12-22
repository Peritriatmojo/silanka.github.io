<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selengkapnya extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Halaman berfiki maju';
        $this->load->view('teknologi', $data);
    }
}