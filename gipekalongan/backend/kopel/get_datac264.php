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
$query = "SELECT * FROM kopel WHERE bay='kopel'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $bftoscada = $row[array_keys($row)[3]];
    $bb1 = $row[array_keys($row)[4]];
    $bb2 = $row[array_keys($row)[5]];
    $dcf_p = $row[array_keys($row)[6]];
    $vtf = $row[array_keys($row)[7]];
    $idf = $row[array_keys($row)[8]];
    $brftoscada = $row[array_keys($row)[9]];
    $cb_lpa = $row[array_keys($row)[10]];
    $cb_lpb = $row[array_keys($row)[11]];
    $clod = $row[array_keys($row)[12]];
    $tcs1a = $row[array_keys($row)[13]];
    $tcs2a = $row[array_keys($row)[14]];
    $cbdf = $row[array_keys($row)[15]];
    $mto_k401 = $row[array_keys($row)[16]];
    $mto_k404 = $row[array_keys($row)[17]];
    $ols = $row[array_keys($row)[18]];
    $f50_1 = $row[array_keys($row)[19]];
    $f50_1_r = $row[array_keys($row)[20]];
    $f50_1_s = $row[array_keys($row)[21]];
    $f50_1_t = $row[array_keys($row)[22]];
    $f51n = $row[array_keys($row)[23]];
}

// Mengirim data sebagai JSON
$datac264 = [
    'bftoscada' => $bftoscada,
    'bb1' => $bb1,
    'bb2' => $bb2,
    'dcf_p' => $dcf_p,
    'vtf' => $vtf,
    'idf' => $idf,
    'brftoscada' => $brftoscada,
    'cb_lpa' => $cb_lpa,
    'cb_lpb' => $cb_lpb,
    'clod' => $clod,
    'tcs1a' => $tcs1a,
    'tcs2a' => $tcs2a,
    'cbdf' => $cbdf,
    'mto_k401' => $mto_k401,
    'mto_k404' => $mto_k404,
    'ols' => $ols,
    'f50_1' => $f50_1,
    'f50_1_r' => $f50_1_r,
    'f50_1_s' => $f50_1_s,
    'f50_1_t' => $f50_1_t,
    'f51n' => $f51n,
];

// Mengembalikan data dalam format JSON
echo json_encode($datac264);

// Menutup koneksi ke database
$conn->close();
?>