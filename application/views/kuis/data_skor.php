
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
        
            <div class="card-body">
                <div class="table-responsive">

                
                </div>
                <div class="col-lg-4 row">
                <h1 class="" style="font-size: 24px; color: #000;">Kriteri Skor</h1>
                <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="">Kriteria</th>
                            <th>Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Sangat Kurang</td>
                        <td>0-8</td>
                        </tr>
                        <th scope="row">2</th>
                        <td>Kurang</td>
                        <td>9-16</td>
                        </tr>
                        <th scope="row">3</th>
                        <td>Cukup</td>
                        <td>16-24</td>
                        </tr>
                        <th scope="row">4</th>
                        <td>Baik</td>
                        <td>24-32</td>
                        </tr>
                        <th scope="row">5</th>
                        <td>Sangat Baik</td>
                        <td>32-40</td>
                        </tr>
                        
                    </tbody>
                </table>
                </div>
                
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%" class="text-center">Nama</th>
                                <th>Pendidikan</th>
                                <th>Jenis Kelamin</th>
                                <th>Tgl Penilaian</th>
                                <th class="text-center">Saran</th>
                                <th>Skor</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php

                        
                        foreach ($skor as $s) {
                            ?>
                            <tr>
                                <td align="center"><?= ++$offset; ?></td>
                                <td><?= $s['nama_penilai']; ?></td>
                                <td><?= $s['pendidikan']; ?></td>
                                <td><?= $s['jenis_kelamin']; ?></td>
                                <td><?= $s['tgl_penilaian']; ?></td>
                                <td><?= $s['saran']; ?></td>
                                <td><?= $s['nilai']; ?></td>
                                <td>
                                <a href="<?php echo base_url() ?>kuis/hapus_data/<?php echo $s['id_skor']; ?>" class="badge badge-danger" onclick="return confirm('yakin ingin meghapus data ini?');">hapus</a>
                                </td>
                            </tr>
                            <?php
                    }
                    ?>
                        </tbody>
                    </table>
                    
                </div>
                <div class="col-md-12 ml-2">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-left">
                            <?= $pagination; ?>
                        </ul>
                    </nav>
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
        <button type="submit" class="btn btn-primary">Tambah</button>
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
        <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
    </form>
    </div>
</div>
</div>
<!-- end modal pertanyaan -->

<!-- start modal edit pertanyaan -->
<div class="modal fade" id="editPertanyaan" tabindex="-1" role="dialog" aria-labelledby="editPertanyaanLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="editPertanyaanLabel">Edit Pertanyaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form method="post" action="<?= base_url('kuis/proses_edit_pertanyaan'); ?>">
    <div class="modal-body">

        <div class="form-group">
            <label for="id_kategori">ID Kategori</label>
            <input type="text" class="form-control" id="id_kategori" name="id_kategori" value="">
        </div>
        <div class="form-group">
            <label for="pertanyaan">Pertanyaan</label>
            <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" value="">
        </div>
                        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
    </div>
</div>
</div>
<!-- end modal pertanyaan -->
                <!-- </div>
                </div> -->

</div>
