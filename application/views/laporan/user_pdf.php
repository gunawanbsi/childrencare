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
        <h3><center>Laporan Data User BSI Children Care</center></h3>
        <br/>
        <table class="table-data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jadi Member Sejak</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($member as $b){
                ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th> 
                    <td><?= $b['nama']; ?></td>
                    <td><?= $b['email']; ?></td>
                    <td><?= date('d F Y', $b['tanggal_input']); ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>