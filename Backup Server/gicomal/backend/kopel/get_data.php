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
$query = "SELECT * FROM boolean_cpl WHERE bay='kopel'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $sf6blok = $row[array_keys($row)[3]];
    $sf6alarm = $row[array_keys($row)[4]];
    $springuncharge = $row[array_keys($row)[5]];
    $mtrmcbtrip = $row[array_keys($row)[6]];
    $q1mtrtrip = $row[array_keys($row)[7]];
    $q1ctrltrip = $row[array_keys($row)[8]];
    $q2mtrtrip = $row[array_keys($row)[9]];
    $q2ctrltrip = $row[array_keys($row)[10]];
    $mcbactrip = $row[array_keys($row)[11]];
    $f51fail = $row[array_keys($row)[12]];
    $f51alarm = $row[array_keys($row)[13]];
    $tcs1 = $row[array_keys($row)[14]];
    $tcs2 = $row[array_keys($row)[15]];
    $protsuppfail = $row[array_keys($row)[16]];
    $ctrl1suppfail = $row[array_keys($row)[17]];
    $ctrl2suppfail = $row[array_keys($row)[18]];
    $k861 = $row[array_keys($row)[19]];
    $k862 = $row[array_keys($row)[20]];
    $k863 = $row[array_keys($row)[21]];
    $statQ21 = $row[array_keys($row)[22]];
    $statQ22 = $row[array_keys($row)[23]];
    $statQ50 = $row[array_keys($row)[24]];
    $ocrop = $row[array_keys($row)[25]];
    $gfrop = $row[array_keys($row)[26]];
    $bcufail = $row[array_keys($row)[27]];
    $etherfail = $row[array_keys($row)[28]];
}

// Mengirim data sebagai JSON
$data = [
    'sf6blok' => $sf6blok,
    'sf6alarm' => $sf6alarm,
    'springuncharge' => $springuncharge,
    'mtrmcbtrip' => $mtrmcbtrip,
    'q1mtrtrip' => $q1mtrtrip,
    'q1ctrltrip' => $q1ctrltrip,
    'q2mtrtrip' => $q2mtrtrip,
    'q2ctrltrip' => $q2ctrltrip,
    'mcbactrip' => $mcbactrip,
    'f51fail' => $f51fail,
    'f51alarm' => $f51alarm,
    'tcs1' => $tcs1,
    'tcs2' => $tcs2,
    'protsuppfail' => $protsuppfail,
    'ctrl1suppfail' => $ctrl1suppfail,
    'ctrl2suppfail' => $ctrl2suppfail,
    'k861' => $k861,
    'k862' => $k862,
    'k863' => $k863,
    'statQ21' => $statQ21,
    'statQ22' => $statQ22,
    'statQ50' => $statQ50,
    'ocrop' => $ocrop,
    'gfrop' => $gfrop,
    'bcufail' => $bcufail,
    'etherfail' => $etherfail,
];

// Mengembalikan data dalam format JSON
echo json_encode($data);

// Menutup koneksi ke database
$conn->close();
?>