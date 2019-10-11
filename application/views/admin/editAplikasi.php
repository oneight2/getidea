<?php
if (!$this->session->userdata('login') == true) {
    redirect('admin');
}
?>
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
        <div class="card my-2">
            <div class="card-header">
                <h5>Edit Aplikasi</h5>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart('admin/editData'); ?>
                <input type="hidden" value="<?= $aplikasi['id']; ?>" name="id">
                <input type="hidden" value="<?= $aplikasi['photo_preview']; ?>" name="photo_old">
                <div class="form-group col-12">
                    <label for="nama">Nama Aplikasi</label>
                    <input type="text" class="form-control" id="nama_app" name="nama_app" value="<?= $aplikasi['nama_app']; ?>">
                </div>
                <div class="form-group col-12">
                    <label for="detail">Detail Aplikasi</label>
                    <textarea class="form-control" id="detail" rows="4" name="detail"><?= $aplikasi['detail']; ?></textarea>
                </div>
                <div class="form-group col-6">
                    <label for="p_preview">Photo Preview</label>
                    <input type="file" class="form-control-file" id="p_preview" name="photo">
                </div>
                <div class="form-group col-6">
                    <label for="v_preview">video Preview</label>
                    <input type="file" class="form-control-file" id="v_preview">
                </div>
                <button type="submit" class="btn btn-primary" name="save">Save changes</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>

</div>
<!-- main content area end -->

<!-- footer area start-->
<footer>
    <div class="footer-area">
        <p>© Copyright 2019. All right reserved.</p>
    </div>
</footer>
<!-- footer area end-->