<?php
    include '../components/sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >TAMBAH BUKU</h4>
        <hr>
        <form action="../process/createBukuProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                <input class="form-control" id="nama_buku" name="nama_buku" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Penulis</label>
                <input class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Halaman</label>
                <input class="form-control" id="halaman" name="halaman" aria-describedby="emailHelp">
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
                </select>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="add">Tambah Buku</button>
            </div>
        </form>
    </div>
</aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>