<div class="container my-2">
    <div class="card bg-secondary text-white">
        <div class="card-body">
            <h4 class="header-title text-white">Pengelolaan Aplikasi</h4>
            <form class="form-row" action="<?= base_url(); ?>admin/addDataMultiple" method="post" enctype="multipart/form-data">
                <div class="form-group col-6">
                    <select class="form-control form-control-sm" name="aplikasi">
                        <option>--Pilih Aplikasi--</option>
                        <?php foreach ($aplikasi as $app) : ?>
                            <option value="<?= $app['id']; ?>"><?= $app['nama_app']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-12">
                    <label for="costumFile" class="text-white">Gambar(pilih satu atau lebih)</label><br>
                    <input type="file" id="customFile" name="gambar[]" multiple>
                </div>
                <button type="submit" class="btn btn-primary btn-sm" name="save">Save changes</button>
            </form>
        </div>
    </div>

    <?php foreach ($aplikasi as $app) : ?>
        <div class="card mt-3 bg-primary text-white">
            <div class="card-header">
                <h5><?= $app['nama_app'] ?></h5>
            </div>
            <div class="card-body">
                <!-- <h4 class="header-title text-white"></h4> -->
                <div class="card-columns">
                    <?php foreach ($gambar as $img) : ?>

                        <?php if ($img['id_aplikasi'] == $app['id']) : ?>
                            <div class="card">
                                <img src="<?= base_url() ?>img/app/<?= $img['gambar'] ?>" alt="" class="card-img-top">
                                <a href="<?= base_url(); ?>admin/deleteImg/<?= $img['id'] ?>/<?= $img['gambar'] ?>" class="btn btn-danger pull-right btn-sm">hapus</a>
                            </div>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>