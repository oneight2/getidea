<?php
if (!$this->session->userdata('login') == true) {
    redirect('admin');
}
?>

<div class="container my-2">

    <div class="card">
        <div class="card-body">

            <h4 class="header-title">Pengelolaan Aplikasi</h4>
            <a class="btn btn-primary btn-sm text-white my-2" data-toggle="modal" data-target="#tambah">Tambah Data</a>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th scope="col">#</th>
                                <th scope="col">Aplikasi</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Photo Preview</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($aplikasi as $app) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $app['nama_app']; ?></td>
                                    <td class="text-justify"><?= $app['detail']; ?></td>
                                    <td><img style="height:100px; width:auto" src="<?= base_url(); ?>img/app/<?= $app['photo_preview'] ?>" alt=""></td>
                                    <td>
                                        <a href="<?= base_url(); ?>admin/editPage/<?= $app['id'] ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="<?= base_url(); ?>admin/deleteData/<?= $app['id'] ?>/<?= $app['photo_preview'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('r u fuckin sure to delete this shit?????')"><i class="fa fa-trash"></i></a>
                                    </td>
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


<!-- main content area end -->
<!-- modal -->
<div class="modal" id="tambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-row" action="<?= base_url(); ?>admin/addData" method="post" enctype="multipart/form-data">
                    <div class="form-group col-12">
                        <label for="nama">Nama Aplikasi</label>
                        <input type="text" class="form-control" id="nama_app" name="nama_app">
                    </div>
                    <div class="form-group col-12">
                        <label for="detail">Detail Aplikasi</label>
                        <textarea class="form-control" id="detail" rows="4" name="detail"></textarea>
                    </div>
                    <div class="form-group col-6">
                        <label for="p_preview">Photo Preview</label>
                        <input type="file" class="form-control-file" id="p_preview" name="photo" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="v_preview">video Preview</label>
                        <input type="file" class="form-control-file" id="v_preview">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" name="save">Save changes</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- modal end -->