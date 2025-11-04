<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

// Ambil data skill dari database
$qSkills = "SELECT * FROM skills";
$result = mysqli_query($connect, $qSkills) or die(mysqli_error($connect));
?>

<!-- Content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Tabel Skill</h5>
                <a href="./create.php" class="btn btn-primary">Tambah</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Skill</th>
                                <th>Persen</th>
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
                                    <td><?= $item->skill ?></td>
                                    <td><?= $item->percent ?>%</td>
                                    <td><?= $item->description?></td>
                                    <td>
                                        <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning btn-sm" style="color: white; border: none;">Edit</a>
                                        <a href="../../actions/skill/destroy.php?id=<?= $item->id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus skill ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            endwhile;

                            if ($no === 1): // Tidak ada data
                            ?>
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data skill.</td>
                                </tr>
                            <?php endif; ?>
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