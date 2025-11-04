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
                <h5>Tambah data Servis</h5>
            </div>
            <div class="card-body">
                <form action="../../actions/servis/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="jobInput" class="form-label">Pekerjaan</label>
                        <input type="text" name="job" class="form-control" id="jobInput" placeholder="Masukan Pekerjaan.." required>
                    </div>
                    <div class="mb-3">
                        <label for="iconInput" class="form-label">Pilih Icon</label>
                        <input type="file" name="icon" class="form-control" id="iconInput" required>
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