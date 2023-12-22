
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
        <div class="row">
                        <div class="col-lg">
                            <?php if(validation_errors()) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php endif; ?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">

        <?php echo $this->session->flashdata('message');?>

        <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <a href="<?= base_url('petugas/cetak'); ?>" target="_blank" class="btn btn-info"><i class="fas fa-solid fa-print"> Cetak Data</i></a>
                            </div>
                            <form method="post" action="<?php echo base_url('Petugas/data_usulan'); ?>" class="form-inline ml-auto">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="start_date" id="start_date"  required/>
                                    <span class="ml-2 mr-2" style="font-size: 30px;">=</span>
                                    <input type="date" class="form-control" name="end_date" id="end_date"  required/>
                                </div>
                                <input type="submit" class="btn btn-primary ml-2" value="Cari">
                            </form>
                        </div>
                    </div>
                </div>
            
            <div class="card-body">
                <div class="table-responsive">

                
                </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="25%">Judul</th>
                                <th>Pengarang</th>
                                <th>Nama Pengusul</th>
                                <th>Tanggal</th>
                                <th>Nomor KTA</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        
                            <?php foreach($usulan as $u) : ?>
                            <tr>
                            <th scope="row"><?= ++$offset; ?></th>
                            <td><?= $u['judul']; ?></td>
                            <td><?= $u['pengarang']; ?></td>
                            <td><?= $u['nama_pengusul']; ?></td>
                            <td><?= $u['tgl_usul']; ?></td>
                            <td><?= $u['nomor_kta']; ?></td>
                            <td>
                                <a href="<?php echo base_url() ?>petugas/edit_usulan/<?php echo $u['id']; ?>" class="badge badge-success">edit</a>
                                <a href="<?php echo base_url() ?>petugas/hapus_usulan/<?php echo $u['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin ingin meghapus data ini?');">hapus</a>
                            </td>
                            </tr>
                            
                            <?php endforeach; ?>
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
                            </div>
                            </div>
</div>

<!-- start modal cetak -->
<!-- <div class="modal fade" id="cetakData" tabindex="-1" role="dialog" aria-labelledby="cetakDataLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cetakDataLabel">Cetak Sesuai Tanggal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" target="_blank" action="<?= base_url('kuis/cetak'); ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="tgl_awal">Dari Tanggal</label>
                        <input type="date" class="form-control" id="tgl_awal" name="tgl_awal">
                    </div>
                    <div class="form-group">
                        <label for="tgl_akhir">Sampai Tanggal</label>
                        <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir">
                    </div>
                                    
                    <button type="submit" name="cetak_usulan" class="btn btn-primary" value="cetak">Cetak</button>
                </div>
                <div class="modal-footer">
                <a href="<?= base_url('petugas/cetak'); ?>" target="_blank" class="btn btn-primary"> Cetak Semua Data</a>
                </div>
                </form>
                </div>
            </div>
            </div> -->
            <!-- end modal pertanyaan -->


                          