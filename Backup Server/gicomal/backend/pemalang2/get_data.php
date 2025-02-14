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
$query = "SELECT * FROM boolean_line WHERE bay='pemalang2'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $f87lfail = $row[array_keys($row)[3]];
    $f87lalarm = $row[array_keys($row)[4]];
    $f50fail = $row[array_keys($row)[5]];
    $f50alarm = $row[array_keys($row)[6]];
    $mcbac = $row[array_keys($row)[7]];
    $auxdcsupply = $row[array_keys($row)[8]];
    $q21q22close = $row[array_keys($row)[9]];
    $cbsringchargefail = $row[array_keys($row)[10]];
    $cbmotormcbtrip = $row[array_keys($row)[11]];
    $springfailR = $row[array_keys($row)[12]];
    $springfailS = $row[array_keys($row)[13]];
    $springfailT = $row[array_keys($row)[14]];
    $sf6block = $row[array_keys($row)[15]];
    $tcs2block = $row[array_keys($row)[16]];
    $sf6alarm = $row[array_keys($row)[17]];
    $cbalarmac = $row[array_keys($row)[18]];
    $poledis = $row[array_keys($row)[19]];
    $q21motor = $row[array_keys($row)[20]];
    $q21control = $row[array_keys($row)[21]];
    $q22motor = $row[array_keys($row)[22]];
    $q22control = $row[array_keys($row)[23]];
    $q28motor = $row[array_keys($row)[24]];
    $q28control = $row[array_keys($row)[25]];
    $tcs1r = $row[array_keys($row)[26]];
    $tcs1s = $row[array_keys($row)[27]];
    $tcs1t = $row[array_keys($row)[28]];
    $tcs2r = $row[array_keys($row)[29]];
    $tcs2s = $row[array_keys($row)[30]];
    $tcs2t = $row[array_keys($row)[31]];
    $motormcb = $row[array_keys($row)[32]];
    $vtmcb = $row[array_keys($row)[33]];
    $protsupply = $row[array_keys($row)[34]];
    $ctrlsupply = $row[array_keys($row)[35]];
    $k861op = $row[array_keys($row)[36]];
    $k862op = $row[array_keys($row)[37]];
    $k863op = $row[array_keys($row)[38]];
    $statQ21 = $row[array_keys($row)[39]];
    $statQ22 = $row[array_keys($row)[40]];
    $statQ50 = $row[array_keys($row)[41]];
    $statQ28 = $row[array_keys($row)[42]];
    $statQ38 = $row[array_keys($row)[43]];
    $ocrop = $row[array_keys($row)[44]];
    $gfrop1 = $row[array_keys($row)[45]];
    $gfrop2 = $row[array_keys($row)[46]];
    $gfrop3 = $row[array_keys($row)[47]];
    $gfrop4 = $row[array_keys($row)[48]];
    $r1 = $row[array_keys($row)[49]];
    $r2 = $row[array_keys($row)[50]];
    $r3 = $row[array_keys($row)[51]];
    $r4 = $row[array_keys($row)[52]];
    $r5 = $row[array_keys($row)[53]];
    $r6 = $row[array_keys($row)[54]];
    $s1 = $row[array_keys($row)[55]];
    $s2 = $row[array_keys($row)[56]];
    $s3 = $row[array_keys($row)[57]];
    $s4 = $row[array_keys($row)[58]];
    $s5 = $row[array_keys($row)[59]];
    $s6 = $row[array_keys($row)[60]];
    $t1 = $row[array_keys($row)[61]];
    $t2 = $row[array_keys($row)[62]];
    $t3 = $row[array_keys($row)[63]];
    $t4 = $row[array_keys($row)[64]];
    $t5 = $row[array_keys($row)[65]];
    $t6 = $row[array_keys($row)[66]];
    $arlockout = $row[array_keys($row)[67]];
    $cbunhealthy = $row[array_keys($row)[68]];
    $aidedsend = $row[array_keys($row)[69]];
    $defsend = $row[array_keys($row)[70]];
    $aidedreceive = $row[array_keys($row)[71]];
    $defreceive = $row[array_keys($row)[72]];
    $diffop = $row[array_keys($row)[73]];
    $z1op = $row[array_keys($row)[74]];
    $z2op = $row[array_keys($row)[75]];
    $z3op = $row[array_keys($row)[76]];
    $sotfop = $row[array_keys($row)[77]];
    $autoreclose = $row[array_keys($row)[78]];
    $aidedop = $row[array_keys($row)[79]];
    $defop = $row[array_keys($row)[80]];
    $psb = $row[array_keys($row)[81]];
    $fof87lalarm = $row[array_keys($row)[82]];
    $r_diff = $row[array_keys($row)[83]];
    $s_diff = $row[array_keys($row)[84]];
    $t_diff = $row[array_keys($row)[85]];
    $olsop = $row[array_keys($row)[86]];
    $bcufail = $row[array_keys($row)[87]];
    $etherfail = $row[array_keys($row)[88]];
    $buscouplerclose = $row[array_keys($row)[89]];
}

// Mengirim data sebagai JSON
$data = [
    'f87lfail' => $f87lfail,
    'f87lalarm' => $f87lalarm,
    'f50fail' => $f50fail,
    'f50alarm' => $f50alarm,
    'mcbac' => $mcbac,
    'auxdcsupply' => $auxdcsupply,
    'q21q22close' => $q21q22close,
    'cbsringchargefail' => $cbsringchargefail,
    'cbmotormcbtrip' => $cbmotormcbtrip,
    'springfailR' => $springfailR,
    'springfailS' => $springfailS,
    'springfailT' => $springfailT,
    'sf6block' => $sf6block,
    'tcs2block' => $tcs2block,
    'sf6alarm' => $sf6alarm,
    'cbalarmac' => $cbalarmac,
    'poledis' => $poledis,
    'q21motor' => $q21motor,
    'q21control' => $q21control,
    'q22motor' => $q22motor,
    'q22control' => $q22control,
    'q28motor' => $q28motor,
    'q28control' => $q28control,
    'tcs1r' => $tcs1r,
    'tcs1s' => $tcs1s,
    'tcs1t' => $tcs1t,
    'tcs2r' => $tcs2r,
    'tcs2s' => $tcs2s,
    'tcs2t' => $tcs2t,
    'motormcb' => $motormcb,
    'vtmcb' => $vtmcb,
    'protsupply' => $protsupply,
    'ctrlsupply' => $ctrlsupply,
    'k861op' => $k861op,
    'k862op' => $k862op,
    'k863op' => $k863op,
    'statQ21' => $statQ21,
    'statQ22' => $statQ22,
    'statQ50' => $statQ50,
    'statQ28' => $statQ28,
    'statQ38' => $statQ38,
    'bcufail' => $bcufail,
    'etherfail' => $etherfail,
    'buscouplerclose' => $buscouplerclose,
    'olsop' => $olsop,
    'arlockout' => $arlockout,
    'cbunhealthy' => $cbunhealthy,
    'aidedsend' => $aidedsend,
    'defsend' => $defsend,
    'aidedreceive' => $aidedreceive,
    'defreceive' => $defreceive,
    'diffop' => $diffop,
    'z1op' => $z1op,
    'z2op' => $z2op,
    'z3op' => $z3op,
    'sotfop' => $sotfop,
    'autoreclose' => $autoreclose,
    'aidedop' => $aidedop,
    'defop' => $defop,
    'psb' => $psb,
    'fof87lalarm' => $fof87lalarm,
    'r_diff' => $r_diff,
    's_diff' => $s_diff,
    't_diff' => $t_diff,
    'ocrop' => $ocrop,
    'gfrop1' => $gfrop1,
    'gfrop2' => $gfrop2,
    'gfrop3' => $gfrop3,
    'gfrop4' => $gfrop4,
    'r1' => $r1,
    'r2' => $r2,
    'r3' => $r3,
    'r4' => $r4,
    'r5' => $r5,
    'r6' => $r6,
    's1' => $s1,
    's2' => $s2,
    's3' => $s3,
    's4' => $s4,
    's5' => $s5,
    's6' => $s6,
    't1' => $t1,
    't2' => $t2,
    't3' => $t3,
    't4' => $t4,
    't5' => $t5,
    't6' => $t6
];

// Mengembalikan data dalam format JSON
echo json_encode($data);

// Menutup koneksi ke database
$conn->close();
?>