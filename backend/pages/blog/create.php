<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<!--  Content  -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Data Blog</h5>
            </div>
            <div class="card-body">
                <form action="../../actions/blog/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nama Penulis</label>
                        <input type="text" name="autor" class="form-control" id="nameInput" placeholder="Masukan Nama Pembuat..." required>
                    </div>

                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Judul</label>
                        <input type="text" name="title" class="form-control" id="nameInput" placeholder="Masukan Judul..." required>
                    </div>

                    <div class="mb-3">
                        <label for="dateInput" class="form-label">Tanggal</label>
                        <input type="date" name="date" class="form-control" id="dateInput" required>
                    </div>

                    <div class="mb-3">
                        <label for="addressInput" class="form-label">Deskripsi</label>
                        <textarea name="description" id="addressInout" class="form-control" placeholder="Masukan Judul..." rows="5"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="imagesInput" class="form-label">Foto</label>
                        <input type="file" name="image" class="form-control" id="imageInput" required>
                    </div>

                    <button type="submit" class="btn btn-success" name="tombol" name="tombol">Tambah</button>
                    <a href="./index.php" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>