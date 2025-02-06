<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1920, maximum-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png">
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
        function fetchData() {
            $.ajax({
                url: '../backend/trafo1/get_datamx.php', // URL file PHP
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
                    $('#ir2').text(datamx.ir2);
                    $('#is2').text(datamx.is2);
                    $('#it2').text(datamx.it2);
                    $('#vr2').text(datamx.vr2);
                    $('#vs2').text(datamx.vs2);
                    $('#vt2').text(datamx.vt2);
                    $('#vrs2').text(datamx.vrs2);
                    $('#vst2').text(datamx.vst2);
                    $('#vtr2').text(datamx.vtr2);
                    $('#mw2').text(datamx.mw2);
                    $('#mvar2').text(datamx.mvar2);
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
                url: '../backend/trafo1/get_data.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (data) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    //BCU
                    changeBoxColor('#box_d40etherfail', data.d40etherfail, "ETHERNET FAIL PROT PANEL");
                    changeBoxColor('#box_f87tfail', data.f87tfail, "F87T FAIL");
                    changeBoxColor('#box_f501fail', data.f501fail, "F501 FAIL");
                    changeBoxColor('#box_f502fail', data.f502fail, "F502 FAIL");
                    changeBoxColor('#box_sf6block', data.sf6block, "SF6 STAGE 2 BLOCK");
                    changeBoxColor('#box_sf6alarm', data.sf6alarm, "SF6 STAGE 1 ALARM");
                    changeBoxColor('#box_springuncharge', data.springuncharge, "CLOSE SPRING UNCHARGE");
                    changeBoxColor('#box_cbmtrmcb', data.cbmtrmcb, "CB Q0 MOTOR MCB TRIP");
                    changeBoxColor('#box_q21mtrmcb', data.q21mtrmcb, "DS Q1 MOTOR MCB TRIP");
                    changeBoxColor('#box_q21ctrlmcb', data.q21ctrlmcb, "DS Q1 CONTROL MCB TRIP");
                    changeBoxColor('#box_q2mtrmcb', data.q2mtrmcb, "DS Q2 MOTOR MCB TRIP");
                    changeBoxColor('#box_q2ctrlmcb', data.q2ctrlmcb, "DS Q2 CONTROL MCB TRIP");
                    changeBoxColor('#box_mcbac', data.mcbac, "MCB AC TRIP");
                    changeBoxColor('#box_mainoilalm', data.mainoilalm, "MAIN TANK OIL HIGH LEVEL ALARM");
                    changeBoxColor('#box_oltcoilalm', data.oltcoilalm, "OLTC OIL HIGH LEVEL ALARM");
                    changeBoxColor('#box_bucholzalm', data.bucholzalm, "BUCHOLZ ALARM");
                    changeBoxColor('#box_oilalm', data.oilalm, "OIL TEMP ALARM");
                    changeBoxColor('#box_mainbreahtalm', data.mainbreahtalm, "MAIN TANK BREATH CONSV.ALARM");
                    changeBoxColor('#box_oltcbreathalm', data.oltcbreathalm, "OLTC BREATH CONSV.ALARM");
                    changeBoxColor('#box_lvwindalm', data.lvwindalm, "LV WINDING TEMP.ALARM");
                    changeBoxColor('#box_hvwindalm', data.hvwindalm, "HV WINDING TEMPT.ALARM");
                    changeBoxColor('#box_fanfail', data.fanfail, "COOLING FAN FAIL");
                    changeBoxColor('#box_oltcmotoralm', data.oltcmotoralm, "OLTC MOTOR DRIVE FAIL");
                    changeBoxColor('#box_tcs1', data.tcs1, "TCS 1 FAIL");
                    changeBoxColor('#box_tcs2', data.tcs2, "TCS 2 FAIL");
                    changeBoxColor('#box_k861op', data.k861op, "K861 OPERATE");
                    changeBoxColor('#box_k862op', data.k862op, "K862 OPERATE");
                    changeBoxColor('#box_k863op', data.k863op, "K863 OPERATE");
                    changeBoxColor('#box_mcbheater', data.mcbheater, "MK MCB HEATER TRIP");
                    changeBoxColor('#box_bucholztrip', data.bucholztrip, "BUCHLOZ TRIP");
                    changeBoxColor('#box_oiltrip', data.oiltrip, "OIL TEMP.TRIP");
                    changeBoxColor('#box_hvwindtrip', data.hvwindtrip, "HV WINDING TEMPT.TRIP");
                    changeBoxColor('#box_protpowerfail', data.protpowerfail, "PROTECTION POWER FAIL");
                    changeBoxColor('#box_ctrlporwerfail', data.ctrlporwerfail, "CONTROL POWER FAIL");
                    changeBoxColor('#box_macauxddcfail', data.macauxddcfail, "MCB AUX DDC SUPPLY FAIL");
                    changeBoxColor('#box_lvwindtrip', data.lvwindtrip, "LV WINDING TEMPT.TRIP");
                    changeBoxColor('#box_presstrip', data.presstrip, "PRESSURE RELIEFE TRIP");
                    changeBoxColor('#box_oltcpresstrip', data.oltcpresstrip, "OLTC PRESSURE RELIEFE TRIP");
                    changeBoxColor('#box_jansentrip', data.jansentrip, "JANSEN RELAY TRIP");
                    changeBoxColor('#box_mainoillow', data.mainoillow, "MAIN TANK OIL LEVEL LOW");
                    changeBoxColor('#box_oltcoillow', data.oltcoillow, "OLTC OIL LEVEL LOW");
                    changeBoxColor('#box_mtrmcbtrip', data.mtrmcbtrip, "MK MOTOR MCB TRIP");
                    changeBoxColorSTS('#box_Q0', data.Q0, "");
                    changeBoxColorSTS('#box_Q21', data.Q21, "");
                    changeBoxColorSTS('#box_Q22', data.Q22, "");
                    changeBoxColorSTS('#box_Q51', data.Q51, "");
                    changeBoxColorSTS('#box_Q38', data.Q38, "");
                    changeBoxColor('#box_ols', data.ols, "OLS Operate");
                    changeBoxColor('#box_bcufail', data.bcufail, "BCU FAIL");
                    changeBoxColor('#box_d34etherfail', data.d34etherfail, "ETHERNET FAIL CONTROL PANEL");
                    changeLineColor2('#line1', data.Q0, "");
                    changeLineColor2('#line2', data.Q0, "");
                    changeLineColor2('#line3', data.Q51, "");
                    changeLineColor2('#line4', data.Q51, "");
                    changeLineColor2('#line5', data.Q51, "");
                    changeLineColor2('#bay1', data.Q21, "");
                    changeLineColor2('#bay2', data.Q22, "");
                    changeLineColor2('#bay3', data.Q0, "");
                    changeLineColor2('#bay4', data.Q0, "");
                    changeLineColor2('#bay5', data.Q0, "");

                    //OCR LV
                    changeBoxColor('#box_ocrlvop', data.ocrlvop, "OCR LV Operated");
                    changeBoxColor('#box_ocrlvhs1', data.ocrlvhs1, "OCR LV High SET 1 Operated");
                    changeBoxColor('#box_ocrlvhs2', data.ocrlvhs2, "OCR LV High SET 2 Operated");
                    changeBoxColor('#box_gfrop', data.gfrop, "GFR LV Operated");
                    changeBoxColor('#box_gfrhs1', data.gfrhs1, "GFR LV High SET 1 Operated");
                    changeBoxColor('#box_gfrhs2', data.gfrhs2, "GFR LV High SET 2 Operated");
                    changeBoxColor('#box_d39R', data.d39R, "Trafo 1 PH R");
                    changeBoxColor('#box_d39S', data.d39S, "Trafo 1 PH S");
                    changeBoxColor('#box_d39T', data.d39T, "Trafo 1 PH T");
                    changeBoxColor('#box_inctest', data.inctest, "20kV CB Incoming In Test");
                    changeBoxColor('#box_incservice', data.incservice, "20kV CB Incoming In Service");
                    changeBoxColor('#box_mtrsupply', data.mtrsupply, "Motor Supply Fail");
                    changeBoxColor('#box_ctrlsupply', data.ctrlsupply, "Control Supply Fail");
                    changeBoxColor('#box_inclocal', data.inclocal, "20kV Incoming Switch Local");
                    changeBoxColor('#box_incremote', data.incremote, "20kV Incoming Switch Remote");
                    changeBoxColor('#box_tripsupply', data.tripsupply, "Tripping Supply Fail");
                    changeBoxColor('#box_vtmcbtrip', data.vtmcbtrip, "VT MCB Fault Trip");

                    //OCR HV
                    changeBoxColor('#box_ocrhvop', data.ocrhvop, "OCR HV Operated");
                    changeBoxColor('#box_ocrhvhs1', data.ocrhvhs1, "OCR HV High SET 1 Operated");
                    changeBoxColor('#box_gfrop1', data.gfrop1, "GFR Operated");
                    changeBoxColor('#box_f501load', data.f501load, "F501 100 % Load");
                    changeBoxColor('#box_d38R', data.d38R, "Trafo 1 PH R");
                    changeBoxColor('#box_d38S', data.d38S, "Trafo 1 PH S");
                    changeBoxColor('#box_d38T', data.d38T, "Trafo 1 PH T");

                    //DIFF
                    changeBoxColor('#box_diffop', data.diffop, "Differential Operated");
                    changeBoxColor('#box_diffinstop', data.diffinstop, "Differetial Inst Operated");
                    changeBoxColor('#box_refhvop', data.refhvop, "REV HV Operated");
                    changeBoxColor('#box_reflvop', data.reflvop, "REV LV Operated");
                    changeBoxColor('#box_inrush', data.inrush, "87T Inrush");
                    changeBoxColor5('#box_d37R', data.d37R_1, data.d37R_2, data.d37R_3, data.d37R_4, data.d37R_5, "Trafo 1 PH R");
                    changeBoxColor5('#box_d37S', data.d37S_1, data.d37S_2, data.d37S_3, data.d37S_4, data.d37S_5, "Trafo 1 PH S");
                    changeBoxColor5('#box_d37T', data.d37T_1, data.d37T_2, data.d37T_3, data.d37T_4, data.d37T_5, "Trafo 1 PH T");
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

        function changeLineColor2(boxId, value, nama) {
            let color;
            if (value === '2') {
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

        // Fungsi untuk mengubah warna kotak berdasarkan 4 nilai
        function changeBoxColor4(boxId, value1, value2, value3, value4, nama) {
            const isRed = [value1, value2, value3, value4].includes('true');
            const color = isRed ? 'red' : '#0cff00';
            $(boxId).css('background-color', '').css('background-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak
        }

        // Fungsi untuk mengubah warna kotak berdasarkan 5 nilai
        function changeBoxColor5(boxId, value1, value2, value3, value4, value5, nama) {
            const isRed = [value1, value2, value3, value4, value5].includes('true');
            const color = isRed ? 'red' : '#0cff00';
            $(boxId).css('background-color', '').css('background-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak
        }

        // Fungsi untuk mengubah warna kotak berdasarkan 6 nilai
        function changeBoxColor6(boxId, value1, value2, value3, value4, value5, value6, nama) {
            const isRed = [value1, value2, value3, value4, value5, value6].includes('true');
            const color = isRed ? 'red' : '#0cff00';
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
    <link rel="stylesheet" href="../etc/styles3.css">
</head>

<body style="margin: 0;background: #252424;"><input type="hidden" id="anPageName" name="page" value="desktop-1">
    <div class="container-center-horizontal">
        <div class="desktop-1 screen " data-id="12:85">
            <div class="bay-Ys8k0x" data-id="26:2">
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
                <div class="rectangle-3-kCx7qP" data-id="31:2"></div>
            </div>
            <div class="alarm-Ys8k0x" data-id="18:75">

                <div class="signal92-0AvDFH" data-id="18:59">
                    <div id="box_d37T" class="box">-</div>
                </div>
                <div class="signal91-0AvDFH" data-id="18:54">
                    <div id="box_d37S" class="box">-</div>
                </div>
                <div class="signal90-0AvDFH" data-id="18:59">
                    <div id="box_d37R" class="box">-</div>
                </div>
                <div class="signal89-0AvDFH" data-id="18:59">
                    <div id="box_inrush" class="box">-</div>
                </div>
                <div class="signal88-0AvDFH" data-id="18:54">
                    <div id="box_reflvop" class="box">-</div>
                </div>
                <div class="signal87-0AvDFH" data-id="18:59">
                    <div id="box_refhvop" class="box">-</div>
                </div>
                <div class="signal86-0AvDFH" data-id="18:54">
                    <div id="box_diffinstop" class="box">-</div>
                </div>
                <div class="signal85-0AvDFH" data-id="18:59">
                    <div id="box_diffop" class="box">-</div>
                </div>
                <div class="signal84-0AvDFH" data-id="18:49">
                    <div class="rectangle-84-VnfSgW" data-id="3:475"></div>
                    <div class="signal-84-VnfSgW valign-text-middle fjallaone-normal-black-24px" data-id="3:476">F87T
                    </div>
                </div>
                <div class="signal83-0AvDFH" data-id="18:59">
                    <div id="box_d38T" class="box">-</div>
                </div>
                <div class="signal82-0AvDFH" data-id="18:54">
                    <div id="box_d38S" class="box">-</div>
                </div>
                <div class="signal81-0AvDFH" data-id="18:59">
                    <div id="box_d38R" class="box">-</div>
                </div>
                <div class="signal80-0AvDFH" data-id="18:59">
                    <div id="box_f501load" class="box">-</div>
                </div>
                <div class="signal79-0AvDFH" data-id="18:54">
                    <div id="box_gfrop1" class="box">-</div>
                </div>
                <div class="signal78-0AvDFH" data-id="18:59">
                    <div id="box_ocrhvhs1" class="box">-</div>
                </div>
                <div class="signal77-0AvDFH" data-id="18:54">
                    <div id="box_ocrhvop" class="box">-</div>
                </div>
                <div class="signal76-0AvDFH" data-id="18:49">
                    <div class="rectangle-76-VnfSgW" data-id="3:475"></div>
                    <div class="signal-76-VnfSgW valign-text-middle fjallaone-normal-black-24px" data-id="3:476">OCR HV
                    </div>
                </div>
                <div class="signal75-0AvDFH" data-id="18:74">
                    <div id="box_vtmcbtrip" class="box">-</div>
                </div>
                <div class="signal74-0AvDFH" data-id="18:69">
                    <div id="box_tripsupply" class="box">-</div>
                </div>
                <div class="signal73-0AvDFH" data-id="18:63">
                    <div id="box_incremote" class="box">-</div>
                </div>
                <div class="signal72-0AvDFH" data-id="18:63">
                    <div id="box_inclocal" class="box">-</div>
                </div>
                <div class="signal70-0AvDFH" data-id="18:73">
                    <div id="box_ctrlsupply" class="box">-</div>
                </div>
                <div class="signal69-0AvDFH" data-id="18:67">
                    <div id="box_mtrsupply" class="box">-</div>
                </div>
                <div class="signal68-0AvDFH" data-id="18:62">
                    <div id="box_incservice" class="box">-</div>
                </div>
                <div class="signal67-0AvDFH" data-id="18:57">
                    <div id="box_inctest" class="box">-</div>
                </div>
                <div class="signal64-0AvDFH" data-id="18:66">
                    <div id="box_d39T" class="box">-</div>
                </div>
                <div class="signal63-0AvDFH" data-id="18:61">
                    <div id="box_d39S" class="box">-</div>
                </div>
                <div class="signal62-0AvDFH" data-id="18:56">
                    <div id="box_d39R" class="box">-</div>
                </div>
                <div class="signal59-0AvDFH" data-id="18:65">
                    <div id="box_gfrhs2" class="box">-</div>
                </div>
                <div class="signal58-0AvDFH" data-id="18:60">
                    <div id="box_gfrhs1" class="box">-</div>
                </div>
                <div class="signal57-0AvDFH" data-id="18:55">
                    <div id="box_gfrop" class="box">-</div>
                </div>
                <div class="signal54-0AvDFH" data-id="18:64">
                    <div id="box_ocrlvhs2" class="box">-</div>
                </div>
                <div class="signal53-0AvDFH" data-id="18:59">
                    <div id="box_ocrlvhs1" class="box">-</div>
                </div>
                <div class="signal52-0AvDFH" data-id="18:54">
                    <div id="box_ocrlvop" class="box">-</div>
                </div>
                <div class="signal51-0AvDFH" data-id="18:49">
                    <div class="rectangle-51-VnfSgW" data-id="3:475"></div>
                    <div class="signal-51-VnfSgW valign-text-middle fjallaone-normal-black-24px" data-id="3:476">OCR LV
                    </div>
                </div>
                <div class="signal45-0AvDFH" data-id="18:12">
                    <div id="box_d34etherfail" class="box">-</div>
                </div>
                <div class="signal44-0AvDFH" data-id="35:50">
                    <div id="box_d40etherfail" class="box">-</div>
                </div>
                <div class="signal43-0AvDFH" data-id="18:47">
                    <div id="box_ols" class="box">-</div>
                </div>
                <div class="signal42-0AvDFH" data-id="18:12">
                    <div id="box_mtrmcbtrip" class="box">-</div>
                </div>
                <div class="signal41-0AvDFH" data-id="35:50">
                    <div id="box_oltcoillow" class="box">-</div>
                </div>
                <div class="signal40-0AvDFH" data-id="18:47">
                    <div id="box_mainoillow" class="box">-</div>
                </div>
                <div class="signal39-0AvDFH" data-id="18:42">
                    <div id="box_jansentrip" class="box">-</div>
                </div>
                <div class="signal38-0AvDFH" data-id="18:37">
                    <div id="box_oltcpresstrip" class="box">-</div>
                </div>
                <div class="signal37-0AvDFH" data-id="18:30">
                    <div id="box_presstrip" class="box">-</div>
                </div>
                <div class="signal36-0AvDFH" data-id="18:27">
                    <div id="box_lvwindtrip" class="box">-</div>
                </div>
                <div class="signal35-0AvDFH" data-id="18:22">
                    <div id="box_macauxddcfail" class="box">-</div>
                </div>
                <div class="signal34-0AvDFH" data-id="18:16">
                    <div id="box_ctrlporwerfail" class="box">-</div>
                </div>
                <div class="signal33-0AvDFH" data-id="18:10">
                    <div id="box_protpowerfail" class="box">-</div>
                </div>
                <div class="signal32-0AvDFH" data-id="18:6">
                    <div id="box_hvwindtrip" class="box">-</div>
                </div>
                <div class="signal31-0AvDFH" data-id="35:41">
                    <div id="box_oiltrip" class="box">-</div>
                </div>
                <div class="signal30-0AvDFH" data-id="18:46">
                    <div id="box_bucholztrip" class="box">-</div>
                </div>
                <div class="signal29-0AvDFH" data-id="18:41">
                    <div id="box_mcbheater" class="box">-</div>
                </div>
                <div class="signal28-0AvDFH" data-id="18:36">
                    <div id="box_k863op" class="box">-</div>
                </div>
                <div class="signal27-0AvDFH" data-id="18:31">
                    <div id="box_k862op" class="box">-</div>
                </div>
                <div class="signal26-0AvDFH" data-id="18:26">
                    <div id="box_k861op" class="box">-</div>
                </div>
                <div class="signal25-0AvDFH" data-id="18:21">
                    <div id="box_tcs2" class="box">-</div>
                </div>
                <div class="signal24-0AvDFH" data-id="18:15">
                    <div id="box_tcs1" class="box">-</div>
                </div>
                <div class="signal23-0AvDFH" data-id="18:9">
                    <div id="box_oltcmotoralm" class="box">-</div>
                </div>
                <div class="signal22-0AvDFH" data-id="18:5">
                    <div id="box_fanfail" class="box">-</div>
                </div>
                <div class="signal21-0AvDFH" data-id="35:38">
                    <div id="box_hvwindalm" class="box">-</div>
                </div>
                <div class="signal20-0AvDFH" data-id="18:45">
                    <div id="box_lvwindalm" class="box">-</div>
                </div>
                <div class="signal19-0AvDFH" data-id="18:40">
                    <div id="box_oltcbreathalm" class="box">-</div>
                </div>
                <div class="signal18-0AvDFH" data-id="18:35">
                    <div id="box_mainbreahtalm" class="box">-</div>
                </div>
                <div class="signal17-0AvDFH" data-id="18:32">
                    <div id="box_oilalm" class="box">-</div>
                </div>
                <div class="signal16-0AvDFH" data-id="18:25">
                    <div id="box_bucholzalm" class="box">-</div>
                </div>
                <div class="signal15-0AvDFH" data-id="18:20">
                    <div id="box_oltcoilalm" class="box">-</div>
                </div>
                <div class="signal14-0AvDFH" data-id="18:14">
                    <div id="box_mainoilalm" class="box">-</div>
                </div>
                <div class="signal13-0AvDFH" data-id="18:8">
                    <div id="box_mcbac" class="box">-</div>
                </div>
                <div class="signal12-0AvDFH signal-11" data-id="18:4">
                    <div id="box_q2ctrlmcb" class="box">-</div>
                </div>
                <div class="signal11-0AvDFH" data-id="35:33">
                    <div id="box_q2mtrmcb" class="box">-</div>
                </div>
                <div class="signal10-0AvDFH" data-id="18:44">
                    <div id="box_q21ctrlmcb" class="box">-</div>
                </div>
                <div class="signal9-0AvDFH" data-id="18:39">
                    <div id="box_q21mtrmcb" class="box">-</div>
                </div>
                <div class="signal8-0AvDFH" data-id="18:34">
                    <div id="box_cbmtrmcb" class="box">-</div>
                </div>
                <div class="signal7-0AvDFH" data-id="18:33">
                    <div id="box_springuncharge" class="box">-</div>
                </div>
                <div class="signal6-0AvDFH" data-id="18:24">
                    <div id="box_sf6alarm" class="box">-</div>
                </div>
                <div class="signal5-0AvDFH" data-id="18:19">
                    <div id="box_sf6block" class="box">-</div>
                </div>
                <div class="signal4-0AvDFH" data-id="18:11">
                    <div id="box_f502fail" class="box">-</div>
                </div>
                <div class="signal3-0AvDFH" data-id="18:7">
                    <div id="box_f501fail" class="box">-</div>
                </div>
                <div class="signal2-0AvDFH" data-id="18:3">
                    <div id="box_f87tfail" class="box">-</div>
                </div>
                <div class="signal1-0AvDFH" data-id="18:3">
                    <div id="box_bcufail" class="box">-</div>
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
            <div class="measurement-hv-Ys8k0x measurement-hv" data-id="33:2">
                <div class="rectangle-3-M0xYid" data-id="33:3"></div>
                <div class="rectangle-2-M0xYid" data-id="33:4"></div>
                <div class="measurement-hv-M0xYid measurement-hv fjallaone-normal-white-24px" data-id="33:5">MEASUREMENT
                    HV</div>
                <div class="q-M0xYid q" data-id="33:6">
                    <div class="rectangle-5-5DM4st" data-id="33:7"></div>
                    <div class="q-5DM4st q timesnewroman-regular-normal-white-32px" data-id="33:8">Q</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="mvar" class="a11 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-oEGvBF" data-id="33:11"></div>
                    <div class="mvar-5DM4st mvar" data-id="33:12">MVAR</div>
                </div>
                <div class="p-M0xYid p" data-id="33:13">
                    <div class="rectangle-5-QihkUp" data-id="33:14"></div>
                    <div class="p-QihkUp p timesnewroman-regular-normal-white-32px" data-id="33:15">P</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="mw" class="a10 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-RAkpNO" data-id="33:18"></div>
                    <div class="mw-QihkUp mw timesnewroman-regular-normal-white-32px" data-id="33:19">MW</div>
                </div>
                <div class="it-M0xYid it" data-id="33:20">
                    <div class="rectangle-5-jMcQIr" data-id="33:21"></div>
                    <div class="it-jMcQIr it timesnewroman-regular-normal-white-32px" data-id="33:22">It</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="it" class="a9 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-t2a3rp" data-id="33:25"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:26">kV</div>
                </div>
                <div class="is-M0xYid is" data-id="33:27">
                    <div class="rectangle-5-i9XTzz" data-id="33:28"></div>
                    <div class="is-i9XTzz is timesnewroman-regular-normal-white-32px" data-id="33:29">Is</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="is" class="a8 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-eSXWFe" data-id="33:32"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:33">kV</div>
                </div>
                <div class="ir-M0xYid ir" data-id="33:34">
                    <div class="rectangle-5-rdeoTA" data-id="33:35"></div>
                    <div class="ir-rdeoTA ir timesnewroman-regular-normal-white-32px" data-id="33:36">Ir</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="ir" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-FUiomk" data-id="33:39"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:40">kV</div>
                </div>
                <div class="vtr-M0xYid vtr" data-id="33:41">
                    <div class="rectangle-5-qxqXoW" data-id="33:42"></div>
                    <div class="vtr-qxqXoW vtr timesnewroman-regular-normal-white-32px" data-id="33:43">Vtr</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="vtr" class="a6 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-H7sSG2" data-id="33:46"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:47">kV</div>
                </div>
                <div class="vst-M0xYid vst" data-id="33:48">
                    <div class="rectangle-5-KPTBBb" data-id="33:49"></div>
                    <div class="vst-KPTBBb vst timesnewroman-regular-normal-white-32px" data-id="33:50">Vst</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="vst" class="a5 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-OgThCE" data-id="33:53"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:54">kV</div>
                </div>
                <div class="vrs-M0xYid vrs" data-id="33:55">
                    <div class="rectangle-5-ixq67h" data-id="33:56"></div>
                    <div class="vrs-ixq67h vrs timesnewroman-regular-normal-white-32px" data-id="33:57">Vrs</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="vrs" class="a4 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-xVYjlv" data-id="33:60"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:61">kV</div>
                </div>
                <div class="vt-M0xYid vt" data-id="33:62">
                    <div class="rectangle-5-lM6xfU" data-id="33:63"></div>
                    <div class="vt-lM6xfU vt timesnewroman-regular-normal-white-32px" data-id="33:64">Vt</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="vt" class="a3 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-Pxx4s6" data-id="33:67"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:68">kV</div>
                </div>
                <div class="vs-M0xYid vs" data-id="33:69">
                    <div class="rectangle-5-ICq8o7" data-id="33:70"></div>
                    <div class="vs-ICq8o7 vs timesnewroman-regular-normal-white-32px" data-id="33:71">Vs</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="vs" class="a2 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-KWIPWk" data-id="33:74"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:75">kV</div>
                </div>
                <div class="vr-M0xYid vr" data-id="33:76">
                    <div class="rectangle-5-ex6u8Z" data-id="33:77"></div>
                    <div class="vr-ex6u8Z vr timesnewroman-regular-normal-white-32px" data-id="33:78">Vr</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="vr" class="a1-ex6u8Z a1 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-xTimpw" data-id="33:81"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:82">kV</div>
                </div>
            </div>
            <div class="measurement-lv-Ys8k0x measurement-lv" data-id="50:5">
                <div class="rectangle-3-A0Zz3h" data-id="50:6"></div>
                <div class="rectangle-2-A0Zz3h" data-id="50:7"></div>
                <div class="measurement-lv-A0Zz3h measurement-lv fjallaone-normal-white-24px" data-id="50:8">MEASUREMENT
                    LV</div>
                <div class="q-A0Zz3h q" data-id="50:9">
                    <div class="rectangle-5-xTxL71" data-id="50:10"></div>
                    <div class="q-xTxL71 q timesnewroman-regular-normal-white-32px" data-id="50:11">Q</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="mvar2" class="a11 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-eBgbKX" data-id="50:14"></div>
                    <div class="mvar-xTxL71 mvar" data-id="50:15">MVAR</div>
                </div>
                <div class="p-A0Zz3h p" data-id="50:16">
                    <div class="rectangle-5-FiRrVS" data-id="50:17"></div>
                    <div class="p-FiRrVS p timesnewroman-regular-normal-white-32px" data-id="50:18">P</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="mw2" class="a10 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-cvN8Qo" data-id="50:21"></div>
                    <div class="mw-FiRrVS mw timesnewroman-regular-normal-white-32px" data-id="50:22">MW</div>
                </div>
                <div class="it-A0Zz3h it" data-id="50:23">
                    <div class="rectangle-5-xmPRob" data-id="50:24"></div>
                    <div class="it-xmPRob it timesnewroman-regular-normal-white-32px" data-id="50:25">It</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="it2" class="a9 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-TsEgT7" data-id="50:28"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:29">kV</div>
                </div>
                <div class="is-A0Zz3h is" data-id="50:30">
                    <div class="rectangle-5-UlKtS4" data-id="50:31"></div>
                    <div class="is-UlKtS4 is timesnewroman-regular-normal-white-32px" data-id="50:32">Is</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="is2" class="a8 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-rpw0Ug" data-id="50:35"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:36">kV</div>
                </div>
                <div class="ir-A0Zz3h ir" data-id="50:37">
                    <div class="rectangle-5-LpLijB" data-id="50:38"></div>
                    <div class="ir-LpLijB ir timesnewroman-regular-normal-white-32px" data-id="50:39">Ir</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="ir2" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-xREJbp" data-id="50:42"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:43">kV</div>
                </div>
                <div class="vtr-A0Zz3h vtr" data-id="50:44">
                    <div class="rectangle-5-RnS7IK" data-id="50:45"></div>
                    <div class="vtr-RnS7IK vtr timesnewroman-regular-normal-white-32px" data-id="50:46">Vtr</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="vtr2" class="a6 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-4YBwpS" data-id="50:49"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:50">kV</div>
                </div>
                <div class="vst-A0Zz3h vst" data-id="50:51">
                    <div class="rectangle-5-IOuaoM" data-id="50:52"></div>
                    <div class="vst-IOuaoM vst timesnewroman-regular-normal-white-32px" data-id="50:53">Vst</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="vst2" class="a5 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-weHkx4" data-id="50:56"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:57">kV</div>
                </div>
                <div class="vrs-A0Zz3h vrs" data-id="50:58">
                    <div class="rectangle-5-MbwTOr" data-id="50:59"></div>
                    <div class="vrs-MbwTOr vrs timesnewroman-regular-normal-white-32px" data-id="50:60">Vrs</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="vrs2" class="a4 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-1MDNho" data-id="50:63"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:64">kV</div>
                </div>
                <div class="vt-A0Zz3h vt" data-id="50:65">
                    <div class="rectangle-5-j7jt4p" data-id="50:66"></div>
                    <div class="vt-j7jt4p vt timesnewroman-regular-normal-white-32px" data-id="50:67">Vt</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="vt2" class="a3 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-79NoPb" data-id="50:70"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:71">kV</div>
                </div>
                <div class="vs-A0Zz3h vs" data-id="50:72">
                    <div class="rectangle-5-tRvX8m" data-id="50:73"></div>
                    <div class="vs-tRvX8m vs timesnewroman-regular-normal-white-32px" data-id="50:74">Vs</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="vs2" class="a2 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-EKJ7RJ" data-id="50:77"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:78">kV</div>
                </div>
                <div class="vr-A0Zz3h vr" data-id="50:79">
                    <div class="rectangle-5-Li5Azn" data-id="50:80"></div>
                    <div class="vr-Li5Azn vr timesnewroman-regular-normal-white-32px" data-id="50:81">Vr</div>
                    <div>
                        <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                        <span id="vr2" class="a1-Li5Azn a1 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                    <div class="rectangle-5-Ox8f35" data-id="50:84"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:85">kV</div>
                </div>
            </div>
            <div class="tap-changer-Ys8k0x tap-changer" data-id="50:87">
                <div class="rectangle-3-1Tf1Pe" data-id="50:88"></div>
                <div class="rectangle-2-1Tf1Pe" data-id="50:89"></div>
                <div class="tap-changer-1Tf1Pe tap-changer fjallaone-normal-white-24px" data-id="50:90">TAP CHANGER
                </div>
                <div class="poss-1Tf1Pe" data-id="50:161">
                    <div class="posisi-jNgacy timesnewroman-regular-normal-white-32px" data-id="50:163">TAP :</div>
                    <div class="a1-jNgacy a1 timesnewroman-regular-normal-white-32px" data-id="50:165">A1</div>
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
                    <div class="status-H5RUu2 fjallaone-normal-white-24px" data-id="1:23">STATUS BAY</div>
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
                <div class="live-bay-gT0ffV" data-id="34:11">
                    <div class="live-bay1-gT0ffV" id="bay1">
                    </div>
                    <div class="live-bay2-gT0ffV" id="bay2">
                    </div>
                    <div class="live-bay3-gT0ffV" id="bay3">
                    </div>
                    <div class="live-bay4-gT0ffV" id="bay4">
                    </div>
                    <div class="live-bay5-gT0ffV" id="bay5">
                    </div>
                </div>
                <div class="q21-gT0ffV" data-id="35:29">
                    <div class="q21_t-uxGWYS fjallaone-normal-white-15px" data-id="35:23">Q21</div>
                    <div class="q21-uxGWYS" id="box_Q21"></div>
                </div>
                <div class="q28-gT0ffV q28" data-id="35:27">
                    <div class="q28_t-ldi0Zx fjallaone-normal-white-15px" data-id="35:26">Q51</div>
                    <div class="q28-ldi0Zx q28" id="box_Q51"></div>
                </div>
                <div class="q50-gT0ffV q50" data-id="35:28">
                    <div class="q50_t-sgyNXS fjallaone-normal-white-15px" data-id="35:25">Q0</div>
                    <div class="q50-sgyNXS q50" id="box_Q0"></div>
                </div>
                <div class="q22-gT0ffV" data-id="35:31">
                    <div class="q22_t-Pr1xwt fjallaone-normal-white-15px" data-id="35:30">Q22</div>
                    <div class="q22-Pr1xwt" id="box_Q22"></div>
                </div>
                <div class="live-line-gT0ffV" data-id="35:22">
                    <div class="live-line1-gT0ffV" id="line1"></div>
                    <div class="live-line2-gT0ffV" id="line2"></div>
                    <div class="live-line3-gT0ffV" id="line3"></div>
                    <div class="live-line4-gT0ffV" id="line4"></div>
                    <div class="live-line5-gT0ffV" id="line5"></div>
                </div>
                <div class="q38-gT0ffV" data-id="35:20">
                    <div class="ds-gaP5wx" id="box_Q38"></div>
                    <div class="ground-gaP5wx" data-id="35:21"><img class="line-9-kJdZWE" data-id="35:15"
                            src="../etc/elemen/line-9.svg" alt="Line 9"><img class="line-10-kJdZWE" data-id="35:16"
                            src="../etc/elemen/line-10.svg" alt="Line 10"><img class="line-11-kJdZWE" data-id="35:17"
                            src="../etc/elemen/line-11.svg" alt="Line 11"><img class="line-12-kJdZWE" data-id="35:18"
                            src="../etc/elemen/line-12.svg" alt="Line 12"><img class="line-13-kJdZWE" data-id="35:19"
                            src="../etc/elemen/line-13.svg" alt="Line 13"></div>
                </div>
                <div class="trafo-gT0ffV" data-id="50:171">
                    <div class="ellipse-1-ekZuDE" data-id="50:3"></div>
                    <div class="ellipse-2-ekZuDE" data-id="50:4"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>