<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center">
            <h3> Laporan PDF Toko Kita</h3>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Nama Pengusul</th>
                    <th>Nomor KTA</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach($usulan as $u) : ?>
                <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $u->judul; ?></td>
                    <td><?= $u->pengarang; ?></td>
                    <td><?= $u->nama_pengusul; ?></td>
                    <td><?= $u->nomor_kta; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .line-title{
            border: 0;
            border-style: inset;
            border-top: 2px solid #000;

        }
        #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            /* #table tr:nth-child(even){background-color: #f2f2f2;} */

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: center;
                background-color: #FEA904;
                color: white;
            }
    </style>

</head>
<body>

    
<img src="<?= base_url('assets/images/logo.png'); ?>" style="position: absolute; width: 70px; height: auto;">
    <!-- <table style="width: 100%;">
        <tr>
            <td align="center">
                <p style="line-height: 1.6; font-weight: bold; font-size: 16px;">
                    PEMERINTAH PROVINSI JAWA TENGAH
                    <br>DINAS KEARSIPAN DAN PERPUSTAKAAN PROVINSI JAWA TENGAH
                </p>
                <p style="line-height: 0.5; font-size: 14px;">Jl.Sriwijaya No.29.A Telpon(024) 8317963 Fax.(024) 8440479 Semarang 50251</p>
            </td>
        </tr> -->
        <h1 class="text-center" style="font-size: 18px;">
            PEMERINTAH PROVINSI JAWA TENGAH
        </h1>
        <h1 class="text-center" style="font-size: 22px;">
            DINAS KEARSIPAN DAN PERPUSTAKAAN
        </h1>
        <P class="text-center" style="font-size: 12px;">
            Jl.Sriwijaya No.29.A Telpon(024) 8317963 Fax.(024) 8440479 Semarang 50251
        </P>
        <hr class="line-title">

        <h2 style="font-size: 16px" class="text-center">
            LAPORAN DONASI BUKU
        </h2>

    <table id="table" class="mt-4">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Donatur</th>
                    <th>Judul Buku</th>
                    <th>Alamat</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach($donasi as $d) : ?>
                <tr>
                    <td scope="row" align="center"><?= $i; ?></td>
                    <td><?= $d->tnama; ?></td>
                    <td><?= $d->judul_buku; ?></td>
                    <td><?= $d->talamat; ?></td>
                    <td align="center"><?= $d->jumlah_donasi; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    
</body>
</html>