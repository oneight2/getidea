<?php
if (!$this->session->userdata('login') == true) {
    redirect('admin');
}
?>

<div class="container my-2">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Pengelolaan Komplain</h4>
            <a class="btn btn-primary btn-sm text-white my-2" data-toggle="modal" data-target="#tambah">Tambah Data</a>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th scope="col">#</th>
                                <th scope="col">Nama Client</th>
                                <th scope="col">Nomor Client</th>
                                <th scope="col">Email</th>
                                <th scope="col">website</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($komplain as $row) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $row['nama_client']; ?></td>
                                    <td><?= $row['nomor_client']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['website']; ?></td>

                                    <td><a href="<?= base_url() ?>admin/detail_komplain/<?= $row['id']; ?>" class="btn btn-primary btn-sm text-white">detail</a></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>