<?php
// Penggunaan Dasar fungsi die()
if (file_exists('file_important.txt')) {
    echo "File ditemukan.";
} else {
    die("Error: File tidak ditemukan, dan logika selanjutnya tidak akan dieksekusi.");
}


// // Menggabungkan dengan fungsi exit()
// if ($koneksi_database == false) {
//     exit(1); // menghentikan skrip dengan kode keluar 1
// }
// // Memahami Output Buffering
// ob_start();
// echo "Ini adalah output buffer.";

// // Kondisi tertentu
// if ($error) {
//     ob_end_clean(); // bersihkan output buffer
//     die("Skrip dihentikan karena error.");
// }
