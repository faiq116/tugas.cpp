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
                <h5>Tambah data Socmeds</h5>
            </div>
            <div class="card-body">
                <form action="../../actions/sosmed/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="linknput" class="form-label">Link</label>
                        <input type="url" name="link" class="form-control" id="linknput" placeholder="Masukan Link..." required>
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