<?php

class M_kuis extends CI_Model {



    

    // public function aspek()
    // {

    //     $this->db->select('*');
    //     $this->db->from('tbl_kategori');
    //     $this->db->join('tbl_pertanyaan', 'tbl_pertanyaan.id_kategori = tbl_kategori.id_kategori');

    //     return $this->db->get('');

    // }



    public function tambah_kategori($kategori)
    {

        $hsl = $this->db->query("INSERT INTO tbl_kategori(kategori) VALUE ('$kategori')");
        return $hsl;

    }

    public function hapus_kategori($kategori)
    {

        $this->db->where('kategori', $kategori);
        $this->db->delete('tbl_kategori');

    }

    public function hapus_pertanyaan($id_per)
    {

        $this->db->where('id_per', $id_per);
        $this->db->delete('tbl_pertanyaan');

    }

    public function hapus_skor($id_skor)
    {

        $this->db->where('id_skor', $id_skor);
        $this->db->delete('skor');

    }

    public function tambah_pertanyaan($id_kategori,$pertanyaan)
    {

        $hsl = $this->db->query("INSERT INTO tbl_pertanyaan(id_kategori,pertanyaan) VALUE ('$id_kategori','$pertanyaan')");
        return $hsl;

    }

    public function tambah_data($nama_penilai,$pendidikan,$jenis_kelamin,$tgl_penilaian,$saran,$nilai)
    {

        $hsl - $this->db->query("INSERT INTO skor(nama_penilai,pendidikan,jenis_kelamin,tgl_penilaian,saran,nilai) VALUE ('$nama_penilai','$pendidikan','$jenis_kelamin','$tgl_penilaian','$saran','$nilai')");
        return $hsl;

    }
    public function proses_edit_pertanyaan($id_per)
    {

        $data = [
            "id_kategori" => $this->input->post('id_kategori'),
            "pertanyaan" => $this->input->post('pertanyaan')
        ];

        $this->db->where('id_per', $this->input->post('id_per'));
        $this->db->update('tbl_pertanyaan', $data);

    }

    public function simpan_kuis($nama_penilai, $pendidikan, $jenis_kelamin, $tgl_penilaian, $saran, $total_skor)
{
    // Simpan data penilaian ke tabel 'skor'
    $data_penilaian = array(
        'nama_penilai' => $nama_penilai,
        'pendidikan' => $pendidikan,
        'jenis_kelamin' => $jenis_kelamin,
        'tgl_penilaian' => $tgl_penilaian,
        'saran' => $saran,
        'nilai' => $total_skor  // Simpan total skor di kolom 'nilai'
    );
    $this->db->insert('skor', $data_penilaian);
}

 // Fungsi untuk menambah data nilai_count jika belum ada
    public function tambah_nilai_count($nilai, $jumlah) {
        $data = array(
            'nilai' => $nilai,
            'jumlah' => $jumlah
        );
        $this->db->insert('nilai_counts', $data);
    }

    // Fungsi untuk mengupdate jumlah nilai_count
    public function update_nilai_count($nilai, $jumlah) {
        $this->db->where('nilai', $nilai);
        $this->db->set('jumlah', 'jumlah + ' . $jumlah, false);
        $this->db->update('nilai_counts');
    }

    // Fungsi untuk mengecek apakah data nilai sudah ada dalam tabel nilai_counts
    public function nilai_exists($nilai) {
        $this->db->where('nilai', $nilai);
        $query = $this->db->get('nilai_counts');
        return $query->num_rows() > 0;
    }

    public function simpan_jawaban( $pertanyaan_id, $jawaban)
{
    $data = array(
        // 'hasil_kuis_id' => $hasil_kuis_id,
        'pertanyaan_id' => $pertanyaan_id,
        'jawaban' => $jawaban
    );

    $this->db->insert('tbl_jawaban', $data);
}






}