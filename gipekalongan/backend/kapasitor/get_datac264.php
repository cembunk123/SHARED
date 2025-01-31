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
$query = "SELECT * FROM kapasitor WHERE bay='kapasitor'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $cf = $row[array_keys($row)[3]];
    $acf = $row[array_keys($row)[4]];
    $dcf = $row[array_keys($row)[5]];
    $bcf = $row[array_keys($row)[6]];
    $lpa = $row[array_keys($row)[7]];
    $lpb = $row[array_keys($row)[8]];
    $tcfail = $row[array_keys($row)[9]];
    $tcf = $row[array_keys($row)[10]];
    $tcs1 = $row[array_keys($row)[11]];
    $tcs2 = $row[array_keys($row)[12]];
    $lto = $row[array_keys($row)[13]];
    $cbt = $row[array_keys($row)[14]];
    $lv = $row[array_keys($row)[15]];
    $lp = $row[array_keys($row)[16]];
    $ua = $row[array_keys($row)[17]];
    $ptf = $row[array_keys($row)[18]];
    $f50o = $row[array_keys($row)[19]];
    $ovt = $row[array_keys($row)[20]];
    $cbut = $row[array_keys($row)[21]];
    $ols = $row[array_keys($row)[22]];
}

// Mengirim data sebagai JSON
$datac264 = [
    'cf' => $cf,
    'acf' => $acf,
    'dcf' => $dcf,
    'bcf' => $bcf,
    'lpa' => $lpa,
    'lpb' => $lpb,
    'tcfail' => $tcfail,
    'tcf' => $tcf,
    'tcs1' => $tcs1,
    'tcs2' => $tcs2,
    'lto' => $lto,
    'cbt' => $cbt,
    'lv' => $lv,
    'lp' => $lp,
    'ua' => $ua,
    'ptf' => $ptf,
    'f50o' => $f50o,
    'ovt' => $ovt,
    'cbut' => $cbut,
    'ols' => $ols,
];

// Mengembalikan data dalam format JSON
echo json_encode($datac264);

// Menutup koneksi ke database
$conn->close();
?>