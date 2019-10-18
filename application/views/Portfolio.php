<div class="slide">
  <div class="item">
    <?php
    $counter = 1;
    foreach ($aplikasi as $app) : ?>
      <div class="slide-item <?php if ($counter <= 1) {
                                  echo 'active';
                                } ?>">
        <div class="row no-gutters">
          <div class="col-5 p-5 d-flex align-items-center">
            <div class="info-slide p-3">
              <h2 class="sub-judul">Aplication</h2>
              <h1 class="my-4 judul"><?= $app['nama_app'] ?></h1>
              <p class="deskripsi-slide"><?= $app['detail'] ?></p>
              <a href="" class="info-btn">GO TO SITE</a>
            </div>
          </div>
          <div class="col-7 slide-gambar">
            <img class="w-100" src="<?= base_url() ?>img/app/<?= $app['photo_preview'] ?>">
          </div>
        </div>
      </div>
    <?php
      $counter++;
    endforeach; ?>
  </div>
  <div class="indicator">
    <div class="row justify-content-center slide-indicator">
      <div class="col-6">
        <div class="row no-gutters">
          <?php foreach ($aplikasi as $app) : ?>
            <div class="col-3"><img class="w-100 px-1 indicator-gambar" src="<?= base_url() ?>img/app/<?= $app['photo_preview'] ?>"></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>