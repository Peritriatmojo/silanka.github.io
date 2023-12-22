<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asal extends CI_Controller
{
    public function index()
    {
        $this->load->view('asal/index');
    }
}