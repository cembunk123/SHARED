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

        var alarmSound = new Audio('../etc/elemen/alarm.mp3');
        var alarm = false;

        // Fungsi untuk mengambil data dari get_datamx.php dan menampilkan di halaman
        function fetchData() {
            $.ajax({
                url: '../backend/trafo3/get_datamx.php', // URL file PHP
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
                    changeLineColor('#line1', datamx.vst, "");
                    changeLineColor('#line2', datamx.vst, "");
                    changeLineColor('#line3', datamx.vst, "");
                    changeLineColor('#line4', datamx.vst, "");
                    changeLineColor('#line5', datamx.vst, "");
                    changeLineColor('#bay1', datamx.vst, "");
                    changeLineColor('#bay2', datamx.vst, "");
                    changeLineColor('#bay3', datamx.vst, "");
                    changeLineColor('#bay4', datamx.vst, "");
                    changeLineColor('#bay5', datamx.vst, "");
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
                    changeLineColor('#bus1', datamx.vr, "");
                    changeLineColor('#bus1a', datamx.vr, "");
                    changeLineColor('#bus2', datamx.vs, "");
                    changeLineColor('#bus2a', datamx.vs, "");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });

            $.ajax({
                url: '../backend/trafo3/get_data.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (data) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    //BCU
                    IchangeBoxColor('#box_bftoscada', data.bftoscada, "Bay Fault", alarm);
                    IchangeBoxColor('#box_idf', data.idf, "DS Driving Failure", alarm);
                    changeBoxColor('#box_mcbmkf', data.mcbmkf, "MCB In MK Trip", alarm);
                    changeBoxColor('#box_brftoscada', data.brftoscada, "Breaker Fault", alarm);
                    changeBoxColor('#box_cb_lpa', data.cb_lpa, "CB SF6 LOW Pressure Alarm", alarm);
                    changeBoxColor('#box_tcsa', data.tcsa, "Tripping Circuit Supervisory Alarm", alarm);
                    changeBoxColor('#box_cbsf', data.cbsf, "CB Spring Fail", alarm);
                    changeBoxColor('#box_bcuf', data.bcuf, "BCU Failure", alarm);
                    changeBoxColor('#box_bcurf', data.bcurf, "BCU Ring Railure", alarm);
                    changeBoxColor('#box_swf', data.swf, "Switch Failure", alarm);
                    changeBoxColor('#box_swrf', data.swrf, "Switch Ring Failure", alarm);
                    changeBoxColor('#box_lor', data.lor, "Lockout Trip Relay Operated", alarm);
                    changeBoxColor('#box_difft', data.difft, "Differential Protection Trip", alarm);
                    changeBoxColor('#box_revhvt', data.revhvt, "REF HV Trip", alarm);
                    changeBoxColor('#box_revlvt', data.revlvt, "REF LV Trip", alarm);
                    changeBoxColor('#box_ocrhvt', data.ocrhvt, "OCR / GFR Relay HV Trip", alarm);
                    changeBoxColor('#box_ocrlvt', data.ocrlvt, "OCR / GFR Relay LV Trip", alarm);
                    changeBoxColor('#box_bca', data.bca, "Buchloz Alarm", alarm);
                    changeBoxColor('#box_bct', data.bct, "Bucholz Trip", alarm);
                    changeBoxColor('#box_otia', data.otia, "Oil Temperature Alarm", alarm);
                    changeBoxColor('#box_otit', data.otit, "Oil Temperature Trip", alarm);
                    changeBoxColor('#box_wtihva', data.wtihva, "HV Winding Temperature Alarm", alarm);
                    changeBoxColor('#box_wtihvt', data.wtihvt, "HV Winding Temperature Trip", alarm);
                    changeBoxColor('#box_jt', data.jt, "Jansen Trip", alarm);
                    changeBoxColor('#box_spt', data.spt, "Sudden Pressure Trip", alarm);
                    changeBoxColor('#box_fmsf', data.fmsf, "Fan Motor Supply Fail", alarm);
                    changeBoxColor('#box_mcbdf', data.mcbdf, "MCB Motor Drive Failure", alarm);
                    changeBoxColor('#box_ola', data.ola, "Oil Level Alarm", alarm);
                    changeBoxColor('#box_wtilva', data.wtilva, "LV Winding Temperature Alarm", alarm);
                    changeBoxColor('#box_wtilvt', data.wtilvt, "LV Winding Temperature Trip", alarm);
                    changeBoxColor('#box_avrb', data.avrb, "AVR Block", alarm);
                    changeBoxColor('#box_mcbpt', data.mcbpt, "MCB In PP / CP Trafo Trip", alarm);
                    changeBoxColorSTS('#box_q21', data.q21, "");
                    changeBoxColorSTS('#box_q22', data.q22, "");
                    changeBoxColorSTS('#box_q50', data.q50, "");
                    changeBoxColorSTS('#box_q51', data.q51, "");
                    changeBoxColorSTS('#box_q30', data.q30, "");
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
        function changeBoxColor(boxId, value, nama, alarm) {
            const color = value === 'true' ? 'red' : '#0cff00;';
            $(boxId).css('background-color', '').css('background-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak

            if (color === "red" && alarm === false) {
                alarmSound.play();
                alarm = true;
            }
        }

        function IchangeBoxColor(boxId, value, nama, alarm) {
            const color = value === 'true' ? '#0cff00;' : 'red';
            $(boxId).css('background-color', '').css('background-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak

            if (color === "red" && alarm === false) {
                alarmSound.play();
                alarm = true;
            }
        }


        // Fungsi untuk mengubah warna kotak berdasarkan 4 nilai
        function changeBoxColor4(boxId, value1, value2, value3, value4, nama, alarm) {
            const isRed = [value1, value2, value3, value4].includes('true');
            const color = isRed ? 'red' : '#0cff00';
            $(boxId).css('background-color', '').css('background-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak

            if (color === "red" && alarm === false) {
                alarmSound.play();
                alarm = true;
            }
        }

        // Fungsi untuk mengubah warna kotak berdasarkan 5 nilai
        function changeBoxColor5(boxId, value1, value2, value3, value4, value5, nama, alarm) {
            const isRed = [value1, value2, value3, value4, value5].includes('true');
            const color = isRed ? 'red' : '#0cff00';
            $(boxId).css('background-color', '').css('background-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak

            if (color === "red" && alarm === false) {
                alarmSound.play();
                alarm = true;
            }
        }

        // Fungsi untuk mengubah warna kotak berdasarkan 6 nilai
        function changeBoxColor6(boxId, value1, value2, value3, value4, value5, value6, nama, alarm) {
            const isRed = [value1, value2, value3, value4, value5, value6].includes('true');
            const color = isRed ? 'red' : '#0cff00';
            $(boxId).css('background-color', '').css('background-color', color);
            $(boxId).text(nama); // Menampilkan nilai di dalam kotak

            if (color === "red" && alarm === false) {
                alarmSound.play();
                alarm = true;
            }
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
                <a href="batang1.php" style="text-decoration: none;">
                    <div class="bay1-kCx7qP" data-id="24:2">
                        <div class="bay1-mKko7V" data-id="24:3"></div>
                        <div class="bay1-xwxXxg valign-text-middle fjallaone-normal-black-24px" data-id="24:4">
                            BATANG
                            1</div>
                    </div>
                </a>
                <a href="batang2.php" style="text-decoration: none;">
                    <div class="bay2-kCx7qP" data-id="24:10">
                        <div class="bay2-RKqlSC" data-id="24:11"></div>
                        <div class="bay2-UFvSna valign-text-middle fjallaone-normal-black-24px" data-id="24:12">
                            BATANG
                            2
                        </div>
                    </div>
                </a>
                <a href="comal1.php" style="text-decoration: none;">
                    <div class="bay3-kCx7qP" data-id="24:13">
                        <div class="bay3-5LvkQS" data-id="24:14"></div>
                        <div class="bay3-3IfNfQ valign-text-middle fjallaone-normal-black-24px" data-id="24:15">
                            COMAL 1
                        </div>
                    </div>
                </a>
                <a href="comal2.php" style="text-decoration: none;">
                    <div class="bay4-kCx7qP" data-id="24:16">
                        <div class="bay4-6WK36Y" data-id="24:17"></div>
                        <div class="bay4-OxLxvc valign-text-middle fjallaone-normal-black-24px" data-id="24:18">
                            COMAL 2
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
                <a href="kapasitor.php" style="text-decoration: none;">
                    <div class="bay6-kCx7qP" data-id="24:22">
                        <div class="bay6-4Y1go2" data-id="24:23"></div>
                        <div class="bay6-Dz2XVP valign-text-middle fjallaone-normal-black-24px" data-id="24:24">
                            KAPASITOR
                        </div>
                    </div>
                </a>
                <a href="trafo1.php" style="text-decoration: none;">
                    <div class="bay7-kCx7qP" data-id="24:22">
                        <div class="bay7-bEdVnk" data-id="24:23"></div>
                        <div class="bay7-Id8k2b valign-text-middle fjallaone-normal-black-24px" data-id="24:24">
                            TRAFO 1
                        </div>
                    </div>
                </a>
                <a href="trafo2.php" style="text-decoration: none;">
                    <div class="bay8-kCx7qP" data-id="24:22">
                        <div class="bay8-ciLhrw" data-id="24:23"></div>
                        <div class="bay8-fRuNg5 valign-text-middle fjallaone-normal-black-24px" data-id="24:24">
                            TRAFO 2
                        </div>
                    </div>
                </a>
                <a href="trafo3.php" style="text-decoration: none;">
                    <div class="bay9-kCx7qP" data-id="24:22">
                        <div class="bay9-G6QKvS" data-id="24:23"></div>
                        <div class="bay9-djNN6u valign-text-middle fjallaone-normal-black-24px" data-id="24:24">
                            TRAFO 3
                        </div>
                    </div>
                </a>
                <div class="rectangle-3-kCx7qP" data-id="31:2"></div>
            </div>
            <div class="alarm-Ys8k0x" data-id="18:75">
                <div class="signal32-0AvDFH" data-id="18:6">
                    <div id="box_mcbpt" class="box">-</div>
                </div>
                <div class="signal31-0AvDFH" data-id="35:41">
                    <div id="box_avrb" class="box">-</div>
                </div>
                <div class="signal30-0AvDFH" data-id="18:46">
                    <div id="box_wtilvt" class="box">-</div>
                </div>
                <div class="signal29-0AvDFH" data-id="18:41">
                    <div id="box_wtilva" class="box">-</div>
                </div>
                <div class="signal28-0AvDFH" data-id="18:36">
                    <div id="box_ola" class="box">-</div>
                </div>
                <div class="signal27-0AvDFH" data-id="18:31">
                    <div id="box_mcbdf" class="box">-</div>
                </div>
                <div class="signal26-0AvDFH" data-id="18:26">
                    <div id="box_fmsf" class="box">-</div>
                </div>
                <div class="signal25-0AvDFH" data-id="18:21">
                    <div id="box_spt" class="box">-</div>
                </div>
                <div class="signal24-0AvDFH" data-id="18:15">
                    <div id="box_jt" class="box">-</div>
                </div>
                <div class="signal23-0AvDFH" data-id="18:9">
                    <div id="box_wtihvt" class="box">-</div>
                </div>
                <div class="signal22-0AvDFH" data-id="18:5">
                    <div id="box_wtihva" class="box">-</div>
                </div>
                <div class="signal21-0AvDFH" data-id="35:38">
                    <div id="box_otit" class="box">-</div>
                </div>
                <div class="signal20-0AvDFH" data-id="18:45">
                    <div id="box_otia" class="box">-</div>
                </div>
                <div class="signal19-0AvDFH" data-id="18:40">
                    <div id="box_bct" class="box">-</div>
                </div>
                <div class="signal18-0AvDFH" data-id="18:35">
                    <div id="box_bca" class="box">-</div>
                </div>
                <div class="signal17-0AvDFH" data-id="18:32">
                    <div id="box_ocrlvt" class="box">-</div>
                </div>
                <div class="signal16-0AvDFH" data-id="18:25">
                    <div id="box_ocrhvt" class="box">-</div>
                </div>
                <div class="signal15-0AvDFH" data-id="18:20">
                    <div id="box_revlvt" class="box">-</div>
                </div>
                <div class="signal14-0AvDFH" data-id="18:14">
                    <div id="box_revhvt" class="box">-</div>
                </div>
                <div class="signal13-0AvDFH" data-id="18:8">
                    <div id="box_difft" class="box">-</div>
                </div>
                <div class="signal12-0AvDFH signal-11" data-id="18:4">
                    <div id="box_lor" class="box">-</div>
                </div>
                <div class="signal11-0AvDFH" data-id="35:33">
                    <div id="box_swrf" class="box">-</div>
                </div>
                <div class="signal10-0AvDFH" data-id="18:44">
                    <div id="box_swf" class="box">-</div>
                </div>
                <div class="signal9-0AvDFH" data-id="18:39">
                    <div id="box_bcurf" class="box">-</div>
                </div>
                <div class="signal8-0AvDFH" data-id="18:34">
                    <div id="box_bcuf" class="box">-</div>
                </div>
                <div class="signal7-0AvDFH" data-id="18:33">
                    <div id="box_cbsf" class="box">-</div>
                </div>
                <div class="signal6-0AvDFH" data-id="18:24">
                    <div id="box_tcsa" class="box">-</div>
                </div>
                <div class="signal5-0AvDFH" data-id="18:19">
                    <div id="box_cb_lpa" class="box">-</div>
                </div>
                <div class="signal4-0AvDFH" data-id="18:11">
                    <div id="box_brftoscada" class="box">-</div>
                </div>
                <div class="signal3-0AvDFH" data-id="18:7">
                    <div id="box_mcbmkf" class="box">-</div>
                </div>
                <div class="signal2-0AvDFH" data-id="18:3">
                    <div id="box_idf" class="box">-</div>
                </div>
                <div class="signal1-0AvDFH" data-id="18:3">
                    <div id="box_bftoscada" class="box">-</div>
                </div>
                <div class="kotak-sinyal-0AvDFH" data-id="12:87">
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
            <header class="header-Ys8k0x" data-id="12:86">
                <a href="../index.php" style="text-decoration: none;">
                    <div class="rectangle-2-POyVWW" data-id="1:11"></div>
                    <h1 class="title-POyVWW" data-id="1:12">MAIN SINGLE LINE</h1>
                </a>
                <div class="rectangle-2-d4Ns1Q" data-id="1:16"></div>
                <div class="gardu-induk-comal-POyVWW" data-id="1:17">GARDU INDUK PEKALONGAN</div>
                <span id="dateTime" class="tanggal-POyVWW"></span>
                <div class="rectangle-1-POyVWW" data-id="1:5"></div>
                <div class="pt-pln-persero-POyVWW" data-id="1:7">PT. PLN (Persero)</div><img class="logo_pln-1-POyVWW"
                    data-id="1:6" src="../etc/elemen/Logo_PLN.png" alt="Logo_PLN 1">
            </header>
            <div class="status-bay-Ys8k0x" data-id="35:32">
                <div class="rectangle-3-gT0ffV" data-id="1:24"></div>
                <div class="kotak-status-bay-gT0ffV" data-id="33:85">
                    <div class="rectangle-2-H5RUu2" data-id="1:22"></div>
                    <div class="status-H5RUu2 fjallaone-normal-white-24px" data-id="1:23">TRAFO 3</div>
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
                    <div class="q21_t-uxGWYS fjallaone-normal-white-15px" data-id="35:23"></div>
                    <div class="q21-uxGWYS" id="box_q21"></div>
                </div>
                <div class="q28-gT0ffV q28" data-id="35:27">
                    <div class="q28_t-ldi0Zx fjallaone-normal-white-15px" data-id="35:26"></div>
                    <div class="q28-ldi0Zx q28" id="box_q51"></div>
                </div>
                <div class="q50-gT0ffV q50" data-id="35:28">
                    <div class="q50_t-sgyNXS fjallaone-normal-white-15px" data-id="35:25"></div>
                    <div class="q50-sgyNXS q50" id="box_q50"></div>
                </div>
                <div class="q22-gT0ffV" data-id="35:31">
                    <div class="q22_t-Pr1xwt fjallaone-normal-white-15px" data-id="35:30"></div>
                    <div class="q22-Pr1xwt" id="box_q22"></div>
                </div>
                <div class="live-line-gT0ffV" data-id="35:22">
                    <div class="live-line1-gT0ffV" id="line1"></div>
                    <div class="live-line2-gT0ffV" id="line2"></div>
                    <div class="live-line3-gT0ffV" id="line3"></div>
                    <div class="live-line4-gT0ffV" id="line4"></div>
                    <div class="live-line5-gT0ffV" id="line5"></div>
                </div>
                <div class="q38-gT0ffV" data-id="35:20">
                    <div class="ds-gaP5wx" id="box_q30"></div>
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