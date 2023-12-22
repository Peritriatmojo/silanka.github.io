<!DOCTYPE html>
<html class="no-js">
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
        <h3 style="color: #fff500; font-family: Arial; font-weight: bold; text-shadow: 2px 2px #000000;">S I B A K U</h3>
        <h3 style="color: #fff500; font-family: Arial; font-weight: bold; text-shadow: 2px 2px #000000;">(Donasi Buku Kamu)</h3>
        <!-- tampilan awal card from -->
        <div class="card text-center mt-5" style="background-color: #DCDCDC">
            <div class="card-header bg-primary" Style="color:white">
                DONASI BUKU
            </div>
            
            <div class="card-body mt-3">
            <?php echo $this->session->flashdata('msg');?>
                <form method="post" action="<?php echo base_url().'donasi/tambah_data'?>">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="tnama" id="nama" class="form-control" placeholder="Nama Donatur" required>
                            </div><br>
                            <div class="form-group">
                                <input type="text" name="judul_buku" id="judul" class="form-control" placeholder="Judul Buku" required>
                            </div><br>
                            <div class="form-group">
                                <input type="text" name="tpengarang" id="pengarang" class="form-control" placeholder="Pengarang" required>
                            </div><br>
                            <div class="form-group">
                                <input type="text" name="tahun_terbit" id="nama" class="form-control" placeholder="Penerbit, Tahun Terbit" required>
                            </div><br>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="talamat" id="pengarang" class="form-control" placeholder="Alamat" required>
                            </div><br>
                            <div class="form-group">
                                <input type="text" name="temail" id="email" class="form-control" placeholder="Email" required>
                            </div><br>
                            <div class="form-group">
                                <input type="text" name="nomor_hp" id="nomor_hp" class="form-control" placeholder="Nomor HP" required>
                            </div><br>
                            <div class="form-group">
                                <input type="number" name="jumlah_donasi" id="nama" class="form-control" placeholder="Jumlah Donasi" required>
                            </div><br>
                        </div>
                        <div class="col-auto">
                            <h4 style="font-size: 15px"> Isi tanggal untuk pemberian donasi buku! </h4>
                            <input type="date" name="tketerangan" id="pengarang" class="form-control" placeholder="Tanggal" required>
                        </div>
                        <div class="col-auto">
                            <h4 style="font-size: 15px"> Isi keterangan untuk donasi buku! </h4>
                            <input type="text" name="tdeskrip" id="pengarang" class="form-control" required>
                        </div>
                        <div class="col-md-12">
							<div class="form-group">
								<input value="Tambah Data Donasi" class="btn btn-primary float-left mt-3" type="submit">
							</div>
						</div>
                        </div>
                    </div>
                </form>

            </div>
        



            <!-- awal card table -->
            <div class="card mt-5" style="background-color: #DCDCDC;">
            <div class="card-header bg-success" Style="color:white">
                DAFTAR DONASI BUKU
            </div><br>
            <div class="card-body">
                <!--
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama Donatur</th>
                        <th>Judul Buku</th>
                        <th>Alamat</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr> -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Nama Donatur</th>
                            <th>Judul Buku</th>
                            <th>Alamat</th>
                            <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php foreach($tdonasi as $t) : ?>
                            <tr>
                            <th scope="row"><?= ++$offset; ?></th>
                            <td><?= $t['tnama']; ?></td>
                            <td><?= $t['judul_buku']; ?></td>
                            <td><?= $t['talamat']; ?></td>
                            <td><?= $t['jumlah_donasi']; ?></td>
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

</div>




  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
