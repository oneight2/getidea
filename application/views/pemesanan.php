<div id="pemesanan">
  <img src="<?= base_url() ?>img/faq-img-1.png" alt="" class="img-pemesanan">
  <div class="container pt-5">
    <h1>Pemesanan dan Komplain</h1>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pemesanan-tab" data-toggle="tab" href="#pemesanan-btn" role="tab" aria-controls="home" aria-selected="true">Pemesanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="komplain-tab" data-toggle="tab" href="#komplain" role="tab" aria-controls="profile" aria-selected="false">Komplain</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="pemesanan-btn" role="tabpanel" aria-labelledby="pemesanan-tab">
        <div class="accordion" id="accordionExample">
          <div class="tabs">

            <input type="radio" id="tab1" name="tab-control" checked>
            <input type="radio" id="tab2" name="tab-control">
            <input type="radio" id="tab3" name="tab-control">
            <input type="radio" id="tab4" name="tab-control">
            <ul>
              <li title="Features">
                <label for="tab1" role="button">
                  <i class="fa fa-comments"></i><br>
                  <span>Diskusi Kebutuhan</span>
                </label>
              </li>
              <li title="Delivery Contents">
                <label for="tab2" role="button">
                  <i class="fa fa-dollar"></i><br>
                  <span>Administrasi</span>
                </label>
              </li>
              <li title="Shipping">
                <label for="tab3" role="button">
                  <i class="fa fa-cogs"></i><br>
                  <span>Pembangunan</span>
                </label>
              </li>
              <li title="Returns">
                <label for="tab4" role="button">
                  <i class="fa fa-check"></i><br>
                  <span>Launching & Pemeliharaan</span>
                </label>
              </li>
            </ul>

            <div class="slider">
              <div class="indicator"></div>
            </div>
            <div class="content">
              <section>
                <h2>Diskusi Kebutuhan</h2>
                <p>
                  Berbagai informasi yang berhubungan dengan aktivitas konvensional yang ingin anda ubah menjadi sistem digital berplatform websiste, disiapkan dengan sebaik baiknya, karena kami akan menggunakan informasi tersebut sebagai dasar algoritma kami. <br>
                  Hambatan atau masalah yang sering ditemui dalam aktivitas konvensional, kita diskusikan bagaimana hambatan atau masalah tersebut supaya tidak ditemui lagi dalam sistem diigital berplatfrom websiet, dengan cara mengumpulkan informasi tentang hambatan atau masalah tersebut, kemudian akan kami manipulasi. <br>
                  Dalam diskusi kebutuhan ini, kami akan membantu anda untuk sama sama menggambarkan bagaimana aktivitas konvensioanal jika sudah berubah menjadi sitem digital berplatfrom website, sehingga kebutuhan kebutuhan yang anda inginkan akan jelas.
                </p>
              </section>
              <section>
                <h2>Administrasi</h2>
                <p>
                  Setelah semua rancangan kebutuhan sudah terkumpul, selanjutnya kami akan menawarkan harga sesuai dengan rancangan kebutuhan yang sudah disepakati, jika harga tidak sesuai dengan budget anda, kita diskusikan kembali rancangan kebutuhan agar bisa mengikuti dengan budget anda. <br>
                  Semua proses diatas sudah beres, kemudian kita atur administrasi transaksi, dari mulai laporan kerja, pembayaran, hingga kontrak pemeliharaan setelah sistem digital sudah selesai dibangun.
                </p>
              </section>
              <section>
                <h2>Pembangunan</h2>
                <p>
                  Dalam pembangunan sistem digital berplatform website ini, kami akan selalu melibatkan anda, karena kepuasan anda adalah hal yang paling utama bagi kami, dengan terlibatnya anda dalam pembangunan ini, tentu semua yang anda inginkan sebelumnya akan terus terkontrol. <br>
                  Untuk waktu pembangunannya tergantung dari seberapa banyak rancangan kebutuhan yang sudah disepakati, dan dari seberapa sulit hambatan atau masalah yang ada pada aktivitas konvensional sehingga harus diselesaikan dalam sistem digital ini.
                </p>
              </section>
              <section>
                <h2>Launching & Pemeliharaan </h2>
                <p>
                  Setelah pembangunan sitem digital berplatform website ini selesai, sebelum melanjutkan ketahap berikutnya yaitu launching, terlebih dahulu anda harus menyelesaikan semua biaya.
                  Pemeliharaan sistem digital ini akan kita lakukan untuk mengoptimalkan kinerja dari sistem digital tersebut.
                </p>
              </section>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="komplain" role="tabpanel" aria-labelledby="komplain-tab">
        <div class="accordion" id="accordionExample">
          <div class="tabs">
            <div class="row">
              <div class="col-6">
                <p>Menu komplain memungkinkan pengguna untuk memberitahu developer untuk memperbaiki website yang dipesan dan memberitahu kami apa yang harus ditambahkan untuk website anda.</p>

                <img alt="ERP Implementation" class="img-fluid" src="https://finbyz.tech/files/erp-implements.svg" title="ERP Implementation">
              </div>
              <div class="col-6">
                <form action="" class="form-row" method="post" action="" enctype="multipart/form-data">
                  <div class="form-group col-6">
                    <label for="nama">Nama anda</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>
                  <div class="form-group col-6">
                    <label for="nomor">Nomor yang dapat dihubungi</label>
                    <input type="number" class="form-control" id="nomor" name="nomor">
                  </div>
                  <div class="form-group col-6">
                    <label for="email">Email yang dapat dihubungi</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="form-group col-6">
                    <label for="website">Website anda</label>
                    <input type="text" class="form-control" id="website" name="website">
                  </div>
                  <div class="form-group col-12">
                    <label for="keluhan">Komplain aplikasi</label>
                    <textarea class="form-control" id="keluhan" rows="3" name="keluhan"></textarea>
                  </div>
                  <div class="form-group col-12">
                    <label for="costumFile" class="text-white">Gambar(pilih satu atau lebih)</label><br>
                    <input type="file" id="customFile" name="gambar[]" multiple>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary pull-right" name="submit">Kirim</button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>