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
                <h5>Ubah Data About</h5>
            </div>
            <div class="card-body">
                <?php
                include '../../actions/about/show.php';
                ?>
                <form action="../../actions/about/update.php?id=<?= $about->id ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="nameInput" placeholder="Masukan Nama..." required value="<?= $about->name ?>">
                    </div>

                    <div class="mb-3">
                        <label for="bornInput" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="born" class="form-control" id="bornInput" required value="<?= $about->born ?>">
                    </div>

                    <div class=" mb-3">
                        <label for="zip_codeInput" class="form-label">Kode Pos</label>
                        <input type="number" name="zip_code" class="form-control" id="zip_codeInput" placeholder="Masukan Kode Pos..." required value="<?= $about->zip_code ?>">
                    </div>

                    <div class=" mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="emailInput" placeholder="Masukan Email..." required value="<?= $about->email ?>">
                    </div>

                    <div class=" mb-3">
                        <label for="phoneInput" class="form-label">No Telepone</label>
                        <input type="number" name="phone" class="form-control" id="phoneInput" placeholder="Masukan No Telepone..." required value="<?= $about->phone ?>">
                    </div>

                    <div class=" mb-3">
                        <label for="total_projectInput" class="form-label">Total Project</label>
                        <input type="number" name="total_project" class="form-control" id="total_projectInput" placeholder="Masukan Total Project..." required value="<?= $about->total_project ?>">
                    </div>

                    <div class=" mb-3">
                        <label for="workInput" class="form-label">Pekerjaan</label>
                        <input type="text" name="work" class="form-control" id="workInput" placeholder="Masukan Pekerjaan Sekarang..." required value="<?= $about->work ?>">
                    </div>

                    <div class=" mb-3">
                        <label for="addressInput" class="form-label">Alamat</label>
                        <textarea name="address" id="addressInout" class="form-control" placeholder="Masukan Alamat..." rows="5"><?= $about->address ?></textarea>
                    </div>

                    <div class=" mb-3">
                        <h6>Foto</h6>
                        <img class="w-25" src="../../../storages/barang/<?= $about->foto ?>" alt="">
                        <label for="fotosInput" class="form-label"></label>
                        <input type="file" name="foto" class="form-control" id="fotoInput">
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