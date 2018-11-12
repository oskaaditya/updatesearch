<?php
    require 'functions.php';

    if(isset($_POST['submit']))
    {
        if(tambah($_POST)>0)
        {
            echo "
            <script>
                alert('Data Berhasil Disimpan');
                document.location.href='index.php';
            </script>

            ";
        }else{
            echo "
            <script>
                alert('Data Gagal Disimpan');
                document.location.href='tambah_data.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <title>Tambah Data</title>
</head>
<body>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="./index.php">Halaman Utama</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./tambah_data.php">Tambah Data</a>
    </li>
</ul>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="form-horizontal" method="post">
    <ul>
        <li>
            <label for="Nama">Nama</label>
            <input type="text" name="Nama" id="Nama" required>
        </li>
        <li>
            <label for="Nim">Nim</label>
            <input type="text" name="Nim" id="Nim" required>
        </li>
        <li>
            <label for="Email">Email</label>
            <input type="text" name="Email" id="Email" required>
        </li>
        <li>
            <label for="Jurusan">Jurusan</label>
            <input type="text" name="Jurusan" id="Jurusan" required>
        </li>
        <li>
            <label for="Gambar">Gambar</label>
            <input type="text" name="Gambar" id="Gambar" required>
        </li>
        <li>
            <button type="submit" name="submit">Tambah</button>
        </li>
    </ul>
    </form>
</body>
</html>