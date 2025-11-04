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
                <h5>Tambah Data Testimoni</h5>
            </div>
            <div class="card-body">
                <form action="../../actions/testimonials/store.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nama</label>
                        <textarea name="name" id="nameInput" class="form-control" placeholder="Masukan Nama..." rows="5"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="jobInput" class="form-label">Pekerjaan</label>
                        <textarea name="job" id="jobInput" class="form-control" placeholder="Masukan Pekerjaan..." rows="5"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <textarea name="description" id="descriptionInput" class="form-control" placeholder="Masukan Deskripsi..." rows="5"></textarea>
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