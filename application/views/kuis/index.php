<!DOCTYPE html>
<html class="no-js">
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- style2 -->
    <!-- <link rel="stylesheet" href="<?php echo base_url().'theme/css/style2.css'?>"> -->

    <title><?php echo $judul; ?></title>
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/logo.png'?>">
    

    <!-- Layout styles -->
    <!-- <link rel="stylesheet" href="<?= base_url('assets2/'); ?>assets/css/style.css"> -->

	</head>
	<body>

    <div class="container mt-3 mb-5">
        <!-- tampilan awal card from -->
        <div class="card mt-5" style="background-color: #F5F8F7">
        <div class="mt-3" style="text-align: center;">
            <img src="<?= base_url('assets/images/logo.png'); ?>" style="width: 100px;">
        </div>

        <h1 style="font-size: 22px" class=" text-center mt-3">KUESIONER KEPUASAN PENGGUNAAAN WEBSITE SILANKA (ONLINE)</h1>
        <p class="text-center">silahkan mengisi identitas diri dan kuesioner ini untuk penilaian website SILANKA</p>
            
        
            <div class="card-body mt-3">
            <?php echo $this->session->flashdata('msg');?>
                
                <h2 class="text-left" style="font-size: 20px;">Identitas Diri :</h2>
                <hr>

                <form method="post" action="<?= base_url().'kuis/tambah_data' ?>">
                    <div class="row">
                        <div class="col-lg-4">
                        <label for="nama">Nama Lengkap :</label>
                        <input type="text" name="nama_penilai" id="nama_penilai" class="form-control" required>
                        </div>
                        <div class='col-sm-4'>
                                <div class="form-group">
                                    <td>
                                        <label>Jenis Kelamin :</label>
                                    </td>
                                    <td>
                                        
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                                            <option value="" disabled selected>Pilih Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                            
                                        </select>
                                    </td>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-lg-4">
                                <div class="form-group">
                                    <td>
                                        <label>Pilih Pendidikan</label>
                                    </td>
                                    <td>
                                        
                                        <select class="form-control" name="nama_karyawan" required>
                                            <option value="" disabled selected>Pilih Pendidikan</option>
                                            
                                        </select>
                                    </td>
                                </div>
                            </div> -->
                        <div class="col-lg-4">
                                <div class="form-group">
                                    <td>
                                        <label>Pilih Pendidikan :</label>
                                    </td>
                                    <td>
                                        
                                        <select class="form-control" name="pendidikan" required>
                                            <option value="" disabled selected>Pilih Pendidikan</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA/SMK">SMA/SMK</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                            
                                        </select>
                                    </td>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4">
                        <label for="pendidikan">Pendidikan</label>
                        <input type="text" name="pendidikan" id="pendidikan" class="form-control" required>
                        </div> -->
                        
                        <div class='col-sm-4'>
                                <div class="form-group">
                                    <label>Tanggal Penilaian : </label>
                                    <div class='input-group'>
                                        <input type='date' class="form-control" name="tgl_penilaian" id="tgl_penilaian"/>
                                    </div>
                                </div>
                            </div>
                    </div>


                    
                    
                <h2 class="mt-5" style="font-size: 20px;">Isi Kuesioner :</h2>
                <hr><br>

                <?php foreach ($tabel_pertanyaan as $kategori_nama => $pertanyaan) : ?>
                <h2 style="font-size: 28px;"><?= $kategori_nama; ?></h2>

                            <table class="table table-bordered" border="1" width="100%">
                                <tr style="background-color:yellow;">
                                    <th class="text-center" width="5%" rowspan="2">No.</th>
                                    <th class="text-center" rowspan="2">Pertanyaan</th>
                                    <th class="text-center" width="30%" colspan="5">Penilaian</th>
                                </tr>
                                <tr align="center" style="background-color:yellow;">  
                                    <td>Sangat Kurang</td>
                                    <td>Kurang</td>
                                    <td>Cukup</td>
                                    <td>Baik</td>
                                    <td>Sangat Baik</td>
                                </tr>
                                
                                        <?php $id = 1; ?>
                                        <?php foreach ($pertanyaan as $index => $item) : ?>
                                        <tr>
                                            <td><?php echo $index + 1; ?></td>
                                            <td><?php echo $item['pertanyaan']; ?></td>
                                            <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                        
                         
                                            <td align="center"><input type="radio" value="1" name="nilai[<?php echo $item['id_per']; ?>]" required></td>
                                            <td align="center"><input type="radio" value="2" name="nilai[<?php echo $item['id_per']; ?>]" required></td>
                                            <td align="center"><input type="radio" value="3" name="nilai[<?php echo $item['id_per']; ?>]" required></td>
                                            <td align="center"><input type="radio" value="4" name="nilai[<?php echo $item['id_per']; ?>]" required></td>
                                            <td align="center"><input type="radio" value="5" name="nilai[<?php echo $item['id_per']; ?>]" required></td>
                                        </tr>
                                        <?php $id++; ?>
                                    <?php endforeach; ?>
                                    
                                              
                           </table>
                           <?php endforeach; ?>
                           
                           

                           
                            
                           
                           <div class="form-group">
                            <label for="saran">Tulisankan kritikan & saran :</label>
                            <textarea class="form-control" name="saran" id="saran" rows="3" required></textarea>
                        </div>
                

                    <div class="form-group float-right">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
					</div>
						

                </form>
            

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













  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
