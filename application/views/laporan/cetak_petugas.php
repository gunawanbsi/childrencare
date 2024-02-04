<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <style type="text/css">
    .table-data{
    width: 100%;
    border-collapse: collapse;
    }
    .table-data tr th,
    .table-data tr td{
    border:1px solid black;
    font-size: 11pt;
    font-family:Verdana;
    padding: 10px 10px 10px 10px;
    }
    h3{
    font-family:Verdana;
    }
    </style>
    <h3><center>Laporan Data Petugas BSI Children Cares</center></h3>
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
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>