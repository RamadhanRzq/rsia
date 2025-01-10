<?php
// Sertakan file koneksi
include 'conf/koneksi.php';

// Query untuk mengambil data informasi
$sql = "SELECT judul, foto, kepala FROM tb_informasi";

$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        
                      <div class="position-relative">
                            <img class="img-fluid w-100" src="../admin-rsia/foto/' . htmlspecialchars($row['foto']) . '"  style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4 m-0" href="">' . htmlspecialchars($row['judul']) . '</a>
                            </div>
                        </div>

        ';
    }

} else {
    echo '<p class="text-center">Tidak ada data dokter yang ditemukan.</p>'; // Text center jika data kosong
}

// Tutup koneksi
mysqli_close($koneksi);
?>

