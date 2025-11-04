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
                <h5>Tambah data</h5>
            </div>
            <div class="card-body">
                <form action="../../actions/about/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="nameInput" placeholder="Masukan Nama..." required>
                    </div>

                    <div class="mb-3">
                        <label for="bornInput" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="born" class="form-control" id="bornInput" required>
                    </div>

                    <div class="mb-3">
                        <label for="zip_codeInput" class="form-label">Kode Pos</label>
                        <input type="number" name="zip_code" class="form-control" id="zip_codeInput" placeholder="Masukan Kode Pos..." required>
                    </div>

                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="emailInput" placeholder="Masukan Email..." required>
                    </div>

                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">No Telepone</label>
                        <input type="number" name="phone" class="form-control" id="phoneInput" placeholder="Masukan No Telepone..." required>
                    </div>

                    <div class="mb-3">
                        <label for="total_projectInput" class="form-label">Total Project</label>
                        <input type="number" name="total_project" class="form-control" id="total_projectInput" placeholder="Masukan Total Project..." required>
                    </div>

                    <div class="mb-3">
                        <label for="workInput" class="form-label">Pekerjaan</label>
                        <input type="text" name="work" class="form-control" id="workInput" placeholder="Masukan Pekerjaan Sekarang..." required>
                    </div>

                    <div class="mb-3">
                        <label for="addressInput" class="form-label">Alamat</label>
                        <textarea name="address" id="addressInout" class="form-control" placeholder="Masukan Alamat..." rows="5"></textarea>
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