<?php


//Data

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];
    $agama = $_POST['agama'];
    $kelamin = $_POST['kelamin'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>
    
    <h3>Selamat Datang <?= $nama?></h3>
    <p>Silahkan Cek Kembali Data Anda !!!</p>

    <table>

        <tr>
            <td>Nama </td>
            <td>: <?=$nama?></td>
        </tr>

        <tr>
            <td>Alamat </td>
            <td>: <?=$alamat?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td>: <?=$email?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?=$kelamin?></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>: <?=$tanggal?></td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>: <?=$agama?></td>
        </tr>

    </table>

    <p>Data ini akan di simpan di Database, Jika ada kesalahan Hubungi Saya di <a href="https://api.whatsapp.com/send/?phone=%2B6281995656588&text&type=phone_number&app_absent=0">Sini</a></p>
</html>