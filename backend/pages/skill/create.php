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
                <h5>Tambah Data Skill</h5>
            </div>
            <div class="card-body">
                <form action="../../actions/skill/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="skillInput" class="form-label">Skill</label>
                        <input type="text" name="skill" class="form-control" id="skillInput" required>
                    </div>

                    <div class="mb-3">
                        <label for="percentInput" class="form-label">Persen</label>
                        <input type="text" name="percent" class="form-control" id="percentInput" required>
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <input type="text" name="description" class="form-control" id="descriptionInput" required>
                    </div>

                    <button type="submit" class="btn btn-success" name="tombol" name="tombol">Simpan</button>
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