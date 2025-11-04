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
                <h5>Edit Data Testimoni</h5>
            </div>
            <div class="card-body">
                <?php
                include '../../actions/testimonials/show.php';
                ?>
                <form action="../../actions/testimonials/update.php?id=<?= $testimonials->id ?>" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="nameInput" placeholder="Masukkan Nama..." value="<?= $testimonials->name ?>">
                    </div>

                    <div class="mb-3">
                        <label for="jobInput" class="form-label">Pekerjaan</label>
                        <input type="text" name="job" class="form-control" id="jobInput" placeholder="Masukkan Pekerjaan..." value="<?= $testimonials->job ?>">
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <input type="text" name="description" class="form-control" id="descriptionInput" placeholder="Masukkan Deskripsi..." value="<?= $testimonials->description ?>">
                    </div>

                    <div class=" mb-3">
                        <h6>Gambar</h6>
                        <img class="w-25" src="../../../storages/testimonials/<?= $testimonials->image ?>" alt="">
                        <label for="imagesInput" class="form-label"></label>
                        <input type="file" name="image" class="form-control" id="imageInput">
                    </div>

                    <button type="submit" class="btn btn-warning" name="tombol" name="tombol" style="color: white; border: none;">Simpan</button>
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