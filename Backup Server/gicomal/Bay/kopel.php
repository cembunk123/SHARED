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
        // Fungsi untuk mengambil data dari get_data.php dan menampilkan di halaman
        function fetchData() {
            $.ajax({
                url: '../backend/kopel/get_data.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (data) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    //BCU
                    changeBoxColor('#box_sf6blok', data.sf6blok, "SF6 STAGE 2 BLOCK");
                    changeBoxColor('#box_sf6alarm', data.sf6alarm, "SF6 STAGE 1 ALARM");
                    changeBoxColor('#box_springuncharge', data.springuncharge, "CLOSE SPRING UNCHARGE");
                    changeBoxColor('#box_mtrmcbtrip', data.mtrmcbtrip, "MOTOR MCB TRIP");
                    changeBoxColor('#box_q1mtrtrip', data.q1mtrtrip, "DS Q1 MOTOR MCB TRIP");
                    changeBoxColor('#box_q1ctrltrip', data.q1ctrltrip, "DS Q1 CONTROL MCB TRIP");
                    changeBoxColor('#box_q2mtrtrip', data.q2mtrtrip, "DS Q2 MOTOR MCB TRIP");
                    changeBoxColor('#box_q2ctrltrip', data.q2ctrltrip, "DS Q2 CONTROL MCB TRIP");
                    changeBoxColor('#box_mcbactrip', data.mcbactrip, "MCB AC TRIP");
                    changeBoxColor('#box_f51fail', data.f51fail, "F51 FAIL");
                    changeBoxColor('#box_f51alarm', data.f51alarm, "F51 ALARM");
                    changeBoxColor('#box_tcs1', data.tcs1, "TCS 1 FAIL");
                    changeBoxColor('#box_tcs2', data.tcs2, "TCS 2 FAIL");
                    changeBoxColor('#box_protsuppfail', data.protsuppfail, "PROTECTION SUPPLY FAIL");
                    changeBoxColor('#box_ctrl1suppfail', data.ctrl1suppfail, "CONTROL 1 SUPPLY FAIL");
                    changeBoxColor('#box_ctrl2suppfail', data.ctrl2suppfail, "CONTROL 2 SUPPLY FAIL");
                    changeBoxColor('#box_k861', data.k861, "K861 OPERATED");
                    changeBoxColor('#box_k862', data.k862, "K862 OPERATED");
                    changeBoxColor('#box_k863', data.k863, "K863 OPERATED");
                    changeBoxColorSTS('#box_statQ21', data.statQ21, "");
                    changeBoxColorSTS('#box_statQ22', data.statQ22, "");
                    changeBoxColorSTS('#box_statQ50', data.statQ50, "");
                    changeBoxColor('#box_bcufail', data.bcufail, "BCU FAIL");
                    changeLineColor2('#bay1', data.statQ21, data.statQ50, "");
                    changeLineColor2('#bay2', data.statQ22, data.statQ50, "");
                    changeLineColor2('#bay3', data.statQ21, data.statQ50, "");
                    changeLineColor2('#bay4', data.statQ22, data.statQ50, "");


                    //OCR
                    changeBoxColor('#box_ocrop', data.ocrop, "OCR OPERATED");
                    changeBoxColor('#box_gfrop', data.gfrop, "GFR OPERATED");
                    changeBoxColor('#box_bcufail', data.bcufail, "BCU FAIL");
                    IchangeBoxColor('#box_etherfail', data.etherfail, "ETHERNET FAIL");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });

            $.ajax({
                url: '../backend/kopel/get_datamx.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (datamx) {
                    // Memperbarui elemen dengan data baru
                    changeLineColor('#bus1', datamx.vst, "");
                    changeLineColor('#bus1a', datamx.vst, "");
                    changeLineColor('#bus2', datamx.vst2, "");
                    changeLineColor('#bus2a', datamx.vst2, "");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });

            $.ajax({
                url: '../backend/kopel/get_datamx.php', // URL file PHP
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
                    $('#vr2').text(datamx.vr2);
                    $('#vs2').text(datamx.vs2);
                    $('#vt2').text(datamx.vt2);
                    $('#vrs2').text(datamx.vrs2);
                    $('#vst2').text(datamx.vst2);
                    $('#vtr2').text(datamx.vtr2);
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        // Fungsi untuk mengubah warna garis berdasarkan nilai
        function changeLineColor(boxId, value, nama) {
            let color;
            if (value < 10) {
                color = 'white';
            } else {
                color = 'red';
            }
            $(boxId).css('border-color', '').css('border-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak
        }

        function changeLineColor2(boxId, value1, value2, nama) {
            let color;
            if (value1 === '2' && value2 === '2') {
                color = 'white';
            } else {
                color = 'red';
            }
            $(boxId).css('border-color', '').css('border-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak
        }

        // Fungsi untuk mengubah warna kotak berdasarkan nilai
        function changeBoxColor(boxId, value, nama) {
            const color = value === 'true' ? 'red' : '#0cff00;';
            $(boxId).css('background-color', '').css('background-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak
        }

		function IchangeBoxColor(boxId, value, nama) {
            const color = value === 'true' ? '#0cff00;' : 'red';
            $(boxId).css('background-color', '').css('background-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak
        }
		
        // Fungsi untuk mengubah warna kotak status
        function changeBoxColorSTS(boxId, value, nama) {
            let color;
            if (value === '1') {
                color = 'red';
            }

            else if (value === '2') {
                color = 'transparent';
            }

            else {
                color = 'purple';
            }
            $(boxId).css('background-color', '').css('background-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak
        }


        // Memanggil fetchData setiap 5 detik
        setInterval(fetchData, 5000);

        // Memanggil fetchData pertama kali saat halaman dimuat
        $(document).ready(function () {
            fetchData();
        });
    </script>

    <link rel="stylesheet" href="../etc/styles2.css">
</head>

<body style="margin: 0;background: #252424;"><input type="hidden" id="anPageName" name="page" value="desktop-1">
    <div class="container-center-horizontal">
        <div class="desktop-1 screen " data-id="12:85">
            <div class="alarm-Ys8k0x" data-id="18:75">
                <div class="signal73-0AvDFH" data-id="18:63">
                    <div id="box_gfrop" class="box">-</div>
                </div>
                <div class="signal72-0AvDFH" data-id="18:58">
                    <div id="box_ocrop" class="box">-</div>
                </div>
                <div class="signal71-0AvDFH" data-id="18:53">
                    <div class="rectangle-71-0AnL6R" data-id="3:511"></div>
                    <div class="signal-71-0AnL6R valign-text-middle fjallaone-normal-black-16px" data-id="3:512">F67
                    </div>
                </div>
                <div class="signal21-0AvDFH" data-id="18:5">
                    <div id="box_etherfail" class="box">-</div>
                </div>
                <div class="signal20-0AvDFH" data-id="35:38">
                    <div id="box_bcufail" class="box">-</div>
                </div>
                <div class="signal19-0AvDFH" data-id="18:45">
                    <div id="box_k863" class="box">-</div>
                </div>
                <div class="signal18-0AvDFH" data-id="18:40">
                    <div id="box_k862" class="box">-</div>
                </div>
                <div class="signal17-0AvDFH" data-id="18:35">
                    <div id="box_k861" class="box">-</div>
                </div>
                <div class="signal16-0AvDFH" data-id="18:32">
                    <div id="box_ctrl2suppfail" class="box">-</div>
                </div>
                <div class="signal15-0AvDFH" data-id="18:25">
                    <div id="box_ctrl1suppfail" class="box">-</div>
                </div>
                <div class="signal14-0AvDFH" data-id="18:20">
                    <div id="box_protsuppfail" class="box">-</div>
                </div>
                <div class="signal13-0AvDFH" data-id="18:14">
                    <div id="box_tcs2" class="box">-</div>
                </div>
                <div class="signal12-0AvDFH" data-id="18:8">
                    <div id="box_tcs1" class="box">-</div>
                </div>
                <div class="signal-11-0AvDFH" data-id="18:4">
                    <div id="box_f51alarm" class="box">-</div>
                </div>
                <div class="signal10-0AvDFH" data-id="35:33">
                    <div id="box_f51fail" class="box">-</div>
                </div>
                <div class="signal9-0AvDFH" data-id="18:44">
                    <div id="box_mcbactrip" class="box">-</div>
                </div>
                <div class="signal8-0AvDFH" data-id="18:39">
                    <div id="box_q2ctrltrip" class="box">-</div>
                </div>
                <div class="signal7-0AvDFH" data-id="18:34">
                    <div id="box_q2mtrtrip" class="box">-</div>
                </div>
                <div class="signal6-0AvDFH" data-id="18:33">
                    <div id="box_q1ctrltrip" class="box">-</div>
                </div>
                <div class="signal5-0AvDFH" data-id="18:24">
                    <div id="box_q1mtrtrip" class="box">-</div>
                </div>
                <div class="signal4-0AvDFH" data-id="18:19">
                    <div id="box_mtrmcbtrip" class="box">-</div>
                </div>
                <div class="signal3-0AvDFH" data-id="18:11">
                    <div id="box_springuncharge" class="box">-</div>
                </div>
                <div class="signal2-0AvDFH" data-id="18:7">
                    <div id="box_sf6alarm" class="box">-</div>
                </div>
                <div class="signal-1-0AvDFH signal-1" data-id="18:3">
                    <div id="box_sf6blok" class="box">-</div>
                </div>
                <div class="kotak-sinyal-0AvDFH" data-id="12:87">
                    <div class="rectangle-4-xwnY9r" data-id="1:33"></div>
                    <div class="rectangle-4-Wu6Ge3" data-id="1:34"></div>
                    <div class="relay-operated-xwnY9r" data-id="1:35">Relay Operated</div>
                    <div class="rectangle-4-VyPSHk" data-id="1:26"></div>
                    <div class="rectangle-4-uGOxIn" data-id="1:27"></div>
                    <div class="signal-xwnY9r" data-id="1:29">SIGNAL</div>
                </div>
            </div>
            <div class="bay-Ys8k0x" data-id="26:2">
                <div class="rectangle-3-kCx7qP" data-id="31:2"></div>
                <a href="pemalang1.php" style="text-decoration: none;">
                    <div class="bay1-kCx7qP" data-id="24:2">
                        <div class="bay1-mKko7V" data-id="24:3"></div>
                        <div class="bay1-xwxXxg valign-text-middle fjallaone-normal-black-24px" data-id="24:4">
                            PEMALANG
                            1</div>
                    </div>
                </a>
                <a href="pemalang2.php" style="text-decoration: none;">
                    <div class="bay2-kCx7qP" data-id="24:10">
                        <div class="bay2-RKqlSC" data-id="24:11"></div>
                        <div class="bay2-UFvSna valign-text-middle fjallaone-normal-black-24px" data-id="24:12">
                            PEMALANG
                            2
                        </div>
                    </div>
                </a>
                <a href="pekalongan1.php" style="text-decoration: none;">
                    <div class="bay3-kCx7qP" data-id="24:13">
                        <div class="bay3-5LvkQS" data-id="24:14"></div>
                        <div class="bay3-3IfNfQ valign-text-middle fjallaone-normal-black-24px" data-id="24:15">
                            PEKALONGAN 1
                        </div>
                    </div>
                </a>
                <a href="pekalongan2.php" style="text-decoration: none;">
                    <div class="bay4-kCx7qP" data-id="24:16">
                        <div class="bay4-6WK36Y" data-id="24:17"></div>
                        <div class="bay4-OxLxvc valign-text-middle fjallaone-normal-black-24px" data-id="24:18">
                            PEKALONGAN 2
                        </div>
                    </div>
                </a>
                <a href="kopel.php" style="text-decoration: none;">
                    <div class="bay5-kCx7qP" data-id="24:19">
                        <div class="bay5-Q5XVa3" data-id="24:20"></div>
                        <div class="bay5-hG6zxO valign-text-middle fjallaone-normal-black-24px" data-id="24:21">
                            KOPEL
                        </div>
                    </div>
                </a>
                <a href="trafo1.php" style="text-decoration: none;">
                    <div class="bay6-kCx7qP" data-id="24:22">
                        <div class="bay6-4Y1go2" data-id="24:23"></div>
                        <div class="bay6-Dz2XVP valign-text-middle fjallaone-normal-black-24px" data-id="24:24">
                            TRAFO 1
                        </div>
                    </div>
                </a>
            </div>
            <div class="measurement-Ys8k0x measurement" data-id="33:2">
                <div class="rectangle-3-BNLOE4" data-id="1:24"></div>
                <div class="rectangle-2-BNLOE4 rectangle-2" data-id="1:22"></div>
                <div class="measurement-BNLOE4 measurement fjallaone-normal-white-32px" data-id="1:23">KOPEL
                </div>
                <div class="rectangle-2-BNLOE4a rectangle-2" data-id="1:122"></div>
                <div class="measurement-BNLOE4a measurement fjallaone-normal-white-32px" data-id="1:123">BUS 1
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

                <div class="rectangle-2-BNLOE4b rectangle-2" data-id="1:222"></div>
                <div class="measurement-BNLOE4b measurement fjallaone-normal-white-32px" data-id="1:223">BUS 2
                </div>
                <div class="vtr-BNLOE4a vtr" data-id="12:41">
                    <div class="rectangle-5-CPUTgU rectangle-5" data-id="12:42"></div>
                    <div class="vtr-CPUTgU vtr timesnewroman-regular-normal-white-32px" data-id="12:43">Vtr</div>
                    <div class="rectangle-5-68TLP6 rectangle-5" data-id="12:44"></div>
                    <span id="vtr2" class="a6-CPUTgU timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-UExGn2 rectangle-5" data-id="12:46"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:47">kV</div>
                </div>
                <div class="vst-BNLOE4a vst" data-id="12:27">
                    <div class="rectangle-5-wHRj3i rectangle-5" data-id="12:28"></div>
                    <div class="vst-wHRj3i vst timesnewroman-regular-normal-white-32px" data-id="12:29">Vst</div>
                    <div class="rectangle-5-bx4fTC rectangle-5" data-id="12:30"></div>
                    <span id="vst2" class="a5-wHRj3i timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-HyNhJk rectangle-5" data-id="12:32"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:33">kV</div>
                </div>
                <div class="vrs-BNLOE4a vrs" data-id="12:20">
                    <div class="rectangle-5-w0mLix rectangle-5" data-id="12:21"></div>
                    <div class="vrs-w0mLix vrs timesnewroman-regular-normal-white-32px" data-id="12:22">Vrs</div>
                    <div class="rectangle-5-nYzD34 rectangle-5" data-id="12:23"></div>
                    <span id="vrs2" class="a4-w0mLix timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-rj0Qaz rectangle-5" data-id="12:25"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:26">kV</div>
                </div>
                <div class="vt-BNLOE4a vt" data-id="12:13">
                    <div class="rectangle-5-KwAIRF rectangle-5" data-id="12:14"></div>
                    <div class="vt-KwAIRF vt timesnewroman-regular-normal-white-32px" data-id="12:15">Vt</div>
                    <div class="rectangle-5-xFxVcf rectangle-5" data-id="12:16"></div>
                    <span id="vt2" class="a3-KwAIRF timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-RQtOan rectangle-5" data-id="12:18"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:19">kV</div>
                </div>
                <div class="vs-BNLOE4a vs" data-id="12:6">
                    <div class="rectangle-5-oCiL5X rectangle-5" data-id="12:7"></div>
                    <div class="vs-oCiL5X vs timesnewroman-regular-normal-white-32px" data-id="12:8">Vs</div>
                    <div class="rectangle-5-l1w2Ym rectangle-5" data-id="12:9"></div>
                    <span id="vs2" class="a2-oCiL5X timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-h0cxms rectangle-5" data-id="12:11"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:12">kV</div>
                </div>
                <div class="vr-BNLOE4a vr" data-id="12:5">
                    <div class="rectangle-5-VKmIZQ rectangle-5" data-id="1:40"></div>
                    <div class="vr-VKmIZQ vr timesnewroman-regular-normal-white-32px" data-id="1:42">Vr</div>
                    <div class="rectangle-5-GG2tS4 rectangle-5" data-id="2:3"></div>
                    <span id="vr2" class="a1-VKmIZQ timesnewroman-regular-normal-white-32px"></span>
                    <div class="rectangle-5-QC725P rectangle-5" data-id="2:36"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="2:37">kV</div>
                </div>
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

            </div>
            <header class="header-Ys8k0x" data-id="12:86">
                <a href="../index.php" style="text-decoration: none;">
                    <div class="rectangle-2-POyVWW" data-id="1:11"></div>
                    <h1 class="title-POyVWW" data-id="1:12">MAIN SINGLE LINE</h1>
                </a>
                <div class="rectangle-2-d4Ns1Q" data-id="1:16"></div>
                <div class="gardu-induk-comal-POyVWW" data-id="1:17">GARDU INDUK COMAL</div>
                <span id="dateTime" class="tanggal-POyVWW"></span>
                <div class="rectangle-1-POyVWW" data-id="1:5"></div>
                <div class="pt-pln-persero-POyVWW" data-id="1:7">PT. PLN (Persero)</div><img class="logo_pln-1-POyVWW"
                    data-id="1:6" src="../etc/elemen/Logo_PLN.png" alt="Logo_PLN 1">

            </header>
            <div class="status-bay-Ys8k0x" data-id="35:32">
                <div class="rectangle-3-gT0ffV" data-id="1:24"></div>
                <div class="kotak-status-bay-gT0ffV" data-id="33:85">
                    <div class="rectangle-2-H5RUu2" data-id="1:22"></div>
                    <div class="status-H5RUu2" data-id="1:23">KOPEL</div>
                </div>
                <div class="bus-1-gT0ffV" data-id="33:91">
                    <div class="bus-1-_bar-ptkwRj" id="bus1">
                    </div>
                    <div class="bus-1a-_bar-ptkwRj" id="bus1a">
                    </div>
                    <div class="bus-1_text-ptkwRj fjallaone-normal-white-15px" id="bus1">BUS 1</div>
                </div>
                <div class="bus-2-gT0ffV" data-id="33:92">
                    <div class="bus-2_bar-Rqeglc" id="bus2">
                    </div>
                    <div class="bus-2a_bar-Rqeglc" id="bus2a">
                    </div>
                    <div class="bus-2_text-Rqeglc fjallaone-normal-white-15px" data-id="33:90">BUS 2</div>
                </div>
                <div class="q21-gT0ffV" data-id="35:29">
                    <div class="q21_t-uxGWYS fjallaone-normal-white-15px" data-id="35:23">Q21</div>
                    <div class="q21-uxGWYS" id="box_statQ21"></div>
                </div>
                <div class="q50-gT0ffV q50" data-id="35:28">
                    <div class="q50_t-sgyNXS fjallaone-normal-white-15px" data-id="35:25">Q50</div>
                    <div class="q50-sgyNXS q50" id="box_statQ50"></div>
                </div>
                <div class="q22-gT0ffV" data-id="35:31">
                    <div class="q22_t-Pr1xwt fjallaone-normal-white-15px" data-id="35:30">Q22</div>
                    <div class="q22-Pr1xwt" id="box_statQ22"></div>
                </div>
                <div class="live-bay-gT0ffV" data-id="34:11">
                    <div class="live-bay1-gT0ffV" id="bay1">
                    </div>
                    <div class="live-bay2-gT0ffV" id="bay2">
                    </div>
                    <div class="live-bay3-gT0ffV" id="bay3">
                    </div>
                    <div class="live-bay4-gT0ffV" id="bay4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script defer src="../etc/js/restart-btn.min.js"></script>
</body>

</html>