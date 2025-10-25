<?php
// 1. Tentukan Versi Aplikasi Saat Ini
// GANTI angka ini dengan 'versionCode' yang saat ini terpasang di aplikasi pengguna.
// Dengan mencocokkan angka ini, aplikasi akan menganggap dirinya sudah terbaru.
$current_app_version_code = 2660; 
$current_app_version_name = "2.66";

// 2. Set Header untuk Format JSON
// Ini memberitahu aplikasi/klien bahwa respons yang dikirim adalah data JSON.
header('Content-Type: application/json');

// 3. Buat Array Data Versi
$response_data = [
    // Ini adalah nilai yang akan dibaca aplikasi. Jika sama dengan versinya,
    // maka dianggap tidak ada update.
    "versionCode" => $current_app_version_code, 
    
    // Nama versi (hanya untuk tampilan, tidak terlalu penting dalam logika update)
    "versionName" => $current_app_version_name, 
    
    // Penting! Set 'forcedUpdate' ke false.
    // Jika ini 'true', aplikasi mungkin tetap memunculkan notifikasi walau versi sama.
    "forcedUpdate" => false, 
    
    // Biarkan URL unduhan kosong atau setel ke string kosong
    "downloadUrl" => "" 
];

// 4. Encode Array ke Format JSON dan Cetak (Kirim ke Aplikasi)
echo json_encode($response_data);

// Opsional: Hentikan eksekusi skrip setelah mengirim respons
exit;
?>

