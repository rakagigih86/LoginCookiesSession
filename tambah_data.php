<?php
    require 'functions.php';

    if(isset($_POST['submit']))
    {

        var_dump($_post);
        var_dump($_FILES);
        die();
        if(tambah($_POST)>0)
        {
            echo "
            <script>
                alert('data berhasil disimpan');
                document.location.href='index.php';
            </script>

            ";
        }else{
            echo "
            <script>
                alert('data gagal disimpan');
                document.location.href='tambah_data.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
        
    }