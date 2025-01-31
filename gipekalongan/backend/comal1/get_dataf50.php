<?php
// Koneksi ke database
$servername = "localhost";
$username = "gipekalongan";
$password = "pekalongan";
$dbname = "gipekalongan";
$port = 3306;

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data
$query = "SELECT * FROM f50 WHERE bay='comal1'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $f50_1 = $row[array_keys($row)[3]];
    $f50_1_r = $row[array_keys($row)[4]];
    $f50_1_s = $row[array_keys($row)[5]];
    $f50_1_t = $row[array_keys($row)[6]];
    $f51n = $row[array_keys($row)[7]];
}

// Mengirim data sebagai JSON
$dataf50 = [
    'f50_1' => $f50_1,
    'f50_1_r' => $f50_1_r,
    'f50_1_s' => $f50_1_s,
    'f50_1_t' => $f50_1_t,
    'f51n' => $f51n,
];

// Mengembalikan data dalam format JSON
echo json_encode($dataf50);

// Menutup koneksi ke database
$conn->close();
?>