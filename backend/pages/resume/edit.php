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
                <h5>Ubah Data Riwayat</h5>
            </div>
            <div class="card-body">
                <?php
                include '../../actions/resume/show.php';
                ?>
                <form action="../../actions/resume/update.php?id=<?= $resume->id ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="dateInput" class="form-label">Periode</label>
                        <input type="text" name="date" class="form-control" id="dateInput" placeholder="Contoh 
                        : 2016-2019" required value="<?= $resume->date ?>">
                    </div>

                    <div class="mb-3">
                        <label for="jobInput" class="form-label">Pekerjaan/pendidikan</label>
                        <input type="text" name="job" class="form-control" id="jobInput" placeholder=" 
                       Masukan pekerjaan/Pendidikan" required value="<?= $resume->job ?>">
                    </div>

                    <div class="mb-3">
                        <label for="placeInput" class="form-label">Alamat</label>
                        <input type="text" name="place" class="form-control" id="placeInput" placeholder="
                       Masukan pekerjaan/Pendidikan" required value="<?= $resume->place ?>">
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <textarea name="description" id="descriptionInput" class="form-control" placeholder="Masukan Deskripsi..." rows="5"><?= $resume->description ?></textarea>
                    </div>

                    <button type=" submit" class="btn btn-warning" name="tombol" name="tombol" style="color: white; border: none;">Simpan</button>
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