<?php

    $conn=mysqli_connect("localhost","root","","phpdatabase");


    if(isset($_POST['submit']))
    {
        $nama=$_POST["Nama"];
        $nim=$_POST["Nim"];
        $email=$_POST["Email"];
        $jurusan=$_POST["Jurusan"];
        $gambar=$_POST["Gambar"];

        $query=" INSERT INTO mahasiswa
                VALUES
                ('','$nama','$nim','$email','$jurusan','$gambar')";
        mysqli_query($conn,$query);






        if(mysqli_affected_rows($conn)>0){
            echo"data berhasil disimpan";
        }
        else{
            echo"gagal";
            echo"<br>";
            echo mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/from-data">
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
                <input type="Email" name="Email" id="Email" required>
            </li>
            <li>
                <label for="Jurusan">Jurusan</label>
                <input type="text" name="Jurusan" id="Jurusan" required>
            </li>
            <li>
                <label for="Gambar">Gambar</label>
                <input type="file" name="Gambar" id="Gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>