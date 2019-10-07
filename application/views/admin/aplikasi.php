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
                                    <th scope="col">Nama Aplikasi</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Simak UNWIM</td>
                                    <td class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur numquam ducimus quaerat, recusandae adipisci sed, ex quasi rerum molestias ea dolorem. Quisquam corporis, harum architecto, ea eveniet ducimus illum suscipit maxime, ad autem quia ut vero incidunt soluta exercitationem ex enim consequatur culpa accusamus impedit? Impedit, dolores, adipisci vitae modi commodi recusandae ducimus ipsa ea atque magni eum, numquam nostrum. Libero corrupti animi neque fugit ullam assumenda aliquid itaque amet maxime, quod rerum doloremque, aut a facilis asperiores impedit repellat vel, praesentium at. Reiciendis, ad sunt. Culpa vero iure voluptas atque, obcaecati repellat. Consequuntur, ut. Quisquam explicabo illo aut at eum soluta accusamus blanditiis commodi molestiae architecto, in facilis esse animi nesciunt quam iure mollitia deserunt deleniti doloremque perferendis omnis? Dolore quia incidunt velit blanditiis laudantium pariatur quaerat, accusantium ex dicta, at fugit est itaque doloribus inventore eum voluptates. Minima eum, deserunt illum sequi, minus asperiores cum labore omnis, nobis enim quisquam libero! Similique quibusdam maiores sequi possimus odit deserunt facere ab quae repudiandae aut harum a assumenda, quos dolorum pariatur amet aspernatur obcaecati sit consequuntur! Dolorum numquam debitis ab officiis fuga adipisci repellendus, saepe harum sit accusamus consequatur inventore voluptatum in ullam ipsum cupiditate excepturi! Qui nulla vel quos!</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
                <form class="form-row">
                    <div class="form-group col-12">
                        <label for="nama">Nama Aplikasi</label>
                        <input type="text" class="form-control" id="nama" placeholder="name@example.com">
                    </div>
                    <div class="form-group col-12">
                        <label for="detail">Detail Aplikasi</label>
                        <textarea class="form-control" id="detail" rows="4"></textarea>
                    </div>
                    <div class="form-group col-6">
                        <label for="p_preview">Photo Preview</label>
                        <input type="file" class="form-control-file" id="p_preview">
                    </div>
                    <div class="form-group col-6">
                        <label for="v_preview">video Preview</label>
                        <input type="file" class="form-control-file" id="v_preview">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
<!-- footer area start-->
<footer>
    <div class="footer-area">
        <p>© Copyright 2019. All right reserved.</p>
    </div>
</footer>
<!-- footer area end-->