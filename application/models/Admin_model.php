<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function hapus_menu($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('user_menu');

    } 

    // public function getSubMenu()
    // {

    //     $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
    //               FROM `user_sub_menu` JOIN `user_menu`
    //               ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
    //     ";

    //     return $this->db->query($query)->result_array();

    // }

    public function proses_edit_menu($id)
    {

        $data = [
            "menu" => $this->input->post('menu')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);

    }

    public function proses_edit_submenu($id)
    {

        $data = [
            "title" => $this->input->post('title'),
            "url" => $this->input->post('url'),
            "icon" => $this->input->post('icon'),
            "is_active" => $this->input->post('is_active')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu', $data);

    }

    public function hapus_sub_menu($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');

    } 

    // public function getPagination($limit, $start)
    // {

    //     return $this->db->get('user_sub_menu', $limit, $start)->result_array();

    // }

    // pagination sub menu
    public function getSubMenu()
    {
        $query = $this->db->select('user_sub_menu.*, user_menu.menu')
                          ->from('user_sub_menu')
                          ->join('user_menu', 'user_sub_menu.menu_id = user_menu.id')
                          ->get();
        return $query->result_array();
    }

    public function countSubMenus()
    {
        return $this->db->count_all('user_sub_menu');
    }

    public function getPaginationSubMenus($limit, $offset)
    {
        $query = $this->db->select('user_sub_menu.*, user_menu.menu')
                          ->from('user_sub_menu')
                          ->join('user_menu', 'user_sub_menu.menu_id = user_menu.id')
                          ->limit($limit, $offset)
                          ->get();
        return $query->result_array();
    }

    public function addSubMenu($data)
    {
        $this->db->insert('user_sub_menu', $data);
        return $this->db->insert_id();
    }

    public function getTotalDonasiBuku() {
        // Ganti 'donasi_buku' dengan nama tabel atau sumber data Anda
        $query = $this->db->query("SELECT COUNT(*) as total_donasi FROM tdonasi");
        $result = $query->row();

        return $result->total_donasi;
    }
    
    public function ambilUsulanBuku() {
        // Ganti 'donasi_buku' dengan nama tabel atau sumber data Anda
        $query = $this->db->query("SELECT COUNT(*) as total_usulan FROM usulan");
        $result = $query->row();

        return $result->total_usulan;
    }

    public function ambilPenilaian() {
        // Ganti 'donasi_buku' dengan nama tabel atau sumber data Anda
        $query = $this->db->query("SELECT COUNT(*) as total_penilaian FROM skor");
        $result = $query->row();

        return $result->total_penilaian;
    }




}
