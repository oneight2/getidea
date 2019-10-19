<?php
$id = $_GET['ajax'];
$koneksi = mysqli_connect('localhost', 'root', '', 'getidea');
$gambar = mysqli_query($koneksi, 'SELECT * FROM detail_komplain WHERE id_komplain =$id');
?>
<div class="modal-body ajax">
    <div class="row">
        <?php foreach ($detail as $row) :
            var_dump($detail);
            ?>
            <div class="col-2">
                <div class="card">
                    <a class="mt-2" href="<?= base_url() ?>img/komplain/<?= $row['gambar'] ?>">
                        <img src="<?= base_url() ?>img/komplain/<?= $row['gambar'] ?>" alt="" class="card-img-top">
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>