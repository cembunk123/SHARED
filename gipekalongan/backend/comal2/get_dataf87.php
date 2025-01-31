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
$query = "SELECT * FROM f87 WHERE bay='comal2'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $cd = $row[array_keys($row)[3]];
    $cdar = $row[array_keys($row)[4]];
    $cdas = $row[array_keys($row)[5]];
    $cdat = $row[array_keys($row)[6]];
    $distancez1 = $row[array_keys($row)[7]];
    $dz1r = $row[array_keys($row)[8]];
    $dz1s = $row[array_keys($row)[9]];
    $dz1t = $row[array_keys($row)[10]];
    $distancez2 = $row[array_keys($row)[11]];
    $dz2r = $row[array_keys($row)[12]];
    $dz2s = $row[array_keys($row)[13]];
    $dz2t = $row[array_keys($row)[14]];
    $distancez3 = $row[array_keys($row)[15]];
    $dz3r = $row[array_keys($row)[16]];
    $dz3s = $row[array_keys($row)[17]];
    $dz3t = $row[array_keys($row)[18]];
    $def_aided = $row[array_keys($row)[19]];
    $def_send = $row[array_keys($row)[20]];
    $def_receive = $row[array_keys($row)[21]];
    $f21_aided = $row[array_keys($row)[22]];
    $f21_send = $row[array_keys($row)[23]];
    $f21_receive = $row[array_keys($row)[24]];
    $switchontofault = $row[array_keys($row)[25]];
    $ar_success = $row[array_keys($row)[26]];
    $comm_fail = $row[array_keys($row)[27]];
    $psb = $row[array_keys($row)[28]];
    $arnotready = $row[array_keys($row)[29]];
    $vtf = $row[array_keys($row)[30]];
    $tpf = $row[array_keys($row)[31]];
    $arip = $row[array_keys($row)[32]];
    $spar = $row[array_keys($row)[33]];
    $tpar = $row[array_keys($row)[34]];
}

// Mengirim data sebagai JSON
$dataf21 = [
    'cd' => $cd,
    'cdar' => $cdar,
    'cdas' => $cdas,
    'cdat' => $cdat,
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
    'def_aided' => $def_aided,
    'def_send' => $def_send,
    'def_receive' => $def_receive,
    'f21_aided' => $f21_aided,
    'f21_send' => $f21_send,
    'f21_receive' => $f21_receive,
    'switchontofault' => $switchontofault,
    'ar_success' => $ar_success,
    'comm_fail' => $comm_fail,
    'psb' => $psb,
    'arnotready' => $arnotready,
    'vtf' => $vtf,
    'tpf' => $tpf,
    'arip' => $arip,
    'spar' => $spar,
    'tpar' => $tpar
];

// Mengembalikan data dalam format JSON
echo json_encode($dataf21);

// Menutup koneksi ke database
$conn->close();
?>