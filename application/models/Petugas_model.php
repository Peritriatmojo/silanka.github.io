<?php

class Petugas_model extends CI_model {

    

    public function hapus_donasi($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('tdonasi');

    }

    public function ambil_id_donasi($id)
    {

        return $this->db->get_where('tdonasi', ['id' => $id])->row_array();

    }

    public function proses_edit_donasi($id) 
    {

        $data = [
            "tnama" => $this->input->post('tnama'),
            "judul_buku" => $this->input->post('judul_buku'),
            "tpengarang" => $this->input->post('tpengarang'),
            "tahun_terbit" => $this->input->post('tahun_terbit'),
            "talamat" => $this->input->post('talamat'),
            "temail" => $this->input->post('temail'),
            "nomor_hp" => $this->input->post('nomor_hp'),
            "jumlah_donasi" => $this->input->post('jumlah_donasi'),
            "tketerangan" => $this->input->post('tketerangan'),
            "tdeskrip" => $this->input->post('tdeskrip')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tdonasi', $data);

    }

    public function hapus_usulan($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('usulan');

    }

    public function ambil_id_usulan($id)
    {

        return $this->db->get_where('usulan', ['id' => $id])->row_array();

    }

    public function proses_edit_usulan($id)
    {

        $data = [
            "judul" => $this->input->post('judul'),
            "pengarang" => $this->input->post('pengarang'),
            "tahun_terbit" => $this->input->post('tahun_terbit'),
            "nama_pengusul" => $this->input->post('nama_pengusul'),
            "tgl_usul" => $this->input->post('tgl_usul'),
            "nomor_kta" => $this->input->post('nomor_kta'),
            "alamat" => $this->input->post('alamat'),
            "nomor_hp" => $this->input->post('nomor_hp'),
            "email" => $this->input->post('email')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('usulan', $data);

    }

    public function getSubMenu()
    {

        $query = "SELECT `user_sub_menu`.*, `user_menu`. `menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                
                ";

        return $this->db->query($query)->result_array();

    }

    public function hapus_submenu($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');

    }

    // public function getAllUsulan() {
    //     // Ambil semua data usulan
    //     $query = $this->db->get('usulan');
    //     return $query->result_array();
    // }

    // public function getDonasiByDateRange($start_date, $end_date) {
    //     // Ambil data usulan berdasarkan range tanggal
    //     $this->db->where('tketerangan >=', $start_date);
    //     $this->db->where('tketerangan <=', $end_date);
    //     $query = $this->db->get('tdonasi');
    //     return $query->result_array();
    // }

    // public function getAllDonasi() {
    //     // Ambil semua data usulan
    //     $query = $this->db->get('tdonasi');
    //     return $query->result_array();
    // }

    // untuk relasi dengan pagination
    public function getUsulanByDateRangeWithLimit($start_date, $end_date, $limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('usulan');
        $this->db->where('tgl_usul >=', $start_date);
        $this->db->where('tgl_usul <=', $end_date);
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAllUsulanWithLimit($limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('usulan');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getTotalUsulanByDateRange($start_date, $end_date)
    {
        $this->db->from('usulan');
        $this->db->where('tgl_usul >=', $start_date);
        $this->db->where('tgl_usul <=', $end_date);
        return $this->db->count_all_results();
    }

    public function getTotalUsulan()
    {
        $this->db->from('usulan');
        return $this->db->count_all_results();
    }

    // untuk relasi dengan pagination
    public function getDonasiByDateRangeWithLimit($start_date, $end_date, $limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('tdonasi');
        $this->db->where('tketerangan >=', $start_date);
        $this->db->where('tketerangan <=', $end_date);
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAllDonasiWithLimit($limit, $offset)
    {
        $this->db->select('*');
        $this->db->from('tdonasi');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getTotalDonasiByDateRange($start_date, $end_date)
    {
        $this->db->from('tdonasi');
        $this->db->where('tketerangan >=', $start_date);
        $this->db->where('tketerangan <=', $end_date);
        return $this->db->count_all_results();
    }

    public function getTotalDonasi()
    {
        $this->db->from('tdonasi');
        return $this->db->count_all_results();
    }

}