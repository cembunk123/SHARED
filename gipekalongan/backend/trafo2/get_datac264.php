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
$query = "SELECT * FROM trafo2 WHERE bay='trafo2'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $bftoscada = $row[array_keys($row)[3]];
    $dcf_p = $row[array_keys($row)[4]];
    $brftoscada = $row[array_keys($row)[5]];
    $cb_lpa = $row[array_keys($row)[6]];
    $tcsa = $row[array_keys($row)[7]];
    $bcuf = $row[array_keys($row)[8]];
    $bcurf = $row[array_keys($row)[9]];
    $sf = $row[array_keys($row)[10]];
    $srf = $row[array_keys($row)[11]];
    $lto = $row[array_keys($row)[12]];
    $difft = $row[array_keys($row)[13]];
    $revhvt = $row[array_keys($row)[14]];
    $revlvt = $row[array_keys($row)[15]];
    $ocrhvt = $row[array_keys($row)[16]];
    $ocrlvt = $row[array_keys($row)[17]];
    $bca = $row[array_keys($row)[18]];
    $bct = $row[array_keys($row)[19]];
    $otia = $row[array_keys($row)[20]];
    $otit = $row[array_keys($row)[21]];
    $wta = $row[array_keys($row)[22]];
    $wtt = $row[array_keys($row)[23]];
    $jt = $row[array_keys($row)[24]];
    $spt = $row[array_keys($row)[25]];
    $fan_fail = $row[array_keys($row)[26]];
    $mcbdf = $row[array_keys($row)[27]];
    $tap = $row[array_keys($row)[28]];
}

// Mengirim data sebagai JSON
$datac264 = [
    'bftoscada' => $bftoscada,
    'dcf_p' => $dcf_p,
    'brftoscada' => $brftoscada,
    'cb_lpa' => $cb_lpa,
    'tcsa' => $tcsa,
    'bcuf' => $bcuf,
    'bcurf' => $bcurf,
    'sf' => $sf,
    'srf' => $srf,
    'lto' => $lto,
    'difft' => $difft,
    'revhvt' => $revhvt,
    'revlvt' => $revlvt,
    'ocrhvt' => $ocrhvt,
    'ocrlvt' => $ocrlvt,
    'bca' => $bca,
    'bct' => $bct,
    'otia' => $otia,
    'otit' => $otit,
    'wta' => $wta,
    'wtt' => $wtt,
    'jt' => $jt,
    'spt' => $spt,
    'fan_fail' => $fan_fail,
    'mcbdf' => $mcbdf,
    'tap' => $tap,
];

// Mengembalikan data dalam format JSON
echo json_encode($datac264);

// Menutup koneksi ke database
$conn->close();
?>