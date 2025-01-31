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
                url: '../backend/trafo2/get_datamx.php', // URL file PHP
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
                url: '../backend/trafo2/get_datac264.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (datac264) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    changeBoxColor('#box_bftoscada', datac264.bftoscada, "Bay Fault");
                    changeBoxColor('#box_dcf_p', datac264.dcf_p, "DC Supply Failure - Control Panel");
                    changeBoxColor('#box_brftoscada', datac264.brftoscada, "Breaker Fault");
                    changeBoxColor('#box_cb_lpa', datac264.cb_lpa, "CB SF6 LOW Pressure Alarm");
                    changeBoxColor('#box_tcsa', datac264.tcsa, "TCS Alarm");
                    changeBoxColor('#box_bcuf', datac264.bcuf, "BCU Failure");
                    changeBoxColor('#box_bcurf', datac264.bcurf, "BCU Ring Railure");
                    changeBoxColor('#box_sf', datac264.sf, "Switch Failure");
                    changeBoxColor('#box_srf', datac264.srf, "Switch Ring Failure");
                    changeBoxColor('#box_lto', datac264.lto, "Lockout Trip Relay Operated");
                    changeBoxColor('#box_difft', datac264.difft, "Differential Protection Trip");
                    changeBoxColor('#box_revhvt', datac264.revhvt, "REF HV Trip");
                    changeBoxColor('#box_revlvt', datac264.revlvt, "REF LV Trip");
                    changeBoxColor('#box_ocrhvt', datac264.ocrhvt, "OCR / GFR Relay HV Trip");
                    changeBoxColor('#box_ocrlvt', datac264.ocrlvt, "OCR / GFR Relay LV Trip");
                    changeBoxColor('#box_bca', datac264.bca, "Buchloz Alarm");
                    changeBoxColor('#box_bct', datac264.bct, "Bucholz Trip");
                    changeBoxColor('#box_otia', datac264.otia, "Oil Temperature Alarm");
                    changeBoxColor('#box_otit', datac264.otit, "Oil Temperature Trip");
                    changeBoxColor('#box_wta', datac264.wta, "Winding Temperature Alarm");
                    changeBoxColor('#box_wtt', datac264.wtt, "Winding Temperature Trip");
                    changeBoxColor('#box_jt', datac264.jt, "Jansen Trip");
                    changeBoxColor('#box_spt', datac264.spt, "Sudden Pressure Trip");
                    changeBoxColor('#box_fan_fail', datac264.fan_fail, "COOLING FAN FAIL");
                    changeBoxColor('#box_mcbdf', datac264.mcbdf, "MCB Motor Drive Failure");
                    updateTapBox('#box_tap', datac264.tap);
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        function updateTapBox(boxId, Value) {
            // Tentukan warna berdasarkan nilai (contoh logika sederhana)
            const color = '--green: #0cff00;'; // Hijau jika > 0, merah jika 0 atau kurang
            $(boxId).css('background-color', color); // Ubah warna kotak
            $(boxId).text(`OLTC: ${Value}`);  // Perbarui teks kotak
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
                <div class="signal-1-0AvDFH signal-1" data-id="18:3">
                    <div id="box_bftoscada" class="box">Bay Fault</div>
                </div>
                <div class="signal5-0AvDFH" data-id="18:7">
                    <div id="box_dcf_p" class="box">DC Supply Failure - Control Panel</div>
                </div>
                <div class="signal10-0AvDFH" data-id="18:11">
                    <div id="box_brftoscada" class="box">Breaker Fault</div>
                </div>
                <div class="signal15-0AvDFH" data-id="18:19">
                    <div id="box_cb_lpa" class="box">CB SF6 LOW Pressure Alarm</div>
                </div>
                <div class="signal20-0AvDFH" data-id="18:24">
                    <div id="box_tcsa" class="box">TCS Alarm</div>
                </div>
                <div class="signal25-0AvDFH" data-id="18:33">
                    <div id="box_bcuf" class="box">BCU Failure</div>
                </div>
                <div class="signal30-0AvDFH" data-id="18:34">
                    <div id="box_bcurf" class="box">BCU Ring Railure</div>
                </div>
                <div class="signal35-0AvDFH" data-id="18:39">
                    <div id="box_sf" class="box">Switch Failure</div>
                </div>
                <div class="signal40-0AvDFH" data-id="18:44">
                    <div id="box_srf" class="box">Switch Ring Failure</div>
                </div>
                <div class="signal3-0AvDFH" data-id="18:5">
                    <div id="box_otit" class="box">Oil Temperature Trip</div>
                </div>
                <div class="signal7-0AvDFH" data-id="18:9">
                    <div id="box_wta" class="box">Winding Temperature Alarm</div>
                </div>
                <div class="signal12-0AvDFH" data-id="18:15">
                    <div id="box_wtt" class="box">Winding Temperature Trip</div>
                </div>
                <div class="signal17-0AvDFH" data-id="18:21">
                    <div id="box_jt" class="box">Jansen Trip</div>
                </div>
                <div class="signal22-0AvDFH" data-id="18:26">
                    <div id="box_spt" class="box">Sudden Pressure Trip</div>
                </div>
                <div class="signal27-0AvDFH" data-id="18:31">
                    <div id="box_fan_fail" class="box">COOLING FAN FAIL</div>
                </div>
                <div class="signal32-0AvDFH" data-id="18:36">
                    <div id="box_mcbdf" class="box">MCB Motor Drive Failure</div>
                </div>
                <div class="signal42-0AvDFH" data-id="18:46">
                    <div id="box_tap" class="box">TAP OLTC</div>
                </div>
                <div class="signal-2-0AvDFH signal-2" data-id="18:4">
                    <div id="box_lto" class="box">Lockout Trip Relay Operated</div>
                </div>
                <div class="signal6-0AvDFH" data-id="18:8">
                    <div id="box_difft" class="box">Differential Protection Trip</div>
                </div>
                <div class="signal11-0AvDFH" data-id="18:14">
                    <div id="box_revhvt" class="box">REF HV Trip</div>
                </div>
                <div class="signal16-0AvDFH" data-id="18:20">
                    <div id="box_revlvt" class="box">REF LV Trip</div>
                </div>
                <div class="signal21-0AvDFH" data-id="18:25">
                    <div id="box_ocrhvt" class="box">OCR/GFR Relay HV Trip</div>
                </div>
                <div class="signal26-0AvDFH" data-id="18:32">
                    <div id="box_ocrlvt" class="box">OCR/GFR Relay LV Trip</div>
                </div>
                <div class="signal31-0AvDFH" data-id="18:35">
                    <div id="box_bca" class="box">Buchloz Alarm</div>
                </div>
                <div class="signal36-0AvDFH" data-id="18:40">
                    <div id="box_bct" class="box">Bucholz Trip</div>
                </div>
                <div class="signal41-0AvDFH" data-id="18:45">
                    <div id="box_otia" class="box">Oil Temperature Alarm</div>
                </div>
                <div class="kotak-sinyal-0AvDFH" data-id="12:87">
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
                <div class="measurement-BNLOE4 measurement fjallaone-normal-white-32px" data-id="1:23">TRAFO 2</div>
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