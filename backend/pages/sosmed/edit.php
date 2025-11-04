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
                <h5>Ubah Data sosmed</h5>
            </div>
            <div class="card-body">
                <?php
                include '../../actions/sosmed/show.php';
                ?>
                <form action="../../actions/sosmed/update.php?id=<?= $sosmed->id ?>" method="POST" enctype="multipart/form-data">
                    <div class=" mb-3">
                        <label for="linkInput" class="form-label">Link</label>
                        <input type="url" name="link" class="form-control" id="linkInput" placeholder="Masukan Pekerjaan..." required value="<?= $sosmed->link ?>">
                    </div>
                    <div class=" mb-3">
                        <img class="w-25" src="../../../storages/sosmed/<?= $sosmed->icon ?>" alt="">
                        <label for="iconInput" class="form-label"></label>
                        <input type="file" name="icon" class="form-control" id="iconInput">
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