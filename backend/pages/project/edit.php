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
                <h5>Ubah Data Project</h5>
            </div>
            <div class="card-body">
                <?php
                include '../../actions/project/show.php';
                ?>
                <form action="../../actions/project/update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="titleInput" class="form-label">Judul</label>
                        <input type="text" name="title" class="form-control" id="titleInput" placeholder="Masukan Judul..." required value="<?= $project->title ?>">
                    </div>

                    <div class="mb-3">
                        <label for="jobInput" class="form-label">Pekerjaan</label>
                        <input type="text" name="job" class="form-control" id="jobInput" placeholder="Masukan Pekerjaan Sekarang..." required value="<?= $project->job ?>">
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <input type="text" name="description" class="form-control" id="descriptionInput" placeholder="Masukan Deskripsi Sekarang..." required value="<?= $project->description ?>">
                    </div>

                    <div class="mb-3">
                        <label for="imageInput" class="form-label">Foto</label><br>
                        <img class="w-25 mb-2" src="../../../storages/project/<?= $project->image ?>" alt="">
                        <input type="file" name="image" class="form-control" id="imageInput">
                        <input type="hidden" name="id" value="<?= $project->id ?>">
                        <!-- Tidak perlu value untuk file input -->
                    </div>

                    <button type="submit" class="btn btn-warning" name="tombol" name="tombol" style="color: white; border: none;">Edit</button>
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