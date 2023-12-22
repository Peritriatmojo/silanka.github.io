
            
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
                    <div class="row"> <!-- Menambahkan kelas justify-content-end -->
                        <div class="col-md-8">
                            <div class="form-group">
                                <a href="<?= base_url('petugas/cetak_donasi'); ?>" target="_blank" class="btn btn-info"><i class="fas fa-solid fa-print"> Cetak Data</i></a>
                            </div>
                            <form method="post" action="<?php echo base_url('Petugas'); ?>" class="form-inline ml-auto"> <!-- Menambahkan kelas ml-auto -->
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
                                <th width="23%">Nama Donatur</th>
                                <th>Judul Buku</th>
                                <th>Alamat</th>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th width="13%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach($donasi as $d) : ?>
                            <tr>
                            <th scope="row"><?= ++$offset; ?></th>
                            <td><?= $d['tnama']; ?></td>
                            <td><?= $d['judul_buku']; ?></td>
                            <td><?= $d['talamat']; ?></td>
                            <td><?= $d['tketerangan']; ?></td>
                            <td><?= $d['jumlah_donasi']; ?></td>
                            <td>
                                <a href="<?php echo base_url() ?>petugas/edit_donasi/<?php echo $d['id']; ?>" class="badge badge-success">edit</a>
                                <a href="<?php echo base_url() ?>petugas/hapus_donasi/<?php echo $d['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin ingin meghapus data ini?');">hapus</a>
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


                          