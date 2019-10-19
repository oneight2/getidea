<h1>Screenshoot</h1>
<div class="slider">
    <?php foreach ($detail as $row) : ?>
        <div class="box"><a href="<?= base_url() ?>img/komplain/<?= $row['gambar']; ?>"><img src="<?= base_url() ?>img/komplain/<?= $row['gambar']; ?>" /></a></div>
    <?php endforeach; ?>
</div>
<div class="menu">
    <?php
    $i = 1;
    foreach ($detail as $row) : ?>
        <a href="#" data-picindex="<?= $i; ?>">
            <img src="<?= base_url() ?>img/komplain/<?= $row['gambar']; ?>" style="height:40px;width:auto">
        </a>
    <?php $i++;
    endforeach; ?>
</div>