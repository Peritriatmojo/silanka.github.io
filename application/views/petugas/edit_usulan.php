
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title ; ?></h1>

                    <div class="row">

                            <?= $this->session->flashdata('message'); ?>
                            
                        <div class="col-lg-8">
                        <form method="post" action="<?= base_url('petugas/proses_edit_usulan'); ?>">
                            <input type="hidden" name="id" value="<?php echo $usulan['id']; ?>">
                                <div class="row">
                                    <div class="col">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $usulan['judul']; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="pengarang">Pengarang</label>
                                        <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $usulan['pengarang']; ?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                        <label for="tahun_terbit">Tahun Terbit</label>
                                        <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $usulan['tahun_terbit']; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="nama_pengusul">Nama Pengusul</label>
                                        <input type="text" class="form-control" id="nama_pengusul" name="nama_pengusul" value="<?= $usulan['nama_pengusul']; ?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                        <label for="nomor_kta">Nomor KTA</label>
                                        <input type="text" class="form-control" id="nomor_kta" name="nomor_kta" value="<?= $usulan['nomor_kta']; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $usulan['alamat']; ?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                        <label for="nomor_hp">Nomor HP</label>
                                        <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="<?= $usulan['nomor_hp']; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $usulan['email']; ?>">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                    <h4 style="font-size: 15px"> Isi tanggal pengusulan buku! </h4>
                                        <input type="date" class="form-control" id="tgl_usul" name="tgl_usul" value="<?= $usulan['tgl_usul']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                        <div class="col-sm-10">
                                            <a href="<?php echo base_url('petugas/data_usulan'); ?>" class="btn btn-warning">kembali</a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                <div>

            </div>
            <!-- End of Main Content -->

            

