<div class="container my-2">
    <div class="row">
        <div class="col-4">
            <div class="card text-white bg-info">
                <div class="card-header">
                    <h4 class="text-center"><?= $komplain['website'] ?> </h4>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama : <?= $komplain['nama_client'] ?></li>
                    <li class="list-group-item">Telp : <?= $komplain['nomor_client'] ?></li>
                    <li class="list-group-item">Email : <?= $komplain['email'] ?></li>
                </ul>
                <div class="card-body ">
                    <div class="card-title">Detail Komplain</div>
                    <div class="card-text ">
                        <p class="text-justify text-white"><?= $komplain['komplain'] ?> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="slider">
                <?php foreach ($detail as $row) : ?>
                    <div class="box"><a href="<?= base_url() ?>img/komplain/<?= $row['gambar']; ?>"><img class="mx-auto d-block" src="<?= base_url() ?>img/komplain/<?= $row['gambar']; ?>" style="height:30em" /></a></div>
                <?php endforeach; ?>
            </div>
            <div class="menu">

                <?php
                $i = 1;
                foreach ($detail as $row) : ?>
                    <a href="#" data-picindex="<?= $i; ?>">
                        <img src="<?= base_url() ?>img/komplain/<?= $row['gambar']; ?>" style="height:60px;width:auto">
                    </a>
                <?php $i++;
                endforeach; ?>
            </div>
        </div>
    </div>

</div>