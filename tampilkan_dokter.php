<?php
// Sertakan file koneksi
include 'conf/koneksi.php';

// Query untuk mengambil data dokter
$sql = "SELECT foto, nama, spesialis FROM tb_dokter";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="col-md-3">
                  <div class="box-user">
                    <div class="image">
                      <img src="../admin-rsia/foto/' . htmlspecialchars($row['foto']) . '" alt="foto_dokter">
                      <div class="overlay">
                        <div class="box-info">
                          <div class="name">' . htmlspecialchars($row['nama']) . '</div>
                          <div class="position">' . htmlspecialchars($row['spesialis']) . '</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        ';
    }
} else {
    echo '<p>Tidak ada data dokter yang ditemukan.</p>';
}

// Tutup koneksi
mysqli_close($koneksi);
?>
