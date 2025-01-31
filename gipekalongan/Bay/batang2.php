<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1920, maximum-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../etc/elemen/Logo_PLN.png">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="photo">
    <script src="../etc/js/timeline.js"></script>

    <script>
        function showDateTime() {
            const now = new Date(); // Mendapatkan tanggal dan waktu terkini
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            };

            const formattedDate = now.toLocaleDateString('id-ID', options); // Format sesuai lokal Indonesia
            document.getElementById('dateTime').innerText = formattedDate; // Tampilkan di elemen
        }

        // Perbarui waktu setiap detik
        setInterval(showDateTime, 1000);
    </script>

    <script src="../etc/js/jquery-3.6.0.min.js"></script>
    <script>
        // Fungsi untuk mengambil data dari get_datamx.php dan menampilkan di halaman
        function fetchDataMX() {
            $.ajax({
                url: '../backend/batang2/get_datamx.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (datamx) {
                    // Memperbarui elemen dengan data baru
                    $('#ir').text(datamx.ir);
                    $('#is').text(datamx.is);
                    $('#it').text(datamx.it);
                    $('#vr').text(datamx.vr);
                    $('#vs').text(datamx.vs);
                    $('#vt').text(datamx.vt);
                    $('#vrs').text(datamx.vrs);
                    $('#vst').text(datamx.vst);
                    $('#vtr').text(datamx.vtr);
                    $('#mw').text(datamx.mw);
                    $('#mvar').text(datamx.mvar);
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        // Fungsi untuk mengambil data dari get_datac264.php dan menampilkan di halaman
        function fetchDataC264() {
            $.ajax({
                url: '../backend/batang2/get_datac264.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (datac264) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    changeBoxColor('#box_bftoscada', datac264.bftoscada, "Bay Fault");
                    changeBoxColor('#box_cbdtf', datac264.cbdtf, "MCB Voltage Transf.Failure");
                    changeBoxColor('#box_dcf_p', datac264.dcf_p, "DC Supplu Failure - T1 / T2 / C");
                    changeBoxColor('#box_idf', datac264.idf, "Isolator Driving Fault");
                    changeBoxColor('#box_brftoscada', datac264.brftoscada, "Breaker Fault");
                    changeBoxColor('#box_cb_lpa', datac264.cb_lpa, "CB SF6 Low Pressure_1st Stage");
                    changeBoxColor('#box_cb_lpb', datac264.cb_lpb, "CB SF6 Low Pressure_2st Stage");
                    changeBoxColor('#box_cbdf', datac264.cbdf, "Circuit Breaker Driving Failure");
                    changeBoxColor('#box_cbspa', datac264.cbspa, "CB Spring Position Alarm");
                    changeBoxColor('#box_pd', datac264.pd, "Pole Discrepancy");
                    changeBoxColor('#box_tcs1a', datac264.tcs1a, "Trip 1 Circuit Failure");
                    changeBoxColor('#box_tcs2a', datac264.tcs2a, "Trip 2 Circuit Failure");
                    changeBoxColor('#box_cbm', datac264.cbm, "CB Maintenance");
                    changeBoxColor('#box_mto_k404', datac264.mto_k404, "Lockout Trip Relay K404");
                    changeBoxColor('#box_mto_k405', datac264.mto_k405, "Lockout Trip Relay K405");
                    changeBoxColor('#box_mto_k401', datac264.mto_k401, "MTR K401 Operate(AR BLOCK)");
                    changeBoxColor('#box_f21f', datac264.f21f, "F21 Main Relay Failure");
                    changeBoxColor('#box_f50f', datac264.f50f, "F50 Backup Relay Failure");
                    changeBoxColor('#box_cf', datac264.cf, "Carrier Faulty");
                    changeBoxColor('#box_tpa', datac264.tpa, "Com / Teleport A");
                    changeBoxColor('#box_tpb', datac264.tpb, "Com / Teleport B");
                    changeBoxColor('#box_bcuf', datac264.bcuf, "BCU Failure");
                    changeBoxColor('#box_ethl', datac264.ethl, "Ethernet Link");
                    changeBoxColor('#box_bcul', datac264.bcul, "BCU Link to Second Rink");
                    changeBoxColor('#box_arop', datac264.arop, "Auto Reclose Success");
                    changeBoxColor('#box_ols', datac264.ols, "OLS Trip");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        // Fungsi untuk mengambil data dari get_datacf21.php dan menampilkan di halaman
        function fetchDataF21() {
            $.ajax({
                url: '../backend/batang2/get_dataf21.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (dataf21) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    changeBoxColor('#box_spar', dataf21.spar, "Single Phase Auto Reclose");
                    changeBoxColor('#box_tpar', dataf21.tpar, "Three Phase Auto Reclose");
                    changeBoxColor('#box_distancez1', dataf21.distancez1, "Distance Zone 1 Operated");
                    changeBoxColor('#box_dz1r', dataf21.dz1r, "Distance Zone 1 Operated Phs R");
                    changeBoxColor('#box_dz1s', dataf21.dz1s, "Distance Zone 1 Operated Phs S");
                    changeBoxColor('#box_dz1t', dataf21.dz1t, "Distance Zone 1 Operated Phs T");
                    changeBoxColor('#box_distancez2', dataf21.distancez2, "Distance Zone 2 Operated");
                    changeBoxColor('#box_dz2r', dataf21.dz2r, "Distance Zone 2 Operated Phs R");
                    changeBoxColor('#box_dz2s', dataf21.dz2s, "Distance Zone 2 Operated Phs S");
                    changeBoxColor('#box_dz2t', dataf21.dz2t, "Distance Zone 2 Operated Phs T");
                    changeBoxColor('#box_distancez3', dataf21.distancez3, "Distance Zone 3 Operated");
                    changeBoxColor('#box_dz3r', dataf21.dz3r, "Distance Zone 3 Operated Phs R");
                    changeBoxColor('#box_dz3s', dataf21.dz3s, "Distance Zone 3 Operated Phs S");
                    changeBoxColor('#box_dz3t', dataf21.dz3t, "Distance Zone 3 Operated Phs T");
                    changeBoxColor('#box_f21_aided', dataf21.f21_aided, "F21 Aided");
                    changeBoxColor('#box_f21_aided_rx', dataf21.f21_aided_rx, "Distance Receive");
                    changeBoxColor('#box_f21_aided_tx', dataf21.f21_aided_tx, "Distance Transmit");
                    changeBoxColor('#box_r8_psb', dataf21.r8_psb, "Power Swing Block");
                    changeBoxColor('#box_r15_sotf', dataf21.r15_sotf, "Switch On to Fault");
                    changeBoxColor('#box_ar_prog_3_phs', dataf21.ar_prog_3_phs, "AR In Progress 3 Phase");
                    changeBoxColor('#box_ar_prog_1_phs', dataf21.ar_prog_1_phs, "AR In Progress 1 Phase");
                    changeBoxColor('#box_cb_unhealthy', dataf21.cb_unhealthy, "CB Unhealthy");

                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        // Fungsi untuk mengambil data dari get_datacf50.php dan menampilkan di halaman
        function fetchDataF50() {
            $.ajax({
                url: '../backend/batang2/get_dataf50.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (dataf50) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    changeBoxColor('#box_f50_1', dataf50.f50_1, "I1>1 Over Current Operated");
                    changeBoxColor('#box_f50_1_r', dataf50.f50_1_r, "I1>1 Over Current Operated Phs R");
                    changeBoxColor('#box_f50_1_s', dataf50.f50_1_s, "I1>1 Over Current Operated Phs S");
                    changeBoxColor('#box_f50_1_t', dataf50.f50_1_t, "I1>1 Over Current Operated Phs T");
                    changeBoxColor('#box_f51n', dataf50.f51n, "IN>1 Over Current Operated");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        // Fungsi untuk mengubah warna kotak berdasarkan nilai
        function changeBoxColor(boxId, value, nama) {
            const color = value === 'true' ? 'red' : '--green: #0cff00;';
            $(boxId).css('background-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak
        }

        // Memanggil fetchData setiap 5 detik
        setInterval(fetchDataMX, 5000);
        setInterval(fetchDataC264, 5000);
        setInterval(fetchDataF21, 5000);
        setInterval(fetchDataF50, 5000);

        // Memanggil fetchData pertama kali saat halaman dimuat
        $(document).ready(function () {
            fetchDataMX();
            fetchDataC264();
            fetchDataF21();
            fetchDataF50();
        });
    </script>

    <link rel="stylesheet" href="../etc/styles1.css">
</head>

<body style="margin: 0;background: #252424;"><input type="hidden" id="anPageName" name="page" value="desktop-1">
    <div class="container-center-horizontal">
        <div class="desktop-1 screen " data-id="12:85">
            <div class="alarm-Ys8k0x" data-id="18:75">
                <div class="signal50-0AvDFH" data-id="18:54">
                    <div id="box_dz1r" class=" box">Distance Zone 1 Operated Phs R</div>
                </div>
                <div class="signal45-0AvDFH" data-id="18:49">
                    <div id="box_distancez1" class=" box">Distance Zone 1 Operated</div>
                </div>
                <div class="signal51-0AvDFH" data-id="18:55">
                    <div id="box_dz2r" class=" box">Distance Zone 2 Operated Phs R</div>
                </div>
                <div class="signal46-0AvDFH" data-id="18:50">
                    <div id="box_distancez2" class=" box">Distance Zone 2 Operated</div>
                </div>
                <div class="signal53-0AvDFH" data-id="18:57">
                    <div id="box_r15_sotf" class=" box">Switch On to Fault</div>
                </div>
                <div class="signal48-0AvDFH" data-id="18:52">
                    <div id="box_r8_psb" class=" box">Power Swing Block</div>
                </div>
                <div class="signal52-0AvDFH" data-id="18:56">
                    <div id="box_dz3r" class=" box">Distance Zone 3 Operated Phs R</div>
                </div>
                <div class="signal47-0AvDFH" data-id="18:51">
                    <div id="box_distancez3" class=" box">Distance Zone 3 Operated</div>
                </div>
                <div class="signal54-0AvDFH" data-id="18:58">
                    <div id="box_f50_1_r" class="box">f50_1_r</div>
                </div>
                <div class="signal49-0AvDFH" data-id="18:53">
                    <div id="box_f50_1" class="box">f50_1</div>
                </div>
                <div class="signal55-0AvDFH" data-id="18:59">
                    <div id="box_dz1s" class=" box">Distance Zone 1 Operated Phs S</div>
                </div>
                <div class="signal56-0AvDFH" data-id="18:60">
                    <div id="box_dz2s" class=" box">Distance Zone 2 Operated Phs S</div>
                </div>
                <div class="signal58-0AvDFH" data-id="18:62">
                    <div id="box_ar_prog_3_phs" class=" box">AR In Progress 3 Phase</div>
                </div>
                <div class="signal57-0AvDFH" data-id="18:61">
                    <div id="box_dz3s" class=" box">Distance Zone 3 Operated Phs S</div>
                </div>
                <div class="signal59-0AvDFH" data-id="18:63">
                    <div id="box_f50_1_s" class="box">f50_1_s</div>
                </div>
                <div class="signal60-0AvDFH" data-id="18:64">
                    <div id="box_dz1t" class=" box">Distance Zone 1 Operated Phs T</div>
                </div>
                <div class="signal61-0AvDFH" data-id="18:65">
                    <div id="box_dz2t" class=" box">Distance Zone 2 Operated Phs T</div>
                </div>
                <div class="signal63-0AvDFH" data-id="18:67">
                    <div id="box_ar_prog_1_phs" class=" box">AR In Progress 1 Phase</div>
                </div>
                <div class="signal62-0AvDFH" data-id="18:66">
                    <div id="box_dz3t" class=" box">Distance Zone 3 Operated Phs T</div>
                </div>
                <div class="signal64-0AvDFH" data-id="18:69">
                    <div id="box_f50_1_t" class="box">f50_1_t</div>
                </div>
                <div class="signal65-0AvDFH" data-id="18:70">
                    <div id="box_f21_aided" class=" box">F21 Aided</div>
                </div>
                <div class="signal66-0AvDFH" data-id="18:71">
                    <div id="box_f21_aided_rx" class=" box">Distance Receive</div>
                </div>
                <div class="signal68-0AvDFH" data-id="18:73">
                    <div id="box_cb_unhealthy" class=" box">CB Unhealthy</div>
                </div>
                <div class="signal67-0AvDFH" data-id="18:72">
                    <div id="box_f21_aided_tx" class=" box">Distance Transmit</div>
                </div>
                <div class="signal69-0AvDFH" data-id="18:74">
                    <div id="box_f51n" class="box">f51n</div>
                </div>
                <div class="signal-1-0AvDFH signal-1" data-id="18:3">
                    <div id="box_bftoscada" class="box">Bay Fault</div>
                </div>
                <div class="signal5-0AvDFH" data-id="18:7">
                    <div id="box_cbdtf" class=" box">MCB Voltage Transf. Failure</div>
                </div>
                <div class="signal10-0AvDFH" data-id="18:11">
                    <div id="box_dcf_p" class=" box">DC Supplu Failure - T1/T2/C</div>
                </div>
                <div class="signal15-0AvDFH" data-id="18:19">
                    <div id="box_idf" class=" box">Isolator Driving Fault</div>
                </div>
                <div class="signal20-0AvDFH" data-id="18:24">
                    <div id="box_brftoscada" class=" box">Breaker Fault</div>
                </div>
                <div class="signal25-0AvDFH" data-id="18:33">
                    <div id="box_cb_lpa" class=" box">CB SF6 Low Pressure_1st Stage</div>
                </div>
                <div class="signal30-0AvDFH" data-id="18:34">
                    <div id="box_cb_lpb" class=" box">CB SF6 Low Pressure_2st Stage</div>
                </div>
                <div class="signal35-0AvDFH" data-id="18:39">
                    <div id="box_cbdf" class=" box">Circuit Breaker Driving Failure</div>
                </div>
                <div class="signal40-0AvDFH" data-id="18:44">
                    <div id="box_cbspa" class=" box">CB Spring Position Alarm</div>
                </div>
                <div class="signal4-0AvDFH" data-id="18:6">
                    <div id="box_cf" class=" box">Carrier Faulty</div>
                </div>
                <div class="signal3-0AvDFH" data-id="18:5">
                    <div id="box_tpa" class=" box">Com/Teleport A</div>
                </div>
                <div class="signal7-0AvDFH" data-id="18:9">
                    <div id="box_tpb" class=" box">Com/Teleport B</div>
                </div>
                <div class="signal12-0AvDFH" data-id="18:15">
                    <div id="box_bcuf" class=" box">BCU Failure</div>
                </div>
                <div class="signal17-0AvDFH" data-id="18:21">
                    <div id="box_ethl" class=" box">Ethernet Link</div>
                </div>
                <div class="signal22-0AvDFH" data-id="18:26">
                    <div id="box_bcul" class=" box">BCU Link to Second Rink</div>
                </div>
                <div class="signal27-0AvDFH" data-id="18:31">
                    <div id="box_arop" class=" box">Auto Reclose Success</div>
                </div>
                <div class="signal32-0AvDFH" data-id="18:36">
                    <div id="box_ols" class=" box">OLS Trip</div>
                </div>
                <div class="signal37-0AvDFH" data-id="18:41">
                    <div id="box_spar" class=" box">Single Phase Auto Reclose</div>
                </div>
                <div class="signal42-0AvDFH" data-id="18:46">
                    <div id="box_tpar" class=" box">Three Phase Auto Reclose</div>
                </div>

                <div class="signal-2-0AvDFH signal-2" data-id="18:4">
                    <div id="box_pd" class=" box">Pole Discrepancy</div>
                </div>

                <div class="signal6-0AvDFH" data-id="18:8">
                    <div id="box_tcs1a" class=" box">Trip 1 Circuit Failure</div>
                </div>
                <div class="signal11-0AvDFH" data-id="18:14">
                    <div id="box_tcs2a" class=" box">Trip 2 Circuit Failure</div>
                </div>
                <div class="signal16-0AvDFH" data-id="18:20">
                    <div id="box_cbm" class=" box">CB Maintenance</div>
                </div>
                <div class="signal21-0AvDFH" data-id="18:25">
                    <div id="box_mto_k404" class=" box">Lockout Trip Relay K404</div>
                </div>
                <div class="signal26-0AvDFH" data-id="18:32">
                    <div id="box_mto_k405" class=" box">Lockout Trip Relay K405</div>
                </div>
                <div class="signal31-0AvDFH" data-id="18:35">
                    <div id="box_mto_k401" class=" box">MTR K401 Operate (AR BLOCK)</div>
                </div>
                <div class="signal36-0AvDFH" data-id="18:40">
                    <div id="box_f21f" class=" box">F21 Main Relay Failure</div>
                </div>
                <div class="signal41-0AvDFH" data-id="18:45">
                    <div id="box_f50f" class=" box">F50 Backup Relay Failure</div>
                </div>
                <div class="kotak-sinyal-0AvDFH" data-id="12:87">
                    <div class="rectangle-4-xwnY9r" data-id="1:33"></div>
                    <div class="rectangle-4-Wu6Ge3" data-id="1:34"></div>
                    <div class="relay-operated-xwnY9r fjallaone-normal-white-32px" data-id="1:35">Relay Operated</div>
                    <div class="rectangle-4-VyPSHk" data-id="1:26"></div>
                    <div class="rectangle-4-uGOxIn" data-id="1:27"></div>
                    <div class="signal-xwnY9r fjallaone-normal-white-32px" data-id="1:29">SIGNAL</div>
                </div>
            </div>
            <div class="bay-Ys8k0x" data-id="26:2">
                <a href="batang1.php" style="text-decoration: none;">
                    <div class="bay1-kCx7qP" data-id="24:2">
                        <div class="bay1-mKko7V" data-id="24:3"></div>
                        <div class="bay1-xwxXxg valign-text-middle fjallaone-normal-black-24px" data-id="24:4">BATANG 1
                        </div>
                    </div>
                </a>
                <a href="batang2.php" style="text-decoration: none;">
                    <div class="bay2-kCx7qP" data-id="24:10">
                        <div class="bay2-RKqlSC" data-id="24:11"></div>
                        <div class="bay2-UFvSna valign-text-middle fjallaone-normal-black-24px" data-id="24:12">BATANG 2
                        </div>
                    </div>
                </a>
                <a href="comal1.php" style="text-decoration: none;">
                    <div class="bay3-kCx7qP" data-id="24:13">
                        <div class="bay3-5LvkQS" data-id="24:14"></div>
                        <div class="bay3-3IfNfQ valign-text-middle fjallaone-normal-black-24px" data-id="24:15">COMAL 1
                        </div>
                    </div>
                </a>
                <a href="comal2.php" style="text-decoration: none;">
                    <div class="bay4-kCx7qP" data-id="24:16">
                        <div class="bay4-6WK36Y" data-id="24:17"></div>
                        <div class="bay4-OxLxvc valign-text-middle fjallaone-normal-black-24px" data-id="24:18">COMAL 2
                        </div>
                    </div>
                </a>
                <a href="kapasitor.php" style="text-decoration: none;">
                    <div class="bay5-kCx7qP" data-id="24:19">
                        <div class="bay5-Q5XVa3" data-id="24:20"></div>
                        <div class="bay5-hG6zxO valign-text-middle fjallaone-normal-black-24px" data-id="24:21">
                            KAPASITOR
                        </div>
                    </div>
                </a>
                <a href="kopel.php" style="text-decoration: none;">
                    <div class="bay6-kCx7qP" data-id="24:22">
                        <div class="bay6-4Y1go2" data-id="24:23"></div>
                        <div class="bay6-Dz2XVP valign-text-middle fjallaone-normal-black-24px" data-id="24:24">KOPEL
                        </div>
                    </div>
                </a>
                <a href="trafo1.php" style="text-decoration: none;">
                    <div class="bay7-kCx7qP" data-id="24:25">
                        <div class="bay7-bEdVnk" data-id="24:26"></div>
                        <div class="bay7-Id8k2b valign-text-middle fjallaone-normal-black-24px" data-id="24:27">TRAFO 1
                        </div>
                    </div>
                </a>
                <a href="trafo2.php" style="text-decoration: none;">
                    <div class="bay8-kCx7qP" data-id="25:2">
                        <div class="bay8-ciLhrw" data-id="25:3"></div>
                        <div class="bay8-fRuNg5 valign-text-middle fjallaone-normal-black-24px" data-id="25:4">TRAFO 2
                        </div>
                    </div>
                </a>
                <a href="trafo3.php" style="text-decoration: none;">
                    <div class="bay9-kCx7qP" data-id="25:6">
                        <div class="bay9-G6QKvS" data-id="25:7"></div>
                        <div class="bay9-djNN6u valign-text-middle fjallaone-normal-black-24px" data-id="25:8">TRAFO 3
                        </div>
                    </div>
                </a>
                <div class="rectangle-3-kCx7qP" data-id="31:2"></div>
            </div>
            <div class="measurement-Ys8k0x measurement" data-id="12:78">
                <div class="rectangle-3-BNLOE4" data-id="1:24"></div>
                <div class="rectangle-2-BNLOE4 rectangle-2" data-id="1:22"></div>
                <div class="measurement-BNLOE4 measurement fjallaone-normal-white-32px" data-id="1:23">BATANG 2</div>
                <div class="q-BNLOE4 q" data-id="12:70">
                    <div class="rectangle-5-PSV7UA rectangle-5" data-id="12:71"></div>
                    <div class="q-PSV7UA q timesnewroman-regular-normal-white-32px" data-id="12:72">Q</div>
                    <div>
                        <div class="rectangle-5-bR8jaq rectangle-5" data-id="12:73"></div>
                        <span id="mvar" class="a11-PSV7UA timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-SawFZ7 rectangle-5" data-id="12:75"></div>
                    <div class="k-v timesnewroman-regular-normal-white-22px" data-id="12:76">MVAR</div>
                </div>
                <div class="p-BNLOE4 p" data-id="12:56">
                    <div class="rectangle-5-VJSH7j rectangle-5" data-id="12:57"></div>
                    <div class="p-VJSH7j p timesnewroman-regular-normal-white-32px" data-id="12:58">P</div>
                    <div class="rectangle-5-9r8Rvx rectangle-5" data-id="12:59"></div>
                    <span id="mw" class="a10-VJSH7j timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-Tir7pv rectangle-5" data-id="12:61"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:62">MW</div>
                </div>
                <div class="it-BNLOE4 it" data-id="12:63">
                    <div class="rectangle-5-kUygQt rectangle-5" data-id="12:64"></div>
                    <div class="it-kUygQt it timesnewroman-regular-normal-white-32px" data-id="12:65">It</div>
                    <div class="rectangle-5-uPh8p6 rectangle-5" data-id="12:66"></div>
                    <span id="it" class="a9-kUygQt timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-gVVo04 rectangle-5" data-id="12:68"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:69">A</div>
                </div>
                <div class="is-BNLOE4 is" data-id="12:48">
                    <div class="rectangle-5-mx4oKo rectangle-5" data-id="12:49"></div>
                    <div class="is-mx4oKo is timesnewroman-regular-normal-white-32px" data-id="12:50">Is</div>
                    <div class="rectangle-5-lFsZQx rectangle-5" data-id="12:51"></div>
                    <span id="is" class="a8-mx4oKo timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-VxL000 rectangle-5" data-id="12:53"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:54">A</div>
                </div>
                <div class="ir-BNLOE4 ir" data-id="12:34">
                    <div class="rectangle-5-VtK8su rectangle-5" data-id="12:35"></div>
                    <div class="ir-VtK8su ir timesnewroman-regular-normal-white-32px" data-id="12:36">Ir</div>
                    <div class="rectangle-5-WOBGgg rectangle-5" data-id="12:37"></div>
                    <span id="ir" class="a7-VtK8su timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-hAxm9X rectangle-5" data-id="12:39"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:40">A</div>
                </div>
                <div class="vtr-BNLOE4 vtr" data-id="12:41">
                    <div class="rectangle-5-CPUTgU rectangle-5" data-id="12:42"></div>
                    <div class="vtr-CPUTgU vtr timesnewroman-regular-normal-white-32px" data-id="12:43">Vtr</div>
                    <div class="rectangle-5-68TLP6 rectangle-5" data-id="12:44"></div>
                    <span id="vtr" class="a6-CPUTgU timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-UExGn2 rectangle-5" data-id="12:46"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:47">kV</div>
                </div>
                <div class="vst-BNLOE4 vst" data-id="12:27">
                    <div class="rectangle-5-wHRj3i rectangle-5" data-id="12:28"></div>
                    <div class="vst-wHRj3i vst timesnewroman-regular-normal-white-32px" data-id="12:29">Vst</div>
                    <div class="rectangle-5-bx4fTC rectangle-5" data-id="12:30"></div>
                    <span id="vst" class="a5-wHRj3i timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-HyNhJk rectangle-5" data-id="12:32"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:33">kV</div>
                </div>
                <div class="vrs-BNLOE4 vrs" data-id="12:20">
                    <div class="rectangle-5-w0mLix rectangle-5" data-id="12:21"></div>
                    <div class="vrs-w0mLix vrs timesnewroman-regular-normal-white-32px" data-id="12:22">Vrs</div>
                    <div class="rectangle-5-nYzD34 rectangle-5" data-id="12:23"></div>
                    <span id="vrs" class="a4-w0mLix timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-rj0Qaz rectangle-5" data-id="12:25"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:26">kV</div>
                </div>
                <div class="vt-BNLOE4 vt" data-id="12:13">
                    <div class="rectangle-5-KwAIRF rectangle-5" data-id="12:14"></div>
                    <div class="vt-KwAIRF vt timesnewroman-regular-normal-white-32px" data-id="12:15">Vt</div>
                    <div class="rectangle-5-xFxVcf rectangle-5" data-id="12:16"></div>
                    <span id="vt" class="a3-KwAIRF timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-RQtOan rectangle-5" data-id="12:18"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:19">kV</div>
                </div>
                <div class="vs-BNLOE4 vs" data-id="12:6">
                    <div class="rectangle-5-oCiL5X rectangle-5" data-id="12:7"></div>
                    <div class="vs-oCiL5X vs timesnewroman-regular-normal-white-32px" data-id="12:8">Vs</div>
                    <div class="rectangle-5-l1w2Ym rectangle-5" data-id="12:9"></div>
                    <span id="vs" class="a2-oCiL5X timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-h0cxms rectangle-5" data-id="12:11"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:12">kV</div>
                </div>
                <div class="vr-BNLOE4 vr" data-id="12:5">
                    <div class="rectangle-5-VKmIZQ rectangle-5" data-id="1:40"></div>
                    <div class="vr-VKmIZQ vr timesnewroman-regular-normal-white-32px" data-id="1:42">Vr</div>
                    <div class="rectangle-5-GG2tS4 rectangle-5" data-id="2:3"></div>
                    <span id="vr" class="a1-VKmIZQ timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-QC725P rectangle-5" data-id="2:36"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="2:37">kV</div>
                </div>
            </div>
            <header class="header-Ys8k0x" data-id="12:86">
                <a href="../index.php" style="text-decoration: none;">
                    <div class="rectangle-2-POyVWW" data-id="1:11"></div>
                    <h1 class="title-POyVWW" data-id="1:12">MAIN SINGLE LINE</h1>
                    <div class="rectangle-2-d4Ns1Q" data-id="1:16"></div>
                    <div class="gardu-induk-pekalongan-POyVWW" data-id="1:17">GARDU INDUK PEKALONGAN</div>
                    <span id="dateTime" class="tanggal-POyVWW"></span>
                    <div class="rectangle-1-POyVWW" data-id="1:5"></div>
                    <div class="pt-pln-persero-POyVWW" data-id="1:7">PT. PLN (Persero)</div><img
                        class="logo_pln-1-POyVWW" data-id="1:6" src="../etc/elemen/Logo_PLN.png" alt="Logo_PLN 1">
                </a>
            </header>
        </div>
    </div>
    <script defer src="../etc/js/restart-btn.min.js"></script>
</body>

</html>