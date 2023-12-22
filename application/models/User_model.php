<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_model {
    public function getUserById($id)
    {

        return $this->db->get_where('user', ['id' => $id])->row_array();

    }

    public function updateDataUser()
    {

        $data = [
            "name" => $this->input->post('name', true),
        ];

        $this->db->where('id', $this->input->post('id', true));
        $this->db->update('user', $data);

    }
}