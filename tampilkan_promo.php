<?php
// Sertakan file koneksi
include 'conf/koneksi.php';

// Query untuk mengambil data informasi
$sql = "SELECT judul, kepala, tubuh, ekor, foto 
        FROM tb_informasi 
        WHERE id % 2 = 0";

$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {


    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        
      <section class="list-career bg-white">
        <div class="container">
          <div class="col-md-5">
            <div class="image-career">
              <img src="../admin-rsia/foto/' . htmlspecialchars($row['foto']) . '" alt="foto_informasi">
            </div>
          </div>
          <div class="col-md-7">
            <div class="content">
              <div class="title">
                    ' . htmlspecialchars($row['judul']) . '
              </div>
              <div class="desc">
                    ' . htmlspecialchars($row['kepala']) . '
              </div>
              <div class="desc">
                    ' . htmlspecialchars($row['tubuh']) . '
              </div>
              <div class="desc">
                    ' . htmlspecialchars($row['ekor']) . '
              </div>
              <a href="#" class="btn btn-lg btn-apecsa-red">
                <i class="fa fa-search"></i>
                Lihat detail
              </a>
            </div>
          </div>
        </div>
      </section>

        ';
    }

} else {
    echo '<p>Tidak ada data dokter yang ditemukan.</p>';
}

// Tutup koneksi
mysqli_close($koneksi);
?>
