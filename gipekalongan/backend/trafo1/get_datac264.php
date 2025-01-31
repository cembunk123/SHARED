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
$query = "SELECT * FROM trafo1 WHERE bay='trafo1'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $bftoscada = $row[array_keys($row)[3]];
    $dcf_p = $row[array_keys($row)[4]];
    $ac_dcfailpp = $row[array_keys($row)[5]];
    $brftoscada = $row[array_keys($row)[6]];
    $cb_lpa = $row[array_keys($row)[7]];
    $cb_lpb = $row[array_keys($row)[8]];
    $tcsa = $row[array_keys($row)[9]];
    $cbsf = $row[array_keys($row)[10]];
    $ac_dcfailcb = $row[array_keys($row)[11]];
    $bcuf = $row[array_keys($row)[12]];
    $bcurf = $row[array_keys($row)[13]];
    $swf = $row[array_keys($row)[14]];
    $swrf = $row[array_keys($row)[15]];
    $lto = $row[array_keys($row)[16]];
    $difft = $row[array_keys($row)[17]];
    $revhvt = $row[array_keys($row)[18]];
    $revlvt = $row[array_keys($row)[19]];
    $ocrhvt = $row[array_keys($row)[20]];
    $ocrlvt = $row[array_keys($row)[21]];
    $buca = $row[array_keys($row)[22]];
    $bcut = $row[array_keys($row)[23]];
    $otia = $row[array_keys($row)[24]];
    $otit = $row[array_keys($row)[25]];
    $wtia = $row[array_keys($row)[26]];
    $wtit = $row[array_keys($row)[27]];
    $olt = $row[array_keys($row)[28]];
    $ol = $row[array_keys($row)[29]];
    $cff = $row[array_keys($row)[30]];
    $omf = $row[array_keys($row)[31]];
    $avrf = $row[array_keys($row)[32]];
    $fansuppf = $row[array_keys($row)[33]];
    $prt = $row[array_keys($row)[34]];
    $tap = $row[array_keys($row)[35]];
}

// Mengirim data sebagai JSON
$datac264 = [
    'bftoscada' => $bftoscada,
    'dcf_p' => $dcf_p,
    'ac_dcfailpp' => $ac_dcfailpp,
    'brftoscada' => $brftoscada,
    'cb_lpa' => $cb_lpa,
    'cb_lpb' => $cb_lpb,
    'tcsa' => $tcsa,
    'cbsf' => $cbsf,
    'ac_dcfailcb' => $ac_dcfailcb,
    'bcuf' => $bcuf,
    'bcurf' => $bcurf,
    'swf' => $swf,
    'swrf' => $swrf,
    'lto' => $lto,
    'difft' => $difft,
    'revhvt' => $revhvt,
    'revlvt' => $revlvt,
    'ocrhvt' => $ocrhvt,
    'ocrlvt' => $ocrlvt,
    'buca' => $buca,
    'bcut' => $bcut,
    'otia' => $otia,
    'otit' => $otit,
    'wtia' => $wtia,
    'wtit' => $wtit,
    'olt' => $olt,
    'ol' => $ol,
    'cff' => $cff,
    'omf' => $omf,
    'avrf' => $avrf,
    'fansuppf' => $fansuppf,
    'prt' => $prt,
    'tap' => $tap
];

// Mengembalikan data dalam format JSON
echo json_encode($datac264);

// Menutup koneksi ke database
$conn->close();
?>