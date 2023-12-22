
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title ; ?></h1>
                    
                    <!-- DataTales Example -->
                    
                    <div class="row">

                            <?= $this->session->flashdata('message'); ?>
                            
                        <div class="col-lg-8">
                            <form method="post" action="<?= base_url('petugas/proses_edit_donasi'); ?>">
                            <input type="hidden" name="id" value="<?php echo $tdonasi['id']; ?>">
                                <div class="row">
                                    <div class="col">
                                        <label for="tnama">Nama Donatur</label>
                                        <input type="text" class="form-control" id="tnama" name="tnama" value="<?= $tdonasi['tnama']; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="judul_buku">Judul Buku</label>
                                        <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $tdonasi['judul_buku']; ?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                        <label for="tpengarang">Pengarang</label>
                                        <input type="text" class="form-control" id="tpengarang" name="tpengarang" value="<?= $tdonasi['tpengarang']; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="tahun_terbit">Penerbit, Tahun Terbit</label>
                                        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $tdonasi['tahun_terbit']; ?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                        <label for="talamat">Alamat</label>
                                        <input type="text" class="form-control" id="talamat" name="talamat" value="<?= $tdonasi['talamat']; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="temail">Email</label>
                                        <input type="text" class="form-control" id="temail" name="temail" value="<?= $tdonasi['temail']; ?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                        <label for="nomor_hp">Nomor HP</label>
                                        <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="<?= $tdonasi['nomor_hp']; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="jumlah_donasi">Jumlah Donasi</label>
                                        <input type="number" class="form-control" id="jumlah_donasi" name="jumlah_donasi" value="<?= $tdonasi['jumlah_donasi']; ?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                    <h4 style="font-size: 15px"> Isi tanggal untuk pemberian donasi buku! </h4>
                                        <input type="date" class="form-control" id="tketerangan" name="tketerangan" value="<?= $tdonasi['tketerangan']; ?>">
                                    </div>
                                    <div class="col">
                                    <h4 style="font-size: 15px"> Isi keterangan untuk donasi buku! </h4>
                                        <input type="text" class="form-control" id="tdeskrip" name="tdeskrip" value="<?= $tdonasi['tdeskrip']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                        <div class="col-sm-10">
                                            <a href="<?php echo base_url('petugas'); ?>" class="btn btn-warning">kembali</a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            

