
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php echo $this->session->flashdata('msg');?>

                        <div class="card-header py-3">
                            <a href="" class="btn btn-info" data-toggle="modal" data-target="#newKategori"><i class="fas fa-solid fa-plus"> Kategori</i></a>
                            <a href="" class="btn btn-info" data-toggle="modal" data-target="#newPertanyaan"><i class="fas fa-solid fa-plus"> Pertanyaan</i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                            
                            </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width="30%">Kategori</th>
                                            <th>Pertanyaan</th>
                                            <th width="10%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                    $no = 1;
                                    
                                    foreach ($tbl_kategori as $pt) {
                                        ?>
                                        <tr>
                                            <td align="center"><?= $no ?></td>
                                            <td><?= $pt['kategori']; ?></td>
                                            <td><?= $pt['pertanyaan']; ?></td>
                                            <td>
                                            <a href="" class="badge badge-success" data-toggle="modal" data-target="#editPertanyaan<?= $pt['id_per']; ?>">edit</a>
                                            <a href="<?php echo base_url() ?>kuis/hapus_kategori/<?php echo $pt['id_per']; ?>" class="badge badge-danger" onclick="return confirm('yakin ingin meghapus data ini?');">hapus</a>
                                            </td>
                                        </tr>
                                        <?php
                                       $no++;
                                }
                                ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- modal tambah kategori -->
            <div class="modal fade" id="newKategori" tabindex="-1" role="dialog" aria-labelledby="newKategoriLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newKategoriLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('kuis/tambah_kategori'); ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori">
                    </div>
                                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
                </div>
            </div>
            </div>
            <!-- end modal kategori -->

            <!-- start modal pertanyaan -->
            <div class="modal fade" id="newPertanyaan" tabindex="-1" role="dialog" aria-labelledby="newPertanyaanLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newPertanyaanLabel">Tambah Pertanyaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('kuis/tambah_pertanyaan'); ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="id_kategori">ID Kategori</label>
                        <input type="text" class="form-control" id="id_kategori" name="id_kategori">
                    </div>
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input type="text" class="form-control" id="pertanyaan" name="pertanyaan">
                    </div>
                                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
                </div>
            </div>
            </div>
            <!-- end modal pertanyaan -->

            <!-- start modal edit pertanyaan -->
            <?php foreach($tbl_kategori as $pt) : ?>
            <div class="modal fade" id="editPertanyaan<?= $pt['id_per']; ?>" tabindex="-1" role="dialog" aria-labelledby="editPertanyaanLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPertanyaanLabel">Edit Pertanyaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('kuis/proses_edit_pertanyaan'); ?>">
                <input type="hidden" name="id_per" value="<?= $pt['id_per']; ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="id_kategori">ID Kategori</label>
                        <input type="text" class="form-control" id="id_kategori" name="id_kategori" value="<?= $pt['id_kategori']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" value="<?= $pt['pertanyaan']; ?>">
                    </div>
                                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
                </div>
            </div>
            </div>
            <?php endforeach; ?>
            <!-- end modal pertanyaan -->
                            <!-- </div>
                            </div> -->

</div>
