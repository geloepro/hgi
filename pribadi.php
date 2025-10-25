<?php
// Tentukan tipe konten sebagai JSON agar aplikasi dapat memprosesnya
header('Content-Type: application/json');

// --- PENTING: GANTI NILAI INI SESUAI KEBUTUHAN SIMULASI ANDA ---
// Versi ini harus SAMA atau LEBIH RENDAH dari versi aplikasi yang ingin Anda tipu.
$current_version = "2.66";

// Tentukan apakah ada pembaruan paksa (biasanya 0=tidak, 1=ya)
$force_update = 0;

// URL tempat aplikasi akan mengunduh file APK/Resource baru (kosongkan saja)
$download_url = "";

// Pesan pembaruan (kosongkan atau isi dengan pesan 'sudah terbaru')
$update_message = "Aplikasi Anda sudah menggunakan versi terbaru.";
// -------------------------------------------------------------


// Membuat array data respons
$response_data = array(
    // Kunci 'versionCode' atau 'version' adalah yang paling penting.
    // Sesuaikan nama kuncinya jika aplikasi Anda menggunakan nama yang berbeda.
    "version" => $current_version,
    "force" => $force_update,
    "url" => $download_url,
    "msg" => $update_message,
    // Tambahkan kunci lain yang mungkin diminta atau dikembalikan oleh server asli
    "status" => 1, // 1=sukses, 0=gagal (biasanya)
    "time" => time() // Stempel waktu saat ini
);

// Mengubah array menjadi format JSON dan mencetaknya
echo json_encode($response_data);

// Akhiri skrip
exit;

?>

