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
$query = "SELECT * FROM boolean_trf WHERE bay='trafo1'";
$result = $conn->query($query);

$first_column_value = null; // Variabel untuk menyimpan nilai kolom pertama

if ($result->num_rows > 0) {
    // Ambil baris pertama
    $row = $result->fetch_assoc();

    // Menyimpan nilai kolom pertama ke dalam variabel
    $d40etherfail = $row[array_keys($row)[3]];
    $f87tfail = $row[array_keys($row)[4]];
    $f501fail = $row[array_keys($row)[5]];
    $f502fail = $row[array_keys($row)[6]];
    $sf6block = $row[array_keys($row)[7]];
    $sf6alarm = $row[array_keys($row)[8]];
    $springuncharge = $row[array_keys($row)[9]];
    $cbmtrmcb = $row[array_keys($row)[10]];
    $q21mtrmcb = $row[array_keys($row)[11]];
    $q21ctrlmcb = $row[array_keys($row)[12]];
    $q2mtrmcb = $row[array_keys($row)[13]];
    $q2ctrlmcb = $row[array_keys($row)[14]];
    $mcbac = $row[array_keys($row)[15]];
    $mainoilalm = $row[array_keys($row)[16]];
    $oltcoilalm = $row[array_keys($row)[17]];
    $bucholzalm = $row[array_keys($row)[18]];
    $oilalm = $row[array_keys($row)[19]];
    $mainbreahtalm = $row[array_keys($row)[20]];
    $oltcbreathalm = $row[array_keys($row)[21]];
    $lvwindalm = $row[array_keys($row)[22]];
    $hvwindalm = $row[array_keys($row)[23]];
    $fanfail = $row[array_keys($row)[24]];
    $oltcmotoralm = $row[array_keys($row)[25]];
    $tcs1 = $row[array_keys($row)[26]];
    $tcs2 = $row[array_keys($row)[27]];
    $k861op = $row[array_keys($row)[28]];
    $k862op = $row[array_keys($row)[29]];
    $k863op = $row[array_keys($row)[30]];
    $mcbheater = $row[array_keys($row)[31]];
    $bucholztrip = $row[array_keys($row)[32]];
    $oiltrip = $row[array_keys($row)[33]];
    $hvwindtrip = $row[array_keys($row)[34]];
    $protpowerfail = $row[array_keys($row)[35]];
    $ctrlporwerfail = $row[array_keys($row)[36]];
    $macauxddcfail = $row[array_keys($row)[37]];
    $lvwindtrip = $row[array_keys($row)[38]];
    $presstrip = $row[array_keys($row)[39]];
    $oltcpresstrip = $row[array_keys($row)[40]];
    $jansentrip = $row[array_keys($row)[41]];
    $mainoillow = $row[array_keys($row)[42]];
    $oltcoillow = $row[array_keys($row)[43]];
    $mtrmcbtrip = $row[array_keys($row)[44]];
    $Q0 = $row[array_keys($row)[45]];
    $Q21 = $row[array_keys($row)[46]];
    $Q22 = $row[array_keys($row)[47]];
    $Q51 = $row[array_keys($row)[48]];
    $Q38 = $row[array_keys($row)[49]];
    $ocrlvop = $row[array_keys($row)[50]];
    $ocrlvhs1 = $row[array_keys($row)[51]];
    $ocrlvhs2 = $row[array_keys($row)[52]];
    $gfrop = $row[array_keys($row)[53]];
    $gfrhs1 = $row[array_keys($row)[54]];
    $gfrhs2 = $row[array_keys($row)[55]];
    $d39R = $row[array_keys($row)[56]];
    $d39S = $row[array_keys($row)[57]];
    $d39T = $row[array_keys($row)[58]];
    $inctest = $row[array_keys($row)[59]];
    $incservice = $row[array_keys($row)[60]];
    $mtrsupply = $row[array_keys($row)[61]];
    $ctrlsupply = $row[array_keys($row)[62]];
    $inclocal = $row[array_keys($row)[63]];
    $incremote = $row[array_keys($row)[64]];
    $tripsupply = $row[array_keys($row)[65]];
    $vtmcbtrip = $row[array_keys($row)[66]];
    $ocrhvop = $row[array_keys($row)[67]];
    $ocrhvhs1 = $row[array_keys($row)[68]];
    $gfrop1 = $row[array_keys($row)[69]];
    $f501load = $row[array_keys($row)[70]];
    $d38R = $row[array_keys($row)[71]];
    $d38S = $row[array_keys($row)[72]];
    $d38T = $row[array_keys($row)[73]];
    $diffop = $row[array_keys($row)[74]];
    $diffinstop = $row[array_keys($row)[75]];
    $refhvop = $row[array_keys($row)[76]];
    $reflvop = $row[array_keys($row)[77]];
    $inrush = $row[array_keys($row)[78]];
    $d37R_1 = $row[array_keys($row)[79]];
    $d37R_2 = $row[array_keys($row)[80]];
    $d37R_3 = $row[array_keys($row)[81]];
    $d37R_4 = $row[array_keys($row)[82]];
    $d37R_5 = $row[array_keys($row)[83]];
    $d37S_1 = $row[array_keys($row)[84]];
    $d37S_2 = $row[array_keys($row)[85]];
    $d37S_3 = $row[array_keys($row)[86]];
    $d37S_4 = $row[array_keys($row)[87]];
    $d37S_5 = $row[array_keys($row)[88]];
    $d37T_1 = $row[array_keys($row)[89]];
    $d37T_2 = $row[array_keys($row)[90]];
    $d37T_3 = $row[array_keys($row)[91]];
    $d37T_4 = $row[array_keys($row)[92]];
    $d37T_5 = $row[array_keys($row)[93]];
    $ols = $row[array_keys($row)[94]];
    $bcufail = $row[array_keys($row)[95]];
    $d34etherfail = $row[array_keys($row)[96]];
	$tap = $row[array_keys($row)[97]];
}

// Mengirim data sebagai JSON
$data = [
    'd40etherfail' => $d40etherfail,
    'f87tfail' => $f87tfail,
    'f501fail' => $f501fail,
    'f502fail' => $f502fail,
    'sf6block' => $sf6block,
    'sf6alarm' => $sf6alarm,
    'springuncharge' => $springuncharge,
    'cbmtrmcb' => $cbmtrmcb,
    'q21mtrmcb' => $q21mtrmcb,
    'q21ctrlmcb' => $q21ctrlmcb,
    'q2mtrmcb' => $q2mtrmcb,
    'q2ctrlmcb' => $q2ctrlmcb,
    'mcbac' => $mcbac,
    'mainoilalm' => $mainoilalm,
    'oltcoilalm' => $oltcoilalm,
    'bucholzalm' => $bucholzalm,
    'oilalm' => $oilalm,
    'mainbreahtalm' => $mainbreahtalm,
    'oltcbreathalm' => $oltcbreathalm,
    'lvwindalm' => $lvwindalm,
    'hvwindalm' => $hvwindalm,
    'fanfail' => $fanfail,
    'oltcmotoralm' => $oltcmotoralm,
    'tcs1' => $tcs1,
    'tcs2' => $tcs2,
    'k861op' => $k861op,
    'k862op' => $k862op,
    'k863op' => $k863op,
    'mcbheater' => $mcbheater,
    'bucholztrip' => $bucholztrip,
    'oiltrip' => $oiltrip,
    'hvwindtrip' => $hvwindtrip,
    'protpowerfail' => $protpowerfail,
    'ctrlporwerfail' => $ctrlporwerfail,
    'macauxddcfail' => $macauxddcfail,
    'lvwindtrip' => $lvwindtrip,
    'presstrip' => $presstrip,
    'oltcpresstrip' => $oltcpresstrip,
    'jansentrip' => $jansentrip,
    'mainoillow' => $mainoillow,
    'oltcoillow' => $oltcoillow,
    'mtrmcbtrip' => $mtrmcbtrip,
    'Q0' => $Q0,
    'Q21' => $Q21,
    'Q22' => $Q22,
    'Q51' => $Q51,
    'Q38' => $Q38,
    'ocrlvop' => $ocrlvop,
    'ocrlvhs1' => $ocrlvhs1,
    'ocrlvhs2' => $ocrlvhs2,
    'gfrop' => $gfrop,
    'gfrhs1' => $gfrhs1,
    'gfrhs2' => $gfrhs2,
    'd39R' => $d39R,
    'd39S' => $d39S,
    'd39T' => $d39T,
    'inctest' => $inctest,
    'incservice' => $incservice,
    'mtrsupply' => $mtrsupply,
    'ctrlsupply' => $ctrlsupply,
    'inclocal' => $inclocal,
    'incremote' => $incremote,
    'tripsupply' => $tripsupply,
    'vtmcbtrip' => $vtmcbtrip,
    'ocrhvop' => $ocrhvop,
    'ocrhvhs1' => $ocrhvhs1,
    'gfrop1' => $gfrop1,
    'f501load' => $f501load,
    'd38R' => $d38R,
    'd38S' => $d38S,
    'd38T' => $d38T,
    'diffop' => $diffop,
    'diffinstop' => $diffinstop,
    'refhvop' => $refhvop,
    'reflvop' => $reflvop,
    'inrush' => $inrush,
    'd37R_1' => $d37R_1,
    'd37R_2' => $d37R_2,
    'd37R_3' => $d37R_3,
    'd37R_4' => $d37R_4,
    'd37R_5' => $d37R_5,
    'd37S_1' => $d37S_1,
    'd37S_2' => $d37S_2,
    'd37S_3' => $d37S_3,
    'd37S_4' => $d37S_4,
    'd37S_5' => $d37S_5,
    'd37T_1' => $d37T_1,
    'd37T_2' => $d37T_2,
    'd37T_3' => $d37T_3,
    'd37T_4' => $d37T_4,
    'd37T_5' => $d37T_5,
    'ols' => $ols,
    'bcufail' => $bcufail,
    'd34etherfail' => $d34etherfail,
	'tap' => $tap,
];

// Mengembalikan data dalam format JSON
echo json_encode($data);

// Menutup koneksi ke database
$conn->close();
?>