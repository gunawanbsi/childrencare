<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <style type="text/css">
            .table-data{
                width: 100%;
                border-collapse: ccollapse;
            }

            .table-data tr th,
            .table-data tr td{
                border: 1px solid black;
                font-size: 11pt;
                padding: 10px 10px 10px 10px;
            }
        </style>
        <h3><center>Laporan Data Konsultasi BSI Children Care</center></h3>
        <br/>
        <table class="table-data">
        <thead>
                    <tr>
                        <th>Nomor</th>
                            <th>Nama Pasien</th>
                            <th>Alamat Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Kategori Anak</th>
                            <th>Berat Badan</th>
                            <th>Tinggi Badan</th>
                            <th>Tanggal Konsultasi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $i = 1;
                        foreach ($konsul as $a) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $a['nama_pasien']; ?></td>
                            <td><?= $a['alamat_pasien']; ?></td>
                            <td><?= $a['jenis_kelamin']; ?></td>
                            <td><?= $a['tgl_lahir']; ?></td>
                            <td><?= $a['kategori_anak']; ?></td>
                            <td><?= $a['berat_badan']; ?></td>
                            <td><?= $a['tinggi_badan']; ?></td>
                            <td><?= $a['tgl_konsultasi'] ?></td>
                        </tr>
                        <?php } ?>
                </tbody>
        </table>
    </body>
</html>