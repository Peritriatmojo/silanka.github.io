<?php

class Usulan_model extends CI_Model {

    public function tambah_data ($judul,$pengarang,$tahun_terbit,$nama_pengusul,$tgl_usul,$nomor_kta,$alamat,$nomor_hp,$email)
    {
        
        $hsl = $this->db->query("INSERT  INTO usulan(judul,pengarang,tahun_terbit,nama_pengusul,tgl_usul,nomor_kta,alamat,nomor_hp,email) VALUES ('$judul','$pengarang','$tahun_terbit','$nama_pengusul','$tgl_usul','$nomor_kta','$alamat','$nomor_hp','$email')");
        return $hsl;

    }

    public function selectAll()
    {
        $this->db->order_by("judul","desc"); 
        return $this->db->get('usulan')->result();
    }

}