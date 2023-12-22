

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="<?= base_url('assets/images/logo.png'); ?>" alt="" width="80" class="mb-2">
                                        <h1 class="h4 text-gray-900 mb-4">SILANKA DINAS KEARSIPAN DAN PERPUSTAKAAN JAWA TENGAH</h1>
                                    </div>

                                    
                                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                        <?= $this->session->flashdata('message'); ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="identity" name="identity"
                                                placeholder="Enter Email Address or Username..." value="<?= set_value('identity'); ?>">
                                            <?= form_error('identity', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" href="<?= base_url('dashboard'); ?>">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <div class="text-center" style="color: #000;">silahkan kembali pada halaman! <a href="<?= base_url('home'); ?>" class="text-primary">Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

