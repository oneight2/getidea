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
    <div class="container">
        <h1>hahahahhah</h1>
        <?php echo $this->session->userdata('login'); ?>

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