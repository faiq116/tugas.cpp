<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qProjects = "SELECT * FROM projects";
$result = mysqli_query($connect, $qProjects) or die(mysqli_error($connect));
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-item-center justify-content-between">
                <h6>Tabel Project</h6>
                <a href="./create.php" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Penulis</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($item = $result->fetch_object()):
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td>
                                        <img src="../../../storages/project/<?= $item->image ?>" alt="" width="100" height="100">
                                    </td>
                                    <td><?= $item->title ?></td>
                                    <td><?= $item->job ?></td>
                                    <td><?= $item->description ?></td>
                                    <td>

                                        <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning btn-sm" style="color: white; border: none;">Edit</a>
                                        <a href="../../actions/project/destroy.php?id=<?= $item->id ?>" class="btn btn-danger btn-sm" onclick="return confrim('Apakah Anda Yakin?')" class="">Hapus</a>
                                    </td>
                                </tr>

                            <?php
                                $no++;
                            endwhile;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>