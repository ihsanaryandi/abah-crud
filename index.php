<?php

require 'koneksi.php';

$result = mysqli_query($koneksi, "SELECT * FROM siswa");

$siswa = [];

while($row = mysqli_fetch_assoc($result))
{

    $siswa[] = $row;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba Git</title>
</head>
<body>
    
    <h1>Data siswa</h1>

    <table border="1" cellspacing="0" cellpadding="7">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>

        <?php $no = 1; foreach($siswa as $s) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $s['nama']; ?></td>
                <td><?= $s['kelas']; ?></td>
                <td><?= $s['alamat']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>