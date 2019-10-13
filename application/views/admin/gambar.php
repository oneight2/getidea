<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- page container area start -->

<!-- main content area start -->
<div class="main-content">
    <!-- header area start -->
    <div class="header-area">
        <div class="row align-items-center">
            <!-- nav and search button -->
            <div class="col-md-6 col-sm-8 clearfix">
                <div class="nav-btn pull-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="search-box pull-left">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search..." required>
                        <i class="ti-search"></i>
                    </form>
                </div>
            </div>
            <!-- profile info & task notification -->

        </div>
    </div>
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
                <div class="card-body">
                    <h4 class="header-title text-white"><?= $app['nama_app'] ?></h4>
                    <div class="card-columns">
                        <?php foreach ($gambar as $img) : ?>

                            <?php if ($img['id_aplikasi'] == $app['id']) : ?>
                                <div class="card">
                                    <img src="<?= base_url() ?>img/moreApp/<?= $img['gambar'] ?>" alt="" class="card-img-top">
                                </div>
                            <?php endif; ?>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>