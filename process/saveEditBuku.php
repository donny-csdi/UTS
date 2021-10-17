<?php
    if(isset($_POST['save'])){

        include('../db.php');
        $id = $_POST['id'];
        $namabuku = $_POST['nama_buku'];
        $penulis = $_POST['penulis'];
        $halaman = $_POST['halaman'];
        $kategori = $_POST['kategori'];
        
        $query = mysqli_query($con, "UPDATE buku SET nama_buku = '$namabuku', penulis = '$penulis', halaman = '$halaman', kategori = '$kategori' WHERE id ='$id' ") or die(mysqli_error($con));
        if ($query) {
            echo
            '<script>
            alert("Update Success"); window.location = "../CRUD/listBuku.php"
            </script>';
            } else {
                echo
                '<script>
                alert("Update Failed"); window.location = "../CRUD/listBuku.php"
                </script>';
            }
        }else {
            echo
                '<script>
                window.history.back()
                </script>';
    }
?>        