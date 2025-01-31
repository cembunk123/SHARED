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
$query = "SELECT * FROM trafo3 WHERE bay='trafo3'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $bftoscada = $row[array_keys($row)[3]];
    $idf = $row[array_keys($row)[4]];
    $mcbmkf = $row[array_keys($row)[5]];
    $brftoscada = $row[array_keys($row)[6]];
    $cb_lpa = $row[array_keys($row)[7]];
    $tcsa = $row[array_keys($row)[8]];
    $cbsf = $row[array_keys($row)[9]];
    $bcuf = $row[array_keys($row)[10]];
    $bcurf = $row[array_keys($row)[11]];
    $swf = $row[array_keys($row)[12]];
    $swrf = $row[array_keys($row)[13]];
    $lor = $row[array_keys($row)[14]];
    $difft = $row[array_keys($row)[15]];
    $revhvt = $row[array_keys($row)[16]];
    $revlvt = $row[array_keys($row)[17]];
    $ocrhvt = $row[array_keys($row)[18]];
    $ocrlvt = $row[array_keys($row)[19]];
    $bca = $row[array_keys($row)[20]];
    $bct = $row[array_keys($row)[21]];
    $otia = $row[array_keys($row)[22]];
    $otit = $row[array_keys($row)[23]];
    $wtihva = $row[array_keys($row)[24]];
    $wtihvt = $row[array_keys($row)[25]];
    $jt = $row[array_keys($row)[26]];
    $spt = $row[array_keys($row)[27]];
    $fmsf = $row[array_keys($row)[28]];
    $mcbdf = $row[array_keys($row)[29]];
    $ola = $row[array_keys($row)[30]];
    $wtilva = $row[array_keys($row)[31]];
    $wtilvt = $row[array_keys($row)[32]];
    $avrb = $row[array_keys($row)[33]];
    $mcbpt = $row[array_keys($row)[34]];
}

// Mengirim data sebagai JSON
$datac264 = [
    'bftoscada' => $bftoscada,
    'idf' => $idf,
    'mcbmkf' => $mcbmkf,
    'brftoscada' => $brftoscada,
    'cb_lpa' => $cb_lpa,
    'tcsa' => $tcsa,
    'cbsf' => $cbsf,
    'bcuf' => $bcuf,
    'bcurf' => $bcurf,
    'swf' => $swf,
    'swrf' => $swrf,
    'lor' => $lor,
    'difft' => $difft,
    'revhvt' => $revhvt,
    'revlvt' => $revlvt,
    'ocrhvt' => $ocrhvt,
    'ocrlvt' => $ocrlvt,
    'bca' => $bca,
    'bct' => $bct,
    'otia' => $otia,
    'otit' => $otit,
    'wtihva' => $wtihva,
    'wtihvt' => $wtihvt,
    'jt' => $jt,
    'spt' => $spt,
    'fmsf' => $fmsf,
    'mcbdf' => $mcbdf,
    'ola' => $ola,
    'wtilva' => $wtilva,
    'wtilvt' => $wtilvt,
    'avrb' => $avrb,
    'mcbpt' => $mcbpt,
];

// Mengembalikan data dalam format JSON
echo json_encode($datac264);

// Menutup koneksi ke database
$conn->close();
?>