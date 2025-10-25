
<?php
// FILE: update_blocker.php

// Mencegah caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

// Mengatur Content-Type, mungkin tidak diperlukan jika kita ingin respons kosong,
// tetapi bisa membantu jika kita ingin merespons dengan sesuatu yang formal namun gagal.
// header('Content-Type: application/json'); // Pilihan: respons JSON

// HENTIKAN EKSEKUSI TANPA MENGIRIM DATA APAPUN
// Ini adalah cara yang paling efektif untuk memblokir update sumber daya.
// Game tidak akan menerima data file update, sehingga proses update akan gagal atau terhenti.

http_response_code(200); // Atau 204 No Content, tetapi 200 lebih sering diharapkan oleh klien.

// Hentikan skrip.
die();

// Jika game mengharapkan file update biner/ZIP, respons ini akan menyebabkan kegagalan unduh.

?>

