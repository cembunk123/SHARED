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
$query = "SELECT * FROM f21 WHERE bay='batang2'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $spar = $row[array_keys($row)[3]];
    $tpar = $row[array_keys($row)[4]];
    $distancez1 = $row[array_keys($row)[5]];
    $dz1r = $row[array_keys($row)[6]];
    $dz1s = $row[array_keys($row)[7]];
    $dz1t = $row[array_keys($row)[8]];
    $distancez2 = $row[array_keys($row)[9]];
    $dz2r = $row[array_keys($row)[10]];
    $dz2s = $row[array_keys($row)[11]];
    $dz2t = $row[array_keys($row)[12]];
    $distancez3 = $row[array_keys($row)[13]];
    $dz3r = $row[array_keys($row)[14]];
    $dz3s = $row[array_keys($row)[15]];
    $dz3t = $row[array_keys($row)[16]];
    $f21_aided = $row[array_keys($row)[17]];
    $f21_aided_rx = $row[array_keys($row)[18]];
    $f21_aided_tx = $row[array_keys($row)[19]];
    $r8_psb = $row[array_keys($row)[20]];
    $r15_sotf = $row[array_keys($row)[21]];
    $ar_prog_3_phs = $row[array_keys($row)[22]];
    $ar_prog_1_phs = $row[array_keys($row)[23]];
    $cb_unhealthy = $row[array_keys($row)[24]];
}

// Mengirim data sebagai JSON
$dataf21 = [
    'spar' => $spar,
    'tpar' => $tpar,
    'distancez1' => $distancez1,
    'dz1r' => $dz1r,
    'dz1s' => $dz1s,
    'dz1t' => $dz1t,
    'distancez2' => $distancez2,
    'dz2r' => $dz2r,
    'dz2s' => $dz2s,
    'dz2t' => $dz2t,
    'distancez3' => $distancez3,
    'dz3r' => $dz3r,
    'dz3s' => $dz3s,
    'dz3t' => $dz3t,
    'f21_aided' => $f21_aided,
    'f21_aided_rx' => $f21_aided_rx,
    'f21_aided_tx' => $f21_aided_tx,
    'r8_psb' => $r8_psb,
    'r15_sotf' => $r15_sotf,
    'ar_prog_3_phs' => $ar_prog_3_phs,
    'ar_prog_1_phs' => $ar_prog_1_phs,
    'cb_unhealthy' => $cb_unhealthy
];

// Mengembalikan data dalam format JSON
echo json_encode($dataf21);

// Menutup koneksi ke database
$conn->close();
?>