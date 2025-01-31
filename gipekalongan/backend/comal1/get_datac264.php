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
$query = "SELECT * FROM c264 WHERE bay='comal1'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $bftoscada = $row[array_keys($row)[3]];
    $cbdtf = $row[array_keys($row)[4]];
    $dcf_p = $row[array_keys($row)[5]];
    $idf = $row[array_keys($row)[6]];
    $brftoscada = $row[array_keys($row)[7]];
    $cb_lpa = $row[array_keys($row)[8]];
    $cb_lpb = $row[array_keys($row)[9]];
    $cbdf = $row[array_keys($row)[10]];
    $cbspa = $row[array_keys($row)[11]];
    $pd = $row[array_keys($row)[12]];
    $tcs1a = $row[array_keys($row)[13]];
    $tcs2a = $row[array_keys($row)[14]];
    $cbm = $row[array_keys($row)[15]];
    $mto_k404 = $row[array_keys($row)[16]];
    $mto_k405 = $row[array_keys($row)[17]];
    $mto_k401 = $row[array_keys($row)[18]];
    $f21f = $row[array_keys($row)[19]];
    $f50f = $row[array_keys($row)[20]];
    $cf = $row[array_keys($row)[21]];
    $tpa = $row[array_keys($row)[22]];
    $tpb = $row[array_keys($row)[23]];
    $bcuf = $row[array_keys($row)[24]];
    $ethl = $row[array_keys($row)[25]];
    $bcul = $row[array_keys($row)[26]];
    $arop = $row[array_keys($row)[27]];
    $ols = $row[array_keys($row)[28]];


}

// Mengirim data sebagai JSON
$datac264 = [
    'bftoscada' => $bftoscada,
    'cbdtf' => $cbdtf,
    'dcf_p' => $dcf_p,
    'idf' => $idf,
    'brftoscada' => $brftoscada,
    'cb_lpa' => $cb_lpa,
    'cb_lpb' => $cb_lpb,
    'cbdf' => $cbdf,
    'cbspa' => $cbspa,
    'pd' => $pd,
    'tcs1a' => $tcs1a,
    'tcs2a' => $tcs2a,
    'cbm' => $cbm,
    'mto_k404' => $mto_k404,
    'mto_k405' => $mto_k405,
    'mto_k401' => $mto_k401,
    'f21f' => $f21f,
    'f50f' => $f50f,
    'cf' => $cf,
    'tpa' => $tpa,
    'tpb' => $tpb,
    'bcuf' => $bcuf,
    'ethl' => $ethl,
    'bcul' => $bcul,
    'arop' => $arop,
    'ols' => $ols
];

// Mengembalikan data dalam format JSON
echo json_encode($datac264);

// Menutup koneksi ke database
$conn->close();
?>