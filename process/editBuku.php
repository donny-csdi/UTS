<?php
        include ('../db.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM buku WHERE id='".$id."'";
        $result = $con->query($sql);
        
    include('../components/sidebarv2.php');
    ?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >EDIT BUKU</h4>
        <hr>
        <form action="./saveEditBuku.php" method="post">

        <?php while ($temp=mysqli_fetch_array($result)) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                <input class="form-control" id="nama_buku" name="nama_buku" aria-describedby="emailHelp" value="<?php echo $temp['nama_buku'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Penulis</label>
                <input class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" value="<?php echo $temp['penulis'] ?>">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Halaman</label>
                <input class="form-control" id="halaman" name="halaman" aria-describedby="emailHelp" value="<?php echo $temp['halaman'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori</label>
                <select class="form-select" aria-label="Default select example" name="kategori" id="kategori">
                    <option value="Novel">Novel</option>
                    <option value="Komik">Komik</option>
                    <option value="Ensiklopedi">Ensiklopedi</option>
                    <option value="Biografi">Biografi</option>
                    <option value="Karya Ilmiah">Karya Ilmiah</option>
                    <option value="Buku Ilmiah">Buku Ilmiah</option>
                <input type="hidden" id="id" name="id" value="<?php echo $temp['id'] ?>">
                </select>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="save">Tambah Buku</button>
            </div>
            <?php } ?>
        </form>
    </div>
</aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
