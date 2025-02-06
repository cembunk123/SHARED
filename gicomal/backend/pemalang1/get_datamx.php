<?php
// Koneksi ke database
$servername = "localhost";
$username = "gicomal";
$password = "comal";
$dbname = "gicomal";
$port = 3306;

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data
$query = "SELECT * FROM mx WHERE bay='pemalang1'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $ir = $row[array_keys($row)[3]];
    $is = $row[array_keys($row)[4]];
    $it = $row[array_keys($row)[5]];
    $vr = $row[array_keys($row)[6]];
    $vs = $row[array_keys($row)[7]];
    $vt = $row[array_keys($row)[8]];
    $vrs = $row[array_keys($row)[9]];
    $vst = $row[array_keys($row)[10]];
    $vtr = $row[array_keys($row)[11]];
    $mw = $row[array_keys($row)[12]];
    $mvar = $row[array_keys($row)[13]];
}

// Mengirim data sebagai JSON
$datamx = [
    'ir' => $ir,
    'is' => $is,
    'it' => $it,
    'vr' => $vr,
    'vs' => $vs,
    'vt' => $vt,
    'vrs' => $vrs,
    'vst' => $vst,
    'vtr' => $vtr,
    'mw' => $mw,
    'mvar' => $mvar,
];

// Mengembalikan data dalam format JSON
echo json_encode($datamx);

// Menutup koneksi ke database
$conn->close();
?>