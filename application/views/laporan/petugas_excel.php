<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3><center>Laporan Data Petugas Children Care</center></h3>
        <br/>
        <table class="table-data">
        <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAMA PETUGAS</th>
                        <th scope="col">EMAIL PETUGAS</th>
                        <th scope="col">JABATAN</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">NOMOR TELEPON</th>
                    </tr>
                </thead>
                <tbody>
                <?php $a = 1; 
                foreach ($petugas as $k) { ?>
                <tr>
                    <th scope="row"><?= $a++; ?></th>
                    <td><?= $k['nama_petugas']; ?></td>
                    <td><?= $k['email_petugas']; ?></td>
                    <td><?= $k['jabatan']; ?></td>
                    <td><?= $k['alamat']; ?></td>
                    <td><?= $k['no_telepon']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
        </table>