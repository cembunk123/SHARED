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
                url: '../backend/pekalongan1/get_data.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (data) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    //BCU
                    changeBoxColor('#box_f87lfail', data.f87lfail, "F87L FAIL");
                    changeBoxColor('#box_f87lalarm', data.f87lalarm, "F87L ALARM");
                    changeBoxColor('#box_f50fail', data.f50fail, "F50 FAIL");
                    changeBoxColor('#box_f50alarm', data.f50alarm, "F50 ALARM");
                    changeBoxColor('#box_mcbac', data.mcbac, "MCB AC");
                    changeBoxColor('#box_auxdcsupply', data.auxdcsupply, "AUX DC SUPPLY");
                    changeBoxColor('#box_q21q22close', data.q21q22close, "Q21 AND Q22 CLOSE");
                    changeBoxColor('#box_cbsringchargefail', data.cbsringchargefail, "CB SRING CHARGE FAIL");
                    changeBoxColor('#box_cbmotormcbtrip', data.cbmotormcbtrip, "CB MOTOR MCB TRIP");
                    changeBoxColor('#box_springfailR', data.springfailR, "CB R CLOSE SPRING UNCHARGE");
                    changeBoxColor('#box_springfailS', data.springfailS, "CB S CLOSE SPRING UNCHARGE");
                    changeBoxColor('#box_springfailT', data.springfailT, "CB T CLOSE SPRING UNCHARGE");
                    changeBoxColor('#box_sf6block', data.sf6block, "SF6 STAGE 2 BLOCK");
                    changeBoxColor('#box_tcs2block', data.tcs2block, "TRIP CIRCUIT 2 BLOCKED");
                    changeBoxColor('#box_sf6alarm', data.sf6alarm, "SF6 STAGE 1 ALARM");
                    changeBoxColor('#box_cbalarmac', data.cbalarmac, "CB ALARM AC CIRCUIT");
                    changeBoxColor('#box_poledis', data.poledis, "CB POLE DISCREPANCY");
                    changeBoxColor('#box_q21motor', data.q21motor, "DS Q21 MOTOR MCB TRIP");
                    changeBoxColor('#box_q21control', data.q21control, "DS Q21 CONTROL MCB TRIP");
                    changeBoxColor('#box_q22motor', data.q22motor, "DS Q22 MOTOR MCB TRIP");
                    changeBoxColor('#box_q22control', data.q22control, "DS Q22 CONTROL MCB TRIP");
                    changeBoxColor('#box_q28motor', data.q28motor, "DS Q28 MOTOR MCB TRIP");
                    changeBoxColor('#box_q28control', data.q28control, "DS Q28 CONTROL MCB TRIP");
                    changeBoxColor('#box_tcs1r', data.tcs1r, "TCS 1 FAIL PHS R");
                    changeBoxColor('#box_tcs1s', data.tcs1s, "TCS 1 FAIL PHS S");
                    changeBoxColor('#box_tcs1t', data.tcs1t, "TCS 1 FAIL PHS T");
                    changeBoxColor('#box_tcs2r', data.tcs2r, "TCS 2 FAIL PHS R");
                    changeBoxColor('#box_tcs2s', data.tcs2s, "TCS 2 FAIL PHS S");
                    changeBoxColor('#box_tcs2t', data.tcs2t, "TCS 2 FAIL PHS T");
                    changeBoxColor('#box_motormcb', data.motormcb, "MOTOR MCB TRIP");
                    changeBoxColor('#box_vtmcb', data.vtmcb, "LINE VT MBC TRIP");
                    changeBoxColor('#box_protsupply', data.protsupply, "PROTECTION SUPPLY FAIL");
                    changeBoxColor('#box_ctrlsupply', data.ctrlsupply, "CONTROL SUPPLY FAIL");
                    changeBoxColor('#box_k861op', data.k861op, "K861 OPERATE");
                    changeBoxColor('#box_k862op', data.k862op, "K862 OPERATE");
                    changeBoxColor('#box_k863op', data.k863op, "K863 OPERATE");
                    changeBoxColorSTS('#box_statQ21', data.statQ21, "");
                    changeBoxColorSTS('#box_statQ22', data.statQ22, "");
                    changeBoxColorSTS('#box_statQ50', data.statQ50, "");
                    changeBoxColorSTS('#box_statQ28', data.statQ28, "");
                    changeBoxColorSTS('#box_statQ38', data.statQ38, "");
                    changeBoxColor('#box_bcufail', data.bcufail, "BCU FAIL");
                    changeBoxColor('#box_etherfail', data.etherfail, "ETHERNET FAIL");
                    changeBoxColor('#box_buscouplerclose', data.buscouplerclose, "BUSCOUPLER CLOSE");
                    changeBoxColor('#box_olsop', data.olsop, "OLS OPERATED");

                    //OCR
                    changeBoxColor('#box_ocrop', data.ocrop, "OCR OPERATED");
                    changeBoxColor4('#box_gfrop', data.gfrop1, data.gfrop2, data.gfrop3, data.gfrop4, "GFR OPERATED");
                    changeBoxColor6('#phase_r', data.r1, data.r2, data.r3, data.r4, data.r5, data.r6, "PHASA R");
                    changeBoxColor6('#phase_s', data.s1, data.s2, data.s3, data.s4, data.s5, data.s6, "PHASA S");
                    changeBoxColor6('#phase_t', data.t1, data.t2, data.t3, data.t4, data.t5, data.t6, "PHASA T");

                    //LCD
                    changeBoxColor('#box_arlockout', data.arlockout, "AR LOCKOUT");
                    changeBoxColor('#box_cbunhealthy', data.cbunhealthy, "CB UNHEALTHY");
                    changeBoxColor('#box_aidedsend', data.aidedsend, "AIDED SEND");
                    changeBoxColor('#box_defsend', data.defsend, "DEF SEND");
                    changeBoxColor('#box_aidedreceive', data.aidedreceive, "AIDED RECEIVE");
                    changeBoxColor('#box_defreceive', data.defreceive, "DEF RECEIVE");
                    changeBoxColor('#box_diffop', data.diffop, "DIFFERENTIAL OPERATED");
                    changeBoxColor('#box_z1op', data.z1op, "DISTANCE ZONE 1 OPERATED");
                    changeBoxColor('#box_z2op', data.z2op, "DISTANCE ZONE 2 OPERATED");
                    changeBoxColor('#box_z3op', data.z3op, "DISTANCE ZONE 3 OPERATED");
                    changeBoxColor('#box_sotfop', data.sotfop, "SOTF OPERATED");
                    changeBoxColor('#box_autoreclose', data.autoreclose, "AUTO RECLOSE");
                    changeBoxColor('#box_aidedop', data.aidedop, "AIDED OPERATED");
                    changeBoxColor('#box_defop', data.defop, "DEF OPERATED");
                    changeBoxColor('#box_psb', data.psb, "POWER SWING BLOCK");
                    changeBoxColor('#box_fof87lalarm', data.fof87lalarm, "FO F87L ALARM");
                    changeBoxColor('#box_r_diff', data.r_diff, "PMLNG 1 PH R");
                    changeBoxColor('#box_s_diff', data.s_diff, "PMLNG 1 PH S");
                    changeBoxColor('#box_t_diff', data.t_diff, "PMLNG 1 PH T");
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
                url: '../backend/pekalongan1/get_datamx.php', // URL file PHP
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
                    changeLineColor('#bay1', datamx.vst, "");
                    changeLineColor('#bay2', datamx.vst, "");
                    changeLineColor('#bay3', datamx.vst, "");
                    changeLineColor('#bay4', datamx.vst, "");
                    changeLineColor('#bay5', datamx.vst, "");
                    changeLineColor('#line1', datamx.vst, "");
                    changeLineColor('#line2', datamx.vst, "");
                    changeLineColor('#line3', datamx.vst, "");
                    changeLineColor('#line4', datamx.vst, "");
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

    <link rel="stylesheet" href="../etc/styles1.css">
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
                <div class="signal69-0AvDFH" data-id="18:67">
                    <div id="phase_t" class="box">-</div>
                </div>
                <div class="signal68-0AvDFH" data-id="18:62">
                    <div id="phase_s" class="box">-</div>
                </div>
                <div class="signal67-0AvDFH" data-id="18:57">
                    <div id="phase_r" class="box">-</div>
                </div>
                <div class="signal66-0AvDFH" data-id="18:52">
                    <div class="rectangle-66-jPcLDv" data-id="3:508"></div>
                    <div class="signal-66-jPcLDv valign-text-middle fjallaone-normal-black-16px" data-id="3:509">PHASE
                        FAULT</div>
                </div>
                <div class="signal63-0AvDFH" data-id="18:61">
                    <div id="box_fof87lalarm" class="box">-</div>
                </div>
                <div class="signal62-0AvDFH" data-id="18:56">
                    <div id="box_psb" class="box">-</div>
                </div>
                <div class="signal60-0AvDFH" data-id="18:71">
                    <div id="box_defop" class="box">-</div>
                </div>
                <div class="signal59-0AvDFH" data-id="18:65">
                    <div id="box_aidedop" class="box">-</div>
                </div>
                <div class="signal58-0AvDFH" data-id="18:60">
                    <div id="box_autoreclose" class="box">-</div>
                </div>
                <div class="signal57-0AvDFH" data-id="18:55">
                    <div id="box_sotfop" class="box">-</div>
                </div>
                <div class="signal55-0AvDFH" data-id="18:70">
                    <div id="box_z3op" class="box">-</div>
                </div>
                <div class="signal54-0AvDFH" data-id="18:64">
                    <div id="box_z2op" class="box">-</div>
                </div>
                <div class="signal53-0AvDFH" data-id="18:59">
                    <div id="box_z1op" class="box">-</div>
                </div>
                <div class="signal52-0AvDFH" data-id="18:54">
                    <div id="box_diffop" class="box">-</div>
                </div>
                <div class="signal51-0AvDFH" data-id="18:49">
                    <div class="rectangle-51-VnfSgW" data-id="3:475"></div>
                    <div class="signal-51-VnfSgW valign-text-middle fjallaone-normal-black-16px" data-id="3:476">F87L
                    </div>
                </div>
                <div class="signal50-0AvDFH" data-id="35:46">
                    <div id="box_k863op" class="box">-</div>
                </div>
                <div class="signal49-0AvDFH" data-id="18:48">
                    <div id="box_k862op" class="box">-</div>
                </div>
                <div class="signal48-0AvDFH" data-id="18:43">
                    <div id="box_k861op" class="box">-</div>
                </div>
                <div class="signal44-0AvDFH" data-id="18:23">
                    <div id="box_defreceive" class="box">-</div>
                </div>
                <div class="signal43-0AvDFH" data-id="18:18">
                    <div id="box_aidedreceive" class="box">-</div>
                </div>
                <div class="signal42-0AvDFH" data-id="18:13">
                    <div id="box_defsend" class="box">-</div>
                </div>
                <div class="signal41-0AvDFH" data-id="18:12">
                    <div id="box_aidedsend" class="box">-</div>
                </div>
                <div class="signal39-0AvDFH" data-id="18:47">
                    <div id="box_cbunhealthy" class="box">-</div>
                </div>
                <div class="signal38-0AvDFH" data-id="18:42">
                    <div id="box_ctrlsupply" class="box">-</div>
                </div>
                <div class="signal37-0AvDFH" data-id="18:37">
                    <div id="box_protsupply" class="box">-</div>
                </div>
                <div class="signal36-0AvDFH" data-id="18:30">
                    <div id="box_tcs2t" class="box">-</div>
                </div>
                <div class="signal35-0AvDFH" data-id="18:27">
                    <div id="box_tcs2s" class="box">-</div>
                </div>
                <div class="signal34-0AvDFH" data-id="18:22">
                    <div id="box_tcs2r" class="box">-</div>
                </div>
                <div class="signal33-0AvDFH" data-id="18:16">
                    <div id="box_tcs1t" class="box">-</div>
                </div>
                <div class="signal32-0AvDFH" data-id="18:10">
                    <div id="box_tcs1s" class="box">-</div>
                </div>
                <div class="signal31-0AvDFH" data-id="18:6">
                    <div id="box_tcs1r" class="box">-</div>
                </div>
                <div class="signal30-0AvDFH" data-id="35:41">
                    <div id="box_vtmcb" class="box">-</div>
                </div>
                <div class="signal29-0AvDFH" data-id="18:46">
                    <div id="box_motormcb" class="box">-</div>
                </div>
                <div class="signal28-0AvDFH" data-id="18:41">
                    <div id="box_q28control" class="box">-</div>
                </div>
                <div class="signal27-0AvDFH" data-id="18:36">
                    <div id="box_q28motor" class="box">-</div>
                </div>
                <div class="signal26-0AvDFH" data-id="18:31">
                    <div id="box_q22control" class="box">-</div>
                </div>
                <div class="signal25-0AvDFH" data-id="18:26">
                    <div id="box_q22motor" class="box">-</div>
                </div>
                <div class="signal24-0AvDFH" data-id="18:21">
                    <div id="box_q21control" class="box">-</div>
                </div>
                <div class="signal23-0AvDFH" data-id="18:15">
                    <div id="box_q21motor" class="box">-</div>
                </div>
                <div class="signal22-0AvDFH" data-id="18:9">
                    <div id="box_olsop" class="box">-</div>
                </div>
                <div class="signal21-0AvDFH" data-id="18:5">
                    <div id="box_poledis" class="box">-</div>
                </div>
                <div class="signal20-0AvDFH" data-id="35:38">
                    <div id="box_cbalarmac" class="box">-</div>
                </div>
                <div class="signal19-0AvDFH" data-id="18:45">
                    <div id="box_sf6alarm" class="box">-</div>
                </div>
                <div class="signal18-0AvDFH" data-id="18:40">
                    <div id="box_tcs2block" class="box">-</div>
                </div>
                <div class="signal17-0AvDFH" data-id="18:35">
                    <div id="box_sf6block" class="box">-</div>
                </div>
                <div class="signal16-0AvDFH" data-id="18:32">
                    <div id="box_springfailT" class="box">-</div>
                </div>
                <div class="signal15-0AvDFH" data-id="18:25">
                    <div id="box_springfailS" class="box">-</div>
                </div>
                <div class="signal14-0AvDFH" data-id="18:20">
                    <div id="box_springfailR" class="box">-</div>
                </div>
                <div class="signal13-0AvDFH" data-id="18:14">
                    <div id="box_cbmotormcbtrip" class="box">-</div>
                </div>
                <div class="signal12-0AvDFH" data-id="18:8">
                    <div id="box_arlockout" class="box">-</div>
                </div>
                <div class="signal-11-0AvDFH" data-id="18:4">
                    <div id="box_cbsringchargefail" class="box">-</div>
                </div>
                <div class="signal10-0AvDFH" data-id="35:33">
                    <div id="box_q21q22close" class="box">-</div>
                </div>
                <div class="signal9-0AvDFH" data-id="18:44">
                    <div id="box_buscouplerclose" class="box">-</div>
                </div>
                <div class="signal8-0AvDFH" data-id="18:39">
                    <div id="box_auxdcsupply" class="box">-</div>
                </div>
                <div class="signal7-0AvDFH" data-id="18:34">
                    <div id="box_mcbac" class="box">-</div>
                </div>
                <div class="signal6-0AvDFH" data-id="18:33">
                    <div id="box_etherfail" class="box">-</div>
                </div>
                <div class="signal5-0AvDFH" data-id="18:24">
                    <div id="box_bcufail" class="box">-</div>
                </div>
                <div class="signal4-0AvDFH" data-id="18:19">
                    <div id="box_f50alarm" class="box">-</div>
                </div>
                <div class="signal3-0AvDFH" data-id="18:11">
                    <div id="box_f50fail" class="box">-</div>
                </div>
                <div class="signal2-0AvDFH" data-id="18:7">
                    <div id="box_f87lalarm" class="box">-</div>
                </div>
                <div class="signal-1-0AvDFH signal-1" data-id="18:3">
                    <div id="box_f87lfail" class="box">-</div>
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
                <div class="measurement-BNLOE4 measurement fjallaone-normal-white-32px" data-id="1:23">PEKALONGAN 1
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
                    <div class="status-H5RUu2" data-id="1:23">PEKALONGAN 1</div>
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
                <div class="q28-gT0ffV" data-id="35:27">
                    <div class="q28_t-ldi0Zx fjallaone-normal-white-15px" data-id="35:26">Q28</div>
                    <div class="q28-ldi0Zx" id="box_statQ28"></div>
                </div>
                <div class="q50-gT0ffV q50" data-id="35:28">
                    <div class="q50_t-sgyNXS fjallaone-normal-white-15px" data-id="35:25">Q50</div>
                    <div class="q50-sgyNXS q50" id="box_statQ50"></div>
                </div>
                <div class="q22-gT0ffV" data-id="35:31">
                    <div class="q22_t-Pr1xwt fjallaone-normal-white-15px" data-id="35:30">Q22</div>
                    <div class="q22-Pr1xwt" id="box_statQ22"></div>
                </div>
                <div class="live-line-gT0ffV" data-id="35:22">
                    <div class="live-line1-gT0ffV" id="line1"></div>
                    <div class="live-line2-gT0ffV" id="line2"></div>
                    <div class="live-line3-gT0ffV" id="line3"></div>
                    <div class="live-line4-gT0ffV" id="line4"></div>
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

                <div class="q38-gT0ffV" data-id="35:20">
                    <div class="ds-gaP5wx" id="box_statQ38"></div>
                    <div class="ground-gaP5wx" data-id="35:21"><img class="line-9-kJdZWE" data-id="35:15"
                            src="../etc/elemen/line-9.svg" alt="Line 9"><img class="line-10-kJdZWE" data-id="35:16"
                            src="../etc/elemen/line-10.svg" alt="Line 10"><img class="line-11-kJdZWE" data-id="35:17"
                            src="../etc/elemen/line-11.svg" alt="Line 11"><img class="line-12-kJdZWE" data-id="35:18"
                            src="../etc/elemen/line-12.svg" alt="Line 12"><img class="line-13-kJdZWE" data-id="35:19"
                            src="../etc/elemen/line-13.svg" alt="Line 13"></div>
                </div>
            </div>
        </div>
    </div>
    <script defer src="../etc/js/restart-btn.min.js"></script>
</body>

</html>