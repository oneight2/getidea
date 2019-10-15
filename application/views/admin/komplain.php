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

                                    <td><a class="btn btn-primary btn-sm text-white my-2" data-toggle="modal" data-target="#detail">detail</a></td>
                                </tr>
                                <tr>
                                    <td>Komplain :</td>
                                    <td colspan="5"><?= $row['komplain'] ?></td>
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


<!-- modal -->
<div class="modal" id="detail">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <div class="modal-body">
                <div class="row">
                    <?php foreach ($detail_komplain as $detail) : ?>
                        <?php if ($detail['id_komplain'] == $row['id']) : ?>
                            <div class="col-2">
                                <div class="card">
                                    <a class="mt-2" href="<?= base_url() ?>img/komplain/<?= $detail['gambar'] ?>">
                                        <img src="<?= base_url() ?>img/komplain/<?= $detail['gambar'] ?>" alt="" class="card-img-top">
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>