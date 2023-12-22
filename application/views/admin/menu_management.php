

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title ; ?></h1>

                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">
                    ', '
                </div>'); ?>

                <?= $this->session->flashdata('message'); ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php echo $this->session->flashdata('msg');?>

                        <div class="card-header">
                            <a href="" class="btn btn-info" data-toggle="modal" data-target="#newMenu"><i class="fas fa-solid fa-plus"> Menu</i></a>
                        </div>
                        <div class="card-body row">
                            <div class="table-responsive">

                                
                                </div>
                                <div class="col-lg-6">
                                    
                                    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th width="10%">ID menu</th>
                                                <th width="30%">Menu</th>
                                                <th width="15%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            
                                            <?php

                                            $no = 1;
                                            
                                             foreach($menu as $m) : ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td align="center"><?= $m['id']; ?></td>
                                                <td><?= $m['menu']; ?></td>
                                                <td>
                                                    <!-- <a href="<?= base_url() ?>admin/edit_menu/<?= $m['id']; ?>" data-toggle="modal" data-target="#editMenu"  class="badge badge-success">edit</a> -->
                                                    <button type="button" class="btn badge badge-success" data-toggle="modal" data-target="#editMenu<?= $m['id']; ?>">edit</button>
                                                    <a href="<?php echo base_url() ?>admin/hapus_menu/<?php echo $m['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin ingin meghapus data ini?');">hapus</a>
                                                </td>
                                            </tr>
                                            <?php $no++; endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                 <!-- end page -->
            </div>

            <!-- modal tambah kategori -->
            
            <div class="modal fade" id="newMenu" tabindex="-1" role="dialog" aria-labelledby="newMenuLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuLabel">Tambah Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('admin/menu_management'); ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="menu">Menu</label>
                        <input type="text" class="form-control" id="menu" name="menu">
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


<!-- end content -->
            </div>

             

