

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title ; ?></h1>

                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>

                    <?php endif; ?>


                <?= $this->session->flashdata('message'); ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php echo $this->session->flashdata('msg');?>

                        <div class="card-header">
                            <a href="" class="btn btn-info" data-toggle="modal" data-target="#newSubmenu"><i class="fas fa-solid fa-plus"> Submenu</i></a>
                        </div>
                        <div class="card-body row">
                            <div class="table-responsive">

                                
                                </div>
                                <div class="col-lg-12">
                                    
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th>Sub Menu</th>
                                                <th>Menu</th>
                                                <th>Url</th>
                                                <th>Icon</th>
                                                <th width="5%">Active</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            
                                            <?php

                                            $no = 1;
                                            
                                             foreach($submenu as $sm) : ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $sm['title']; ?></td>
                                                <td><?= $sm['menu']; ?></td>
                                                <td><?= $sm['url']; ?></td>
                                                <td><?= $sm['icon']; ?></td>
                                                <td align="center"><?= $sm['is_active']; ?></td>
                                                <td>
                                                    <a href="" class="btn badge badge-success" data-toggle="modal" data-target="#editsubMenu<?= $sm['id']; ?>">edit</a>
                                                    <a href="<?php echo base_url() ?>admin/hapus_sub_menu/<?php echo $sm['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin ingin meghapus data ini?');">hapus</a>
                                                </td>
                                            </tr>
                                            <?php $no++; endforeach; ?>
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
                    
                 <!-- end page -->
            </div>

            <!-- modal tambah submenu -->
            <div class="modal fade" id="newSubmenu" tabindex="-1" role="dialog" aria-labelledby="newSubmenuLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubmenuLabel">Tambah Sub Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('admin/sub_menu'); ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="title">Sub Menu</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="menu_id">Menu</label>
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Pilih Menu</option>
                            <?php foreach($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" id="url" name="url">
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" class="form-control" id="icon" name="icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
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
            <!-- end modal submenu -->

            <!-- modal edit sub menu -->
            <?php foreach($submenu as $sm) : ?>
            <div class="modal fade" id="editsubMenu<?= $sm['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editsubMenuLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editsubMenuLabel">Tambah Sub Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('admin/proses_edit_submenu'); ?>">
                <input type="hidden" name="id" value="<?= $sm['id']; ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="title">Sub Menu</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= $sm['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" id="url" name="url" value="<?= $sm['url']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" class="form-control" id="icon" name="icon" value="<?= $sm['icon']; ?>">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
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
            <!-- end modal edit sub menu -->


<!-- end content -->
            </div>

             

