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
                <h5>Edit Data Blog</h5>
            </div>
            <div class="card-body">
                <?php
                include '../../actions/blog/show.php';
                ?>
                <form action="../../actions/blog/update.php?id=<?= $blog->id ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="autorInput" class="form-label">Penulis</label>
                        <input type="text" name="autor" class="form-control" id="autorInput" placeholder="Masukkan Nama Penulis..." required value="<?= $blog->autor ?>">
                    </div>

                    <div class="mb-3">
                        <label for="titleInput" class="form-label">Judul</label>
                        <input type="text" name="title" class="form-control" id="titleInput" placeholder="Masukkan Judul..." required value="<?= $blog->title ?>">
                    </div>

                    <div class="mb-3">
                        <label for="dateInput" class="form-label">Tanggal</label>
                        <input type="date" name="date" class="form-control" id="dateInput" placeholder="Masukkan Tanggal..." value="<?= $blog->date ?>">
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <input type="text" name="description" class="form-control" id="descriptionInput" placeholder="Masukkan Deskripsi" value="<?= $blog->description ?>">
                    </div>

                    <div class=" mb-3">
                        <h6>Gambar</h6>
                        <img class="w-25" src="../../../storages/blog/<?= $blog->image ?>" alt="">
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