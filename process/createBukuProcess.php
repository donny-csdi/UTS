<?php
    if(isset($_POST['add'])){

        include('../db.php');

        $nama_buku = $_POST['nama_buku'];
        $penulis = $_POST['penulis'];
        $halaman = $_POST['halaman'];
        $kategori = $_POST['kategori'];

        $query = mysqli_query($con,
            "INSERT INTO buku(nama_buku, penulis, halaman, kategori)
                VALUES
            ('$nama_buku', '$penulis', '$halaman', '$kategori')")
                or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Create Data Success"); window.location = "../CRUD/listBuku.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Create Data Failed");
                </script>';
        }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>