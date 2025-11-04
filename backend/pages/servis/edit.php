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
                <h5>Ubah Data servis</h5>
            </div>
            <div class="card-body">
                <?php
                include '../../actions/servis/show.php';
                ?>
                <form action="../../actions/servis/update.php?id=<?= $servis->id ?>" method="POST" enctype="multipart/form-data">
                    <div class=" mb-3">
                        <label for="jobInput" class="form-label">Pekerjaan</label>
                        <input type="text" name="job" class="form-control" id="jobInput" placeholder="Masukan Pekerjaan..." required value="<?= $servis->job ?>">
                    </div>
                    <div class=" mb-3">
                        <img class="w-25" src="../../../storages/servis/<?= $servis->icon ?>" alt="">
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