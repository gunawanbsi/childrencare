<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3><center>Laporan Data Konsultasi Children Care</center></h3>
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