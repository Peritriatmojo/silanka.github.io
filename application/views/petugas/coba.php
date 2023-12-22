$data['judul'] = 'Kuesioner Kepuasan Pelayanan';
       
        $query = $this->db->distinct()
                 ->select('kategori.*, pertanyaan.*')
                 ->from('tbl_kategori kategori')
                 ->join('tbl_pertanyaan pertanyaan', 'kategori.id_kategori = pertanyaan.id_kategori', 'left')
                 ->get();

        $tbl_kategori = $query->result_array();

        $data['tabel_pertanyaan'] = array();

        foreach ($tbl_kategori as $kategori) {
            $query = $this->db->select('*')
                            ->from('tbl_pertanyaan')
                            ->where('id_kategori', $kategori['id_kategori'])
                            ->get();

            $tabel_pertanyaan[$kategori['id_kategori']] = $query->result_array();
        }

        $data['tabel_pertanyaan'] = $tabel_pertanyaan;

        $data['tbl_kategori'] = $tbl_kategori;

        $this->load->view('kuis/index', $data);

        public function tambah_data()
    {
        $nama_penilai = htmlspecialchars($this->input->post('nama_penilai', TRUE), ENT_QUOTES);
        $pendidikan = htmlspecialchars($this->input->post('pendidikan', TRUE), ENT_QUOTES);
        $jenis_kelamin = htmlspecialchars($this->input->post('jenis_kelamin', TRUE), ENT_QUOTES);
        $tgl_penilaian = htmlspecialchars($this->input->post('tgl_penilaian', TRUE), ENT_QUOTES);
        $saran = htmlspecialchars($this->input->post('saran', TRUE), ENT_QUOTES);

        // Ambil data nilai dari POST
        $nilai = $this->input->post('nilai');

        // Inisialisasi variabel untuk menyimpan total skor dan total jawaban sangat baik
        $total_skor = 0;
        $total_sangat_baik = 0;

    // Inisialisasi variabel untuk menyimpan total skor
    $total_skor = 0;

    // Hitung total skor untuk setiap kategori pertanyaan
    foreach ($nilai as $index => $item) {
        // Konversi nilai menjadi tipe integer (asumsikan nilai valid antara 1 hingga 5)
        $item = (int)$item;

        // Asumsikan skala penilaian untuk pertanyaan ini adalah 20 (nilai maksimal 5 * 20 = 100)
        $skala_penilaian = 20;

        // Hitung penilaian pertanyaan dengan mengalikan nilai jawaban dengan skala penilaian
        $penilaian_pertanyaan = $item * $skala_penilaian;

        // Tambahkan penilaian_pertanyaan ke total_skor
        $total_skor += $penilaian_pertanyaan;
    }

    // Simpan data ke database menggunakan model M_kuis
    $this->M_kuis->simpan_kuis($nama_penilai, $pendidikan, $jenis_kelamin, $tgl_penilaian, $saran, $total_skor);

    // Set pesan flashdata dan redirect
    echo $this->session->set_flashdata('msg', "<div class='alert alert-info'>Terima kasih telah mengisi kuesioner kepuasan pelayanan website.</div>");
    redirect('kuis');
}