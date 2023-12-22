<?php

class Donasi_model extends CI_Model {

    public function tambah_data ($tnama,$judul_buku,$tpengarang,$tahun_terbit,$talamat,$temail,$nomor_hp,$jumlah_donasi,$tketerangan,$tdeskrip)
    {
        
        $hsl = $this->db->query("INSERT  INTO tdonasi(tnama,judul_buku,tpengarang,tahun_terbit,talamat,temail,nomor_hp,jumlah_donasi,tketerangan,tdeskrip) VALUES ('$tnama','$judul_buku','$tpengarang','$tahun_terbit','$talamat','$temail','$nomor_hp','$jumlah_donasi','$tketerangan','$tdeskrip')");
        return $hsl;

    }

    public function selectAll()
   {
        $this->db->order_by("tnama","desc"); 
        return $this->db->get('tdonasi')->result();
   }
}