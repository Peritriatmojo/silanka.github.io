<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- style2 -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/style2.css'?>">
    <style>
        body {
            background-image: url("https://ppid.arpusda.jatengprov.go.id/includes/office2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>

    <title><?php echo $judul; ?></title>
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/logo.png'?>">

</head>
<body>
<div class="container text-center mt-3">
        <h1 class="text-center" style="color:black">LABUMU</h1>
        <h2 class="text-center" style="color:black">(Usulan Buku Kamu)</h2>

        <!-- tampilan awal card from -->
        <div class="card text-center mt-5" style="background-color: #DCDCDC;">
            <div class="card-header bg-primary" Style="color:white">
                USULAN BUKU
            </div>
            <div class="card-body">
            <?php echo $this->session->flashdata('msg');?>
                <form method="post" action="<?php echo base_url().'usulan/tambah_data'?>">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul" required>
                            </div><br>
                            <div class="form-group">
                                <input type="text" name="pengarang" id="pengarang" class="form-control" placeholder="Pengarang" required>
                            </div><br>
                            <div class="form-group">
                                <input type="number" name="tahun_terbit" id="nama" class="form-control" placeholder="Tahun Terbit" required>
                            </div><br>
                            <div class="form-group">
                                <input type="text" name="nama_pengusul" id="nama" class="form-control" placeholder="Nama Pengusul" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="nomor_kta" id="nomor_kta" class="form-control" placeholder="Nomor KTA" required>
                            </div><br>
                            <div class="form-group">
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required>
                            </div><br>
                            <div class="form-group">
                                <input type="text" name="nomor_hp" id="nomor_hp" class="form-control" placeholder="Nomor HP" required>
                            </div><br>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-auto">
                            <h4 style="font-size: 15px"> Isi tanggal pengusulan buku! </h4>
                            <input type="date" name="tgl_usul" id="tgl_usul" class="form-control" placeholder="Tanggal" required>
                        </div>
                        <div class="col-md-12">
							<div class="form-group">
								<input value="Tambah Data Usulan" class="btn btn-primary float-left mt-3" type="submit">
							</div>
						</div>
                        </div>
                    </div>
                </form>
            </div>



            <!-- awal card table -->
            <div class="card mt-5" style="background-color: white;">
            <div class="card-header bg-secondary" Style="color:white">
                DAFTAR USULAN BUKU
            </div>
            <div class="card-body">
                <!--
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Nama Pengusul</th>
                        <th>Nomor KTA</th>
                        <th>Aksi</th>
                    </tr>
                </table> -->

                <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Nama Pengusul</th>
                            <th>Nomor KTA</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach($usulan as $u) : ?>
                            <tr>
                            <th scope="row"><?= ++$offset; ?></th>
                            <td><?= $u['judul']; ?></td>
                            <td><?= $u['pengarang']; ?></td>
                            <td><?= $u['nama_pengusul']; ?></td>
                            <td><?= $u['nomor_kta']; ?></td>
                            </tr>
                            
                            <?php endforeach; ?>
                        </tbody>
                        </table>

                        <div class="col-md-12 mt-5">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <?= $pagination; ?>
                                </ul>
                            </nav>
                        </div>
                <div class="footer text-muted text-center mt-5">
                    &copy; 2022. <a href="http://profile.perpus.jatengprov.go.id/" class="text-success"><b>PERPUSDA JATENG</b></a>
                </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>