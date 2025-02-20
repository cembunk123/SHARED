<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1920, maximum-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="etc/elemen/Logo_PLN.png">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="photo">
    <script src="etc/js/timeline.js"></script>

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


    <script src="etc/js/jquery-3.6.0.min.js"></script>
    <script>
        // Fungsi untuk mengambil data dari get_datamx.php dan menampilkan di halaman
        function fetchDataKopel() {
            $.ajax({
                url: 'backend/kopel/get_datamx.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (datamx) {
                    // Memperbarui elemen dengan data baru
                    $('#ir').text(datamx.ir);
                    $('#is').text(datamx.is);
                    $('#it').text(datamx.it);
                    $('#vst').text(datamx.vst);
                    $('#vst2').text(datamx.vst2);
                    changeLineColor('#bus1', datamx.vst, "");
                    changeLineColor('#bus1a', datamx.vst, "");
                    changeLineColor('#bus1a1', datamx.vst, "");
                    changeLineColor('#bus1a2', datamx.vst, "");
                    changeLineColor('#bus1a3', datamx.vst, "");
                    changeLineColor('#bus1a4', datamx.vst, "");
                    changeLineColor('#bus1a5', datamx.vst, "");
                    changeLineColor('#bus1a6', datamx.vst, "");
                    changeLineColor('#bus2', datamx.vst2, "");
                    changeLineColor('#bus2a', datamx.vst2, "");
                    changeLineColor('#bus2a1', datamx.vst2, "");
                    changeLineColor('#bus2a2', datamx.vst2, "");
                    changeLineColor('#bus2a3', datamx.vst2, "");
                    changeLineColor('#bus2a4', datamx.vst2, "");
                    changeLineColor('#bus2a5', datamx.vst2, "");
                    changeLineColor('#bus2a6', datamx.vst2, "");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
            $.ajax({
                url: 'backend/kopel/get_data.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (data) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    changeBoxColorSTS('#cpl_Q21', data.statQ21, "");
                    changeBoxColorSTS('#cpl_Q22', data.statQ22, "");
                    changeBoxColorSTS('#cpl_Q50', data.statQ50, "");
                    changeLineColor2('#cpl_bay1', data.statQ21, "");
                    changeLineColor2('#cpl_bay2', data.statQ22, "");
                    changeLineColor2('#cpl_bay3', data.statQ21, "");
                    changeLineColor2('#cpl_bay4', data.statQ22, "");

                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
        function fetchDataPemalang1() {
            $.ajax({
                url: 'backend/pemalang1/get_datamx.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (datamx) {
                    // Memperbarui elemen dengan data baru
                    $('#pml1_is').text(datamx.is);
                    $('#pml1_vst').text(datamx.vst);
                    $('#pml1_mw').text(datamx.mw);
                    $('#pml1_mvar').text(datamx.mvar);
                    changeLineColor('#pml1_bay1', datamx.vst, "");
                    changeLineColor('#pml1_bay2', datamx.vst, "");
                    changeLineColor('#pml1_bay3', datamx.vst, "");
                    changeLineColor('#pml1_bay4', datamx.vst, "");
                    changeLineColor('#pml1_line1', datamx.vst, "");
                    changeLineColor('#pml1_line2', datamx.vst, "");
                    changeLineColor('#pml1_line3', datamx.vst, "");
                    changeLineColor('#pml1_line4', datamx.vst, "");
                    changeLineColor('#pml1_line5', datamx.vst, "");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
            $.ajax({
                url: 'backend/pemalang1/get_data.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (data) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    changeBoxColorSTS('#pml1_Q21', data.statQ21, "");
                    changeBoxColorSTS('#pml1_Q22', data.statQ22, "");
                    changeBoxColorSTS('#pml1_Q50', data.statQ50, "");
                    changeBoxColorSTS('#pml1_Q28', data.statQ28, "");
                    changeBoxColorSTS('#pml1_Q38', data.statQ38, "");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
        function fetchDataPemalang2() {
            $.ajax({
                url: 'backend/pemalang2/get_datamx.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (datamx) {
                    // Memperbarui elemen dengan data baru
                    $('#pml2_is').text(datamx.is);
                    $('#pml2_vst').text(datamx.vst);
                    $('#pml2_mw').text(datamx.mw);
                    $('#pml2_mvar').text(datamx.mvar);
                    changeLineColor('#pml2_bay1', datamx.vst, "");
                    changeLineColor('#pml2_bay2', datamx.vst, "");
                    changeLineColor('#pml2_bay3', datamx.vst, "");
                    changeLineColor('#pml2_bay4', datamx.vst, "");
                    changeLineColor('#pml2_line1', datamx.vst, "");
                    changeLineColor('#pml2_line2', datamx.vst, "");
                    changeLineColor('#pml2_line3', datamx.vst, "");
                    changeLineColor('#pml2_line4', datamx.vst, "");
                    changeLineColor('#pml2_line5', datamx.vst, "");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
            $.ajax({
                url: 'backend/pemalang2/get_data.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (data) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    changeBoxColorSTS('#pml2_Q21', data.statQ21, "");
                    changeBoxColorSTS('#pml2_Q22', data.statQ22, "");
                    changeBoxColorSTS('#pml2_Q50', data.statQ50, "");
                    changeBoxColorSTS('#pml2_Q28', data.statQ28, "");
                    changeBoxColorSTS('#pml2_Q38', data.statQ38, "");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
        function fetchDataPekalongan1() {
            $.ajax({
                url: 'backend/pekalongan1/get_datamx.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (datamx) {
                    // Memperbarui elemen dengan data baru
                    $('#pkl1_is').text(datamx.is);
                    $('#pkl1_vst').text(datamx.vst);
                    $('#pkl1_mw').text(datamx.mw);
                    $('#pkl1_mvar').text(datamx.mvar);
                    changeLineColor('#pkl1_bay1', datamx.vst, "");
                    changeLineColor('#pkl1_bay2', datamx.vst, "");
                    changeLineColor('#pkl1_bay3', datamx.vst, "");
                    changeLineColor('#pkl1_bay4', datamx.vst, "");
                    changeLineColor('#pkl1_line1', datamx.vst, "");
                    changeLineColor('#pkl1_line2', datamx.vst, "");
                    changeLineColor('#pkl1_line3', datamx.vst, "");
                    changeLineColor('#pkl1_line4', datamx.vst, "");
                    changeLineColor('#pkl1_line5', datamx.vst, "");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
            $.ajax({
                url: 'backend/pekalongan1/get_data.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (data) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    changeBoxColorSTS('#pkl1_Q21', data.statQ21, "");
                    changeBoxColorSTS('#pkl1_Q22', data.statQ22, "");
                    changeBoxColorSTS('#pkl1_Q50', data.statQ50, "");
                    changeBoxColorSTS('#pkl1_Q28', data.statQ28, "");
                    changeBoxColorSTS('#pkl1_Q38', data.statQ38, "");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
        function fetchDataPekalongan2() {
            $.ajax({
                url: 'backend/pekalongan2/get_datamx.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (datamx) {
                    // Memperbarui elemen dengan data baru
                    $('#pkl2_is').text(datamx.is);
                    $('#pkl2_vst').text(datamx.vst);
                    $('#pkl2_mw').text(datamx.mw);
                    $('#pkl2_mvar').text(datamx.mvar);
                    changeLineColor('#pkl2_bay1', datamx.vst, "");
                    changeLineColor('#pkl2_bay2', datamx.vst, "");
                    changeLineColor('#pkl2_bay3', datamx.vst, "");
                    changeLineColor('#pkl2_bay4', datamx.vst, "");
                    changeLineColor('#pkl2_line1', datamx.vst, "");
                    changeLineColor('#pkl2_line2', datamx.vst, "");
                    changeLineColor('#pkl2_line3', datamx.vst, "");
                    changeLineColor('#pkl2_line4', datamx.vst, "");
                    changeLineColor('#pkl2_line5', datamx.vst, "");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });

            $.ajax({
                url: 'backend/pekalongan2/get_data.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (data) {

                    // Mengubah warna kotak berdasarkan nilai variabel
                    changeBoxColorSTS('#pkl2_Q21', data.statQ21, "");
                    changeBoxColorSTS('#pkl2_Q22', data.statQ22, "");
                    changeBoxColorSTS('#pkl2_Q50', data.statQ50, "");
                    changeBoxColorSTS('#pkl2_Q28', data.statQ28, "");
                    changeBoxColorSTS('#pkl2_Q38', data.statQ38, "");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
        function fetchDataTrafo1() {
            $.ajax({
                url: 'backend/trafo1/get_datamx.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (datamx) {
                    // Memperbarui elemen dengan data baru
                    $('#trf1_is').text(datamx.is);
                    $('#trf1_vst').text(datamx.vst);
                    $('#trf1_mw').text(datamx.mw);
                    $('#trf1_mvar').text(datamx.mvar);
                    $('#trf1_is2').text(datamx.is2);
                    $('#trf1_vst2').text(datamx.vst2);
                    $('#trf1_mw2').text(datamx.mw2);
                    $('#trf1_mvar2').text(datamx.mvar2);
					changeLineColor('#trf1_bay1', datamx.vst, "");
                    changeLineColor('#trf1_bay2', datamx.vst, "");
                    changeLineColor('#trf1_bay3', datamx.vst, "");
                    changeLineColor('#trf1_bay4', datamx.vst, "");
                    changeLineColor('#trf1_bay5', datamx.vst, "");
                    changeLineColor('#trf1_line1', datamx.vst, "");
                    changeLineColor('#trf1_line2', datamx.vst, "");
                    changeLineColor('#trf1_line3', datamx.vst, "");
                    changeLineColor('#trf1_line4', datamx.vst, "");
                    changeLineColor('#trf1_line5', datamx.vst, "");
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
            $.ajax({
                url: 'backend/trafo1/get_data.php', // URL file PHP
                method: 'GET',
                dataType: 'json', // Mengharapkan data JSON
                success: function (data) {
                    // Memperbarui elemen dengan data baru
                    changeBoxColorSTS('#trf1_Q50', data.Q0, "");
                    changeBoxColorSTS('#trf1_Q21', data.Q21, "");
                    changeBoxColorSTS('#trf1_Q22', data.Q22, "");
                    changeBoxColorSTS('#trf1_Q51', data.Q51, "");
                    changeBoxColorSTS('#trf1_Q38', data.Q38, "");
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
        setInterval(fetchDataKopel, 5000);
        setInterval(fetchDataPemalang1, 5000);
        setInterval(fetchDataPemalang2, 5000);
        setInterval(fetchDataPekalongan1, 5000);
        setInterval(fetchDataPekalongan2, 5000);
        setInterval(fetchDataTrafo1, 5000);

        // Memanggil fetchData pertama kali saat halaman dimuat
        $(document).ready(function () {
            fetchDataKopel();
            fetchDataPemalang1();
            fetchDataPemalang2();
            fetchDataPekalongan1();
            fetchDataPekalongan2();
            fetchDataTrafo1();
        });
    </script>

    <link rel="stylesheet" href="etc/styles.css">
</head>

<body style="margin: 0;background: #252424;"><input type="hidden" id="anPageName" name="page" value="desktop-1">
    <div class="container-center-horizontal">
        <div class="desktop-1 screen " data-id="54:4">
            <header class="header-Ys8k0x" data-id="54:5">
                <a href="index.php" style="text-decoration: none;">
                    <div class="rectangle-2-POyVWW" data-id="54:6"></div>
                    <h1 class="title-POyVWW" data-id="54:7">MAIN SINGLE LINE</h1>
                </a>
                <div class="rectangle-2-d4Ns1Q" data-id="54:8"></div>
                <div class="gardu-induk-comal-POyVWW" data-id="54:9">GARDU INDUK COMAL</div>
                <span id="dateTime" class="tanggal-POyVWW"></span>
                <div class="rectangle-1-POyVWW" data-id="54:11"></div>
                <div class="pt-pln-persero-POyVWW" data-id="1:7">PT. PLN (Persero)</div><img class="logo_pln-1-POyVWW"
                    data-id="1:6" src="etc/elemen/Logo_PLN.png" alt="Logo_PLN 1">
            </header>
            <div class="busbar-Ys8k0x" data-id="54:383">
                <div class="vt-bus-1-c1Ifb1" data-id="54:401">
                    <div class="vt1-095tTo" data-id="54:388">
                        <div class="ellipse-1-8QiqHF ellipse-1" data-id="54:389"></div>
                        <div class="ellipse-2-8QiqHF ellipse-2" data-id="54:390"></div>
                    </div>
                    <div class="measure-bus-1-095tTo" data-id="54:448">
                        <div class="nama" data-id="54:449">
                            <div class="rectangle-5-yupvvH rectangle-5" data-id="54:450"></div>
                            <div class="v timesnewroman-regular-normal-white-12px" data-id="54:451">V:</div>
                        </div>
                        <div class="float" data-id="54:452">
                            <div class="rectangle-5-ut1YwK rectangle-5" data-id="54:453"></div>
                            <div class="a1 timesnewroman-regular-normal-white-12px" id="vst">-</div>
                        </div>
                        <div class="unit" data-id="54:455">
                            <div class="rectangle-5-mqrvbH rectangle-5" data-id="54:456"></div>
                            <div class="k-v timesnewroman-regular-normal-white-12px" data-id="54:457">kV</div>
                        </div>
                    </div>
                </div>
                <div class="vt-bus-2-c1Ifb1" data-id="54:402">
                    <div class="vt2-gKTW4M" data-id="54:392">
                        <div class="ellipse-1-XGSqhI ellipse-1" data-id="54:393"></div>
                        <div class="ellipse-2-XGSqhI ellipse-2" data-id="54:394"></div>
                    </div>
                    <div class="measure-bus-2-gKTW4M" data-id="54:437">
                        <div class="nama" data-id="54:438">
                            <div class="rectangle-5-UXePSJ rectangle-5" data-id="54:439"></div>
                            <div class="v timesnewroman-regular-normal-white-12px" data-id="54:440">V:</div>
                        </div>
                        <div class="float" data-id="54:441">
                            <div class="rectangle-5-iCt4aC rectangle-5" data-id="54:442"></div>
                            <div class="a1 timesnewroman-regular-normal-white-12px" id="vst2">-</div>
                        </div>
                        <div class="unit" data-id="54:444">
                            <div class="rectangle-5-PL3Jjy rectangle-5" data-id="54:445"></div>
                            <div class="k-v timesnewroman-regular-normal-white-12px" data-id="54:446">kV</div>
                        </div>
                    </div>
                </div>
                <div class="bus-1-c1Ifb1 bus-1" data-id="54:400">
                    <div class="bus-1-o1RsUs bus-1" id="bus1"></div>
                    <div class="bus-1-xCiyUr bus-1" id="bus1a"></div>
                    <div class="bus-1_t-o1RsUs fjallaone-normal-white-12px" data-id="54:378">BUS I</div>
                </div>
                <div class="bus-2-c1Ifb1 bus-2" data-id="54:399">
                    <div class="bus-2-FsSAzq bus-2" id="bus2"></div>
                    <div class="bus-2-uAFJa0 bus-2" id="bus2a"></div>
                    <div class="bus-2_t-FsSAzq fjallaone-normal-white-12px" data-id="54:380">BUS II</div>
                </div>
            </div>
            <div class="trafo1-Ys8k0x" data-id="54:17">
                <div class="q38-4ESzko q38" data-id="54:53">
                    <div class="ds-lJIVFx ds" id="trf1_Q38"></div>
                    <div class="q38_t-lJIVFx q38_t fjallaone-normal-white-12px" data-id="54:241">Q38</div>
                    <div class="ground-lJIVFx ground" data-id="54:55"><img class="line-9" data-id="54:56"
                            src="etc/elemen/line-9.svg" alt="Line 9"><img class="line-10" data-id="35:16"
                            src="etc/elemen/line-10.svg" alt="Line 10"><img class="line-11" data-id="35:17"
                            src="etc/elemen/line-11.svg" alt="Line 11"><img class="line-12" data-id="35:18"
                            src="etc/elemen/line-12.svg" alt="Line 12"><img class="line-13" data-id="35:19"
                            src="etc/elemen/line-13.svg" alt="Line 13"></div>
                </div>
                <div class="q51-4ESzko q51" data-id="54:41">
                    <div class="q51_t-DSCspl fjallaone-normal-white-12px" data-id="54:42">Q51</div>
                    <div class="q51-DSCspl q51" id="trf1_Q51"></div>
                </div>
                <div class="live-line-4ESzko live-line" data-id="54:197">
                    <div class="bus-12-UOoK2b bus-12" id="trf1_line5"></div>
                    <div class="bus-11-UOoK2b bus-11" id="trf1_line4"></div>
                    <div class="bus-10-UOoK2b bus-10" id="trf1_line3"></div>
                    <div class="bus-9-UOoK2b bus-9" id="trf1_line2"></div>
                    <div class="bus-8-UOoK2b bus-8" id="trf1_line1"></div>
                </div>
                <div class="q50-4ESzko" data-id="54:44">
                    <div class="q50_t-sgPDTd q50_t fjallaone-normal-white-12px" data-id="54:45">Q50</div>
                    <div class="q50-sgPDTd" id="trf1_Q50"></div>
                </div>
                <div class="live-bay-4ESzko live-bay" data-id="54:184">
                    <div class="bus-7-ccAgh1" id="trf1_bay5"></div>
                    <div class="bus-6-ccAgh1 bus-6" id="trf1_bay4"></div>
                    <div class="bus-5-ccAgh1 bus-5" id="trf1_bay3"></div>
                    <div class="bus-4-ccAgh1 bus-4" id="trf1_bay2"></div>
                    <div class="bus-3" id="trf1_bay1"></div>
                </div>
                <div class="q22-4ESzko" data-id="54:47">
                    <div class="q22-hW7g5a" id="trf1_Q22"></div>
                    <div class="q22-IWpOUX fjallaone-normal-white-12px" data-id="54:39">Q22</div>
                </div>
                <div class="q21-4ESzko" data-id="54:38">
                    <div class="q21_t fjallaone-normal-white-12px" data-id="54:67">Q21</div>
                    <div class="q21-mCwm00" id="trf1_Q21"></div>
                </div>
                <div class="bus-4ESzko bus" data-id="54:168">
                    <div class="bus-2-zx1WhJ bus-2" id="bus2a5"></div>
                    <div class="bus-1-zx1WhJ bus-1" id="bus1a5"></div>
                </div>
                <div class="trafo-4ESzko" data-id="54:61">
                    <div class="ellipse-1-3ylPLj ellipse-1" data-id="54:62"></div>
                    <div class="ellipse-2-3ylPLj ellipse-2" data-id="54:63"></div>
                </div>
            </div>
            <div class="pemalang-2-Ys8k0x" data-id="54:198">
                <div class="q38-qgRYMd q38" data-id="54:199">
                    <div class="ds-BTuVP5 ds" id="pml2_Q38"></div>
                    <div class="q38_t-BTuVP5 q38_t fjallaone-normal-white-12px" data-id="54:238">Q38</div>
                    <div class="ground-BTuVP5 ground" data-id="54:201"><img class="line-9" data-id="54:202"
                            src="etc/elemen/line-9.svg" alt="Line 9"><img class="line-10" data-id="35:16"
                            src="etc/elemen/line-10.svg" alt="Line 10"><img class="line-11" data-id="35:17"
                            src="etc/elemen/line-11.svg" alt="Line 11"><img class="line-12" data-id="35:18"
                            src="etc/elemen/line-12.svg" alt="Line 12"><img class="line-13" data-id="35:19"
                            src="etc/elemen/line-13.svg" alt="Line 13"></div>
                </div>
                <div class="q28-qgRYMd" data-id="54:207">
                    <div class="q28_t fjallaone-normal-white-12px" data-id="54:208">Q28</div>
                    <div class="q28-NG3hK7" id="pml2_Q28"></div>
                </div>
                <div class="live-line-qgRYMd live-line" data-id="54:210">
                    <div class="bus-12-mnxXnN bus-12" id="pml2_line5"></div>
                    <div class="bus-11-mnxXnN bus-11" id="pml2_line4"></div>
                    <div class="bus-10-mnxXnN bus-10" id="pml2_line3"></div>
                    <div class="bus-9-mnxXnN bus-9" id="pml2_line2"></div>
                    <div class="bus-8-mnxXnN bus-8" id="pml2_line1"></div>
                </div>
                <div class="q50-qgRYMd" data-id="54:216">
                    <div class="q50_t-8Hxrxy q50_t fjallaone-normal-white-12px" data-id="54:217">Q50</div>
                    <div class="q50-8Hxrxy" id="pml2_Q50"></div>
                </div>
                <div class="live-bay-qgRYMd live-bay" data-id="54:219">
                    <div class="bus-6-k3dw6u bus-6" id="pml2_bay4"></div>
                    <div class="bus-5-k3dw6u bus-5" id="pml2_bay3"></div>
                    <div class="bus-4-k3dw6u bus-4" id="pml2_bay2"></div>
                    <div class="bus-3" id="pml2_bay1"></div>
                </div>
                <div class="q22-qgRYMd" data-id="54:225">
                    <div class="q22-MnoWSt" id="pml2_Q22"></div>
                    <div class="q22-wHEcT1 fjallaone-normal-white-12px" data-id="54:227">Q22</div>
                </div>
                <div class="q21-qgRYMd" data-id="54:228">
                    <div class="q21_t fjallaone-normal-white-12px" data-id="54:395">Q21</div>
                    <div class="q21-X13xxx" id="pml2_Q21"></div>
                </div>
                <div class="bus-qgRYMd bus" data-id="54:231">
                    <div class="bus-1-hjirgL bus-1" id="bus1a1"></div>
                    <div class="bus-2-hjirgL bus-2" id="bus2a1"></div>
                </div>
            </div>
            <div class="pemalang-1-Ys8k0x" data-id="54:243">
                <div class="q38-QTf9xH q38" data-id="54:244">
                    <div class="ds-z6duhV ds" id="pml1_Q38"></div>
                    <div class="q38_t-z6duhV q38_t fjallaone-normal-white-12px" data-id="54:246">Q38</div>
                    <div class="ground-z6duhV ground" data-id="54:247"><img class="line-9" data-id="54:248"
                            src="etc/elemen/line-9.svg" alt="Line 9"><img class="line-10" data-id="35:16"
                            src="etc/elemen/line-10.svg" alt="Line 10"><img class="line-11" data-id="35:17"
                            src="etc/elemen/line-11.svg" alt="Line 11"><img class="line-12" data-id="35:18"
                            src="etc/elemen/line-12.svg" alt="Line 12"><img class="line-13" data-id="35:19"
                            src="etc/elemen/line-13.svg" alt="Line 13"></div>
                </div>
                <div class="q28-QTf9xH" data-id="54:253">
                    <div class="q28_t fjallaone-normal-white-12px" data-id="54:254">Q28</div>
                    <div class="q28-B0xBxk" id="pml1_Q28"></div>
                </div>
                <div class="live-line-QTf9xH live-line" data-id="54:256">
                    <div class="bus-12-JjsfGm bus-12" id="pml1_line5"></div>
                    <div class="bus-11-JjsfGm bus-11" id="pml1_line4"></div>
                    <div class="bus-10-JjsfGm bus-10" id="pml1_line3"></div>
                    <div class="bus-9-JjsfGm bus-9" id="pml1_line2"></div>
                    <div class="bus-8-JjsfGm bus-8" id="pml1_line1"></div>
                </div>
                <div class="q50-QTf9xH" data-id="54:262">
                    <div class="q50_t-xk41Hf q50_t fjallaone-normal-white-12px" data-id="54:263">Q50</div>
                    <div class="q50-xk41Hf" id="pml1_Q50"></div>
                </div>
                <div class="live-bay-QTf9xH live-bay" data-id="54:265">
                    <div class="bus-6-AtukBR bus-6" id="pml1_bay4"></div>
                    <div class="bus-5-AtukBR bus-5" id="pml1_bay3"></div>
                    <div class="bus-4-AtukBR bus-4" id="pml1_bay2"></div>
                    <div class="bus-3" id="pml1_bay1"></div>
                </div>
                <div class="q22-QTf9xH" data-id="54:270">
                    <div class="q22-5pYZSw" id="pml1_Q22"></div>
                    <div class="q22-T6XNI6 fjallaone-normal-white-12px" data-id="54:272">Q22</div>
                </div>
                <div class="q21-QTf9xH" data-id="54:273">
                    <div class="q21_t fjallaone-normal-white-12px" data-id="54:274">Q21</div>
                    <div class="q21-ERxVVZ" id="pml1_Q21"></div>
                </div>
                <div class="bus-QTf9xH bus" data-id="54:276">
                    <div class="bus-1-bonUM6 bus-1" id="bus1a2"></div>
                    <div class="bus-2-bonUM6 bus-2" id="bus2a2"></div>
                </div>
            </div>
            <div class="pekalongan-1-Ys8k0x" data-id="54:280">
                <div class="q38-TEyd04 q38" data-id="54:281">
                    <div class="ds-4V4KCh ds" id="pkl1_Q38"></div>
                    <div class="q38_t-4V4KCh q38_t fjallaone-normal-white-12px" data-id="54:283">Q38</div>
                    <div class="ground-4V4KCh ground" data-id="54:284"><img class="line-9" data-id="54:285"
                            src="etc/elemen/line-9.svg" alt="Line 9"><img class="line-10" data-id="35:16"
                            src="etc/elemen/line-10.svg" alt="Line 10"><img class="line-11" data-id="35:17"
                            src="etc/elemen/line-11.svg" alt="Line 11"><img class="line-12" data-id="35:18"
                            src="etc/elemen/line-12.svg" alt="Line 12"><img class="line-13" data-id="35:19"
                            src="etc/elemen/line-13.svg" alt="Line 13"></div>
                </div>
                <div class="q28-TEyd04" data-id="54:290">
                    <div class="q28_t fjallaone-normal-white-12px" data-id="54:291">Q28</div>
                    <div class="q28-GuvHVC" id="pkl1_Q28"></div>
                </div>
                <div class="live-line-TEyd04 live-line" data-id="54:293">
                    <div class="bus-12-75pG20 bus-12" id="pkl1_line5"></div>
                    <div class="bus-11-75pG20 bus-11" id="pkl1_line4"></div>
                    <div class="bus-10-75pG20 bus-10" id="pkl1_line3"></div>
                    <div class="bus-9-75pG20 bus-9" id="pkl1_line2"></div>
                    <div class="bus-8-75pG20 bus-8" id="pkl1_line1"></div>
                </div>
                <div class="q50-TEyd04" data-id="54:299">
                    <div class="q50_t-nfjWrQ q50_t fjallaone-normal-white-12px" data-id="54:300">Q50</div>
                    <div class="q50-nfjWrQ" id="pkl1_Q50"></div>
                </div>
                <div class="live-bay-TEyd04 live-bay" data-id="54:302">
                    <div class="bus-6-VRZaZw bus-6" id="pkl1_bay4"></div>
                    <div class="bus-5-VRZaZw bus-5" id="pkl1_bay3"></div>
                    <div class="bus-4-VRZaZw bus-4" id="pkl1_bay2"></div>
                    <div class="bus-3" id="pkl1_bay1"></div>
                </div>
                <div class="q22-TEyd04" data-id="54:307">
                    <div class="q22-XOJQAx" id="pkl1_Q22"></div>
                    <div class="q22-KikCz5 fjallaone-normal-white-12px" data-id="54:309">Q22</div>
                </div>
                <div class="q21-TEyd04" data-id="54:310">
                    <div class="q21_t fjallaone-normal-white-12px" data-id="54:311">Q21</div>
                    <div class="q21-RS4KBX" id="pkl1_Q21"></div>
                </div>
                <div class="bus-TEyd04 bus" data-id="54:313">
                    <div class="bus-1-4tJxXz bus-1" id="bus1a3"></div>
                    <div class="bus-2-4tJxXz bus-2" id="bus2a3"></div>
                </div>
            </div>
            <div class="pekalongan-2-Ys8k0x" data-id="54:316">
                <div class="q38-jrzlY8 q38" data-id="54:317">
                    <div class="ds-pf2eTd ds" id="pkl2_Q38"></div>
                    <div class="q38_t-pf2eTd q38_t fjallaone-normal-white-12px" data-id="54:319">Q38</div>
                    <div class="ground-pf2eTd ground" data-id="54:320"><img class="line-9" data-id="54:321"
                            src="etc/elemen/line-9.svg" alt="Line 9"><img class="line-10" data-id="35:16"
                            src="etc/elemen/line-10.svg" alt="Line 10"><img class="line-11" data-id="35:17"
                            src="etc/elemen/line-11.svg" alt="Line 11"><img class="line-12" data-id="35:18"
                            src="etc/elemen/line-12.svg" alt="Line 12"><img class="line-13" data-id="35:19"
                            src="etc/elemen/line-13.svg" alt="Line 13"></div>
                </div>
                <div class="q28-jrzlY8" data-id="54:326">
                    <div class="q28_t fjallaone-normal-white-12px" data-id="54:327">Q28</div>
                    <div class="q28-RSqOVa" id="pkl2_Q28"></div>
                </div>
                <div class="live-line-jrzlY8 live-line" data-id="54:329">
                    <div class="bus-12-clxMHl bus-12" id="pkl2_line5"></div>
                    <div class="bus-11-clxMHl bus-11" id="pkl2_line4"></div>
                    <div class="bus-10-clxMHl bus-10" id="pkl2_line3"></div>
                    <div class="bus-9-clxMHl bus-9" id="pkl2_line2"></div>
                    <div class="bus-8-clxMHl bus-8" id="pkl2_line1"></div>
                </div>
                <div class="q50-jrzlY8" data-id="54:335">
                    <div class="q50_t-cQCTQi q50_t fjallaone-normal-white-12px" data-id="54:336">Q50</div>
                    <div class="q50-cQCTQi" id="pkl2_Q50"></div>
                </div>
                <div class="live-bay-jrzlY8 live-bay" data-id="54:338">
                    <div class="bus-6-sTDeUr bus-6" id="pkl2_bay4"></div>
                    <div class="bus-5-sTDeUr bus-5" id="pkl2_bay3"></div>
                    <div class="bus-4-sTDeUr bus-4" id="pkl2_bay2"></div>
                    <div class="bus-3" id="pkl2_bay1"></div>
                </div>
                <div class="q22-jrzlY8" data-id="54:343">
                    <div class="q22-iNCDkj" id="pkl2_Q22"></div>
                    <div class="q22-7ehaqe fjallaone-normal-white-12px" data-id="54:345">Q22</div>
                </div>
                <div class="q21-jrzlY8" data-id="54:346">
                    <div class="q21_t fjallaone-normal-white-12px" data-id="54:347">Q21</div>
                    <div class="q21-ZeZuYl" id="pkl2_Q21"></div>
                </div>
                <div class="bus-jrzlY8 bus" data-id="54:349">
                    <div class="bus-1-WPASlo bus-1" id="bus1a4"></div>
                    <div class="bus-2-WPASlo bus-2" id="bus2a4"></div>
                </div>
            </div>
            <div class="kopel-Ys8k0x" data-id="54:70">
                <div class="live-bay-TgDicV live-bay" data-id="54:77">
                    <div class="rectangle-3-DzEZ1B" id="cpl_bay1"></div>
                    <div class="rectangle-4-DzEZ1B" id="cpl_bay2"></div>
                    <div class="rectangle-5-DzEZ1B" id="cpl_bay3"></div>
                    <div class="rectangle-6-DzEZ1B" id="cpl_bay4"></div>
                </div>
                <div class="bus-TgDicV bus" data-id="54:163">
                    <div class="bus-2-NsZVQt bus-2" id="bus1a6"></div>
                    <div class="bus-1-NsZVQt bus-1" id="bus2a6"></div>
                </div>
                <div class="q50-TgDicV" data-id="54:94">
                    <div class="q50_t-0T4KGd q50_t fjallaone-normal-white-12px" data-id="54:95">Q50</div>
                    <div class="q50-0T4KGd" id="cpl_Q50"></div>
                </div>
                <div class="q22-TgDicV" data-id="54:97">
                    <div class="q22-vtBl2c" id="cpl_Q22"></div>
                    <div class="q22-JFtkG4 fjallaone-normal-white-12px" data-id="54:99">Q22</div>
                </div>
                <div class="q21-TgDicV" data-id="54:100">
                    <div class="q21_t fjallaone-normal-white-12px" data-id="54:101">Q21</div>
                    <div class="q21-ruS1F5" id="cpl_Q21"></div>
                </div>
            </div>
            <div class="nama-bay-Ys8k0x" data-id="54:377">
                <div class="bay-1-Y3L41l bay-1" data-id="54:356">
                    <a href="Bay/pemalang1.php" style="text-decoration: none;">
                        <div class="rectangle-1-FzPmWD" data-id="54:353"></div>
                        <div class="bay-1-FzPmWD bay-1 fjallaone-normal-white-16px" data-id="54:354">PEMALANG 2</div>
                    </a>
                </div>
                <div class="bay-2-Y3L41l bay-2" data-id="54:357">
                    <a href="Bay/pemalang1.php" style="text-decoration: none;">
                        <div class="rectangle-2-wh1H5P" data-id="54:358"></div>
                        <div class="bay-2-wh1H5P bay-2 fjallaone-normal-white-16px" data-id="54:359">PEMALANG 1</div>
                    </a>
                </div>
                <div class="bay-3-Y3L41l bay-3" data-id="54:361">
                    <a href="Bay/pekalongan1.php" style="text-decoration: none;">
                        <div class="rectangle-3-c8RD9J" data-id="54:362"></div>
                        <div class="bay-3-c8RD9J bay-3 fjallaone-normal-white-16px" data-id="54:363">PEKALONGAN 1</div>
                    </a>
                </div>
                <div class="bay-4-Y3L41l bay-4" data-id="54:364">
                    <a href="Bay/pekalongan2.php" style="text-decoration: none;">
                        <div class="rectangle-4-dbz5kS" data-id="54:365"></div>
                        <div class="bay-4-dbz5kS bay-4 fjallaone-normal-white-16px" data-id="54:366">PEKALONGAN 2</div>
                    </a>
                </div>
                <div class="bay-5-Y3L41l bay-5" data-id="54:368">
                    <a href="Bay/trafo1.php" style="text-decoration: none;">
                        <div class="rectangle-4-VGmedT" data-id="54:369"></div>
                        <div class="bay-5-VGmedT bay-5 fjallaone-normal-white-16px" data-id="54:370">TRAFO 1</div>
                    </a>
                </div>
                <div class="bay-6-Y3L41l bay-6" data-id="54:373">
                    <a href="Bay/kopel.php" style="text-decoration: none;">
                        <div class="rectangle-4-5T1Rjh" data-id="54:374"></div>
                        <div class="bay-6-5T1Rjh bay-6 fjallaone-normal-white-16px" data-id="54:375">KOPEL</div>
                    </a>
                </div>
            </div>
            <div class="measure-bay-1-Ys8k0x" data-id="54:521">
                <div class="measure-v" data-id="54:468">
                    <div class="nama" data-id="54:469">
                        <div class="rectangle-5-19yUVc rectangle-5" data-id="54:470"></div>
                        <div class="v timesnewroman-regular-normal-white-12px" data-id="54:471">V:</div>
                    </div>
                    <div class="float" data-id="54:472">
                        <div class="rectangle-5-y1nhVt rectangle-5" data-id="54:473"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pml2_vst">-</div>
                    </div>
                    <div class="unit" data-id="54:475">
                        <div class="rectangle-5-85XGJN rectangle-5" data-id="54:476"></div>
                        <div class="k-v timesnewroman-regular-normal-white-12px" data-id="54:477">kV</div>
                    </div>
                </div>
                <div class="measure-i" data-id="54:478">
                    <div class="nama" data-id="54:479">
                        <div class="rectangle-5-L7YHiQ rectangle-5" data-id="54:480"></div>
                        <div class="i timesnewroman-regular-normal-white-12px" data-id="54:481">I:</div>
                    </div>
                    <div class="float" data-id="54:482">
                        <div class="rectangle-5-NzYHPO rectangle-5" data-id="54:483"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pml2_is">-</div>
                    </div>
                    <div class="unit" data-id="54:485">
                        <div class="rectangle-5-fxUfqB rectangle-5" data-id="54:486"></div>
                        <div class="a timesnewroman-regular-normal-white-12px" data-id="54:487">A</div>
                    </div>
                </div>
                <div class="measure-p" data-id="54:500">
                    <div class="nama" data-id="54:501">
                        <div class="rectangle-5-OLhexn rectangle-5" data-id="54:502"></div>
                        <div class="p timesnewroman-regular-normal-white-12px" data-id="54:503">P:</div>
                    </div>
                    <div class="float" data-id="54:504">
                        <div class="rectangle-5-729xVx rectangle-5" data-id="54:505"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pml2_mw">-</div>
                    </div>
                    <div class="unit" data-id="54:507">
                        <div class="rectangle-5-714lqX rectangle-5" data-id="54:508"></div>
                        <div class="mw timesnewroman-regular-normal-white-12px" data-id="54:509">MW</div>
                    </div>
                </div>
                <div class="measure-q" data-id="54:510">
                    <div class="nama" data-id="54:511">
                        <div class="rectangle-5-xBW1TA rectangle-5" data-id="54:512"></div>
                        <div class="q timesnewroman-regular-normal-white-12px" data-id="54:513">Q:</div>
                    </div>
                    <div class="float" data-id="54:514">
                        <div class="rectangle-5-8uFqaV rectangle-5" data-id="54:515"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pml2_mvar">-</div>
                    </div>
                    <div class="unit" data-id="54:517">
                        <div class="rectangle-5-9xL9U1 rectangle-5" data-id="54:518"></div>
                        <div class="m-var timesnewroman-regular-normal-white-12px" data-id="54:519">MVar</div>
                    </div>
                </div>
            </div>
            <div class="measure-bay-3-Ys8k0x" data-id="54:563">
                <div class="measure-v" data-id="54:564">
                    <div class="nama" data-id="54:565">
                        <div class="rectangle-5-rMTrf8 rectangle-5" data-id="54:566"></div>
                        <div class="v timesnewroman-regular-normal-white-12px" data-id="54:567">V:</div>
                    </div>
                    <div class="float" data-id="54:568">
                        <div class="rectangle-5-ZG35ZA rectangle-5" data-id="54:569"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pkl1_vst">-</div>
                    </div>
                    <div class="unit" data-id="54:571">
                        <div class="rectangle-5-fR0NXI rectangle-5" data-id="54:572"></div>
                        <div class="k-v timesnewroman-regular-normal-white-12px" data-id="54:573">kV</div>
                    </div>
                </div>
                <div class="measure-i" data-id="54:574">
                    <div class="nama" data-id="54:575">
                        <div class="rectangle-5-F9riQM rectangle-5" data-id="54:576"></div>
                        <div class="i timesnewroman-regular-normal-white-12px" data-id="54:577">I:</div>
                    </div>
                    <div class="float" data-id="54:578">
                        <div class="rectangle-5-jWwAUR rectangle-5" data-id="54:579"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pkl1_is">-</div>
                    </div>
                    <div class="unit" data-id="54:581">
                        <div class="rectangle-5-4a6QsH rectangle-5" data-id="54:582"></div>
                        <div class="a timesnewroman-regular-normal-white-12px" data-id="54:583">A</div>
                    </div>
                </div>
                <div class="measure-p" data-id="54:584">
                    <div class="nama" data-id="54:585">
                        <div class="rectangle-5-6wV1iM rectangle-5" data-id="54:586"></div>
                        <div class="p timesnewroman-regular-normal-white-12px" data-id="54:587">P:</div>
                    </div>
                    <div class="float" data-id="54:588">
                        <div class="rectangle-5-RudDXp rectangle-5" data-id="54:589"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pkl1_mw">-</div>
                    </div>
                    <div class="unit" data-id="54:591">
                        <div class="rectangle-5-x48DpP rectangle-5" data-id="54:592"></div>
                        <div class="mw timesnewroman-regular-normal-white-12px" data-id="54:593">MW</div>
                    </div>
                </div>
                <div class="measure-q" data-id="54:594">
                    <div class="nama" data-id="54:595">
                        <div class="rectangle-5-Z5Vjgv rectangle-5" data-id="54:596"></div>
                        <div class="q timesnewroman-regular-normal-white-12px" data-id="54:597">Q:</div>
                    </div>
                    <div class="float" data-id="54:598">
                        <div class="rectangle-5-EBHVir rectangle-5" data-id="54:599"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pkl1_mvar">-</div>
                    </div>
                    <div class="unit" data-id="54:601">
                        <div class="rectangle-5-FGdgc9 rectangle-5" data-id="54:602"></div>
                        <div class="m-var timesnewroman-regular-normal-white-12px" data-id="54:603">MVar</div>
                    </div>
                </div>
            </div>
            <div class="measure-bay-2-Ys8k0x" data-id="54:522">
                <div class="measure-v" data-id="54:523">
                    <div class="nama" data-id="54:524">
                        <div class="rectangle-5-UTxkjd rectangle-5" data-id="54:525"></div>
                        <div class="v timesnewroman-regular-normal-white-12px" data-id="54:526">V:</div>
                    </div>
                    <div class="float" data-id="54:527">
                        <div class="rectangle-5-eRzVgJ rectangle-5" data-id="54:528"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pml1_vst">-</div>
                    </div>
                    <div class="unit" data-id="54:530">
                        <div class="rectangle-5-0gZnda rectangle-5" data-id="54:531"></div>
                        <div class="k-v timesnewroman-regular-normal-white-12px" data-id="54:532">kV</div>
                    </div>
                </div>
                <div class="measure-i" data-id="54:533">
                    <div class="nama" data-id="54:534">
                        <div class="rectangle-5-6CbpMH rectangle-5" data-id="54:535"></div>
                        <div class="i timesnewroman-regular-normal-white-12px" data-id="54:536">I:</div>
                    </div>
                    <div class="float" data-id="54:537">
                        <div class="rectangle-5-5tYFj5 rectangle-5" data-id="54:538"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pml1_is">-</div>
                    </div>
                    <div class="unit" data-id="54:540">
                        <div class="rectangle-5-9cMxWx rectangle-5" data-id="54:541"></div>
                        <div class="a timesnewroman-regular-normal-white-12px" data-id="54:542">A</div>
                    </div>
                </div>
                <div class="measure-p" data-id="54:543">
                    <div class="nama" data-id="54:544">
                        <div class="rectangle-5-1Tnuy5 rectangle-5" data-id="54:545"></div>
                        <div class="p timesnewroman-regular-normal-white-12px" data-id="54:546">P:</div>
                    </div>
                    <div class="float" data-id="54:547">
                        <div class="rectangle-5-CxY643 rectangle-5" data-id="54:548"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pml1_mw">-</div>
                    </div>
                    <div class="unit" data-id="54:550">
                        <div class="rectangle-5-6e28zu rectangle-5" data-id="54:551"></div>
                        <div class="mw timesnewroman-regular-normal-white-12px" data-id="54:552">MW</div>
                    </div>
                </div>
                <div class="measure-q" data-id="54:553">
                    <div class="nama" data-id="54:554">
                        <div class="rectangle-5-klZbE3 rectangle-5" data-id="54:555"></div>
                        <div class="q timesnewroman-regular-normal-white-12px" data-id="54:556">Q:</div>
                    </div>
                    <div class="float" data-id="54:557">
                        <div class="rectangle-5-P7XAUg rectangle-5" data-id="54:558"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pml1_mvar">-</div>
                    </div>
                    <div class="unit" data-id="54:560">
                        <div class="rectangle-5-nxzWQS rectangle-5" data-id="54:561"></div>
                        <div class="m-var timesnewroman-regular-normal-white-12px" data-id="54:562">MVar</div>
                    </div>
                </div>
            </div>
            <div class="measure-bay-4-Ys8k0x" data-id="54:604">
                <div class="measure-v" data-id="54:605">
                    <div class="nama" data-id="54:606">
                        <div class="rectangle-5-JDKB9E rectangle-5" data-id="54:607"></div>
                        <div class="v timesnewroman-regular-normal-white-12px" data-id="54:608">V:</div>
                    </div>
                    <div class="float" data-id="54:609">
                        <div class="rectangle-5-U5VxgN rectangle-5" data-id="54:610"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pkl2_vst">-</div>
                    </div>
                    <div class="unit" data-id="54:612">
                        <div class="rectangle-5-T7nFiA rectangle-5" data-id="54:613"></div>
                        <div class="k-v timesnewroman-regular-normal-white-12px" data-id="54:614">kV</div>
                    </div>
                </div>
                <div class="measure-i" data-id="54:615">
                    <div class="nama" data-id="54:616">
                        <div class="rectangle-5-GlbWBu rectangle-5" data-id="54:617"></div>
                        <div class="i timesnewroman-regular-normal-white-12px" data-id="54:618">I:</div>
                    </div>
                    <div class="float" data-id="54:619">
                        <div class="rectangle-5-j6ujls rectangle-5" data-id="54:620"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pkl2_is">-</div>
                    </div>
                    <div class="unit" data-id="54:622">
                        <div class="rectangle-5-j0bngb rectangle-5" data-id="54:623"></div>
                        <div class="a timesnewroman-regular-normal-white-12px" data-id="54:624">A</div>
                    </div>
                </div>
                <div class="measure-p" data-id="54:625">
                    <div class="nama" data-id="54:626">
                        <div class="rectangle-5-lIkgt7 rectangle-5" data-id="54:627"></div>
                        <div class="p timesnewroman-regular-normal-white-12px" data-id="54:628">P:</div>
                    </div>
                    <div class="float" data-id="54:629">
                        <div class="rectangle-5-sKk8gc rectangle-5" data-id="54:630"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pkl2_mw">-</div>
                    </div>
                    <div class="unit" data-id="54:632">
                        <div class="rectangle-5-zFHrx7 rectangle-5" data-id="54:633"></div>
                        <div class="mw timesnewroman-regular-normal-white-12px" data-id="54:634">MW</div>
                    </div>
                </div>
                <div class="measure-q" data-id="54:635">
                    <div class="nama" data-id="54:636">
                        <div class="rectangle-5-LATs4B rectangle-5" data-id="54:637"></div>
                        <div class="q timesnewroman-regular-normal-white-12px" data-id="54:638">Q:</div>
                    </div>
                    <div class="float" data-id="54:639">
                        <div class="rectangle-5-gQL5yx rectangle-5" data-id="54:640"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="pkl2_mvar">-</div>
                    </div>
                    <div class="unit" data-id="54:642">
                        <div class="rectangle-5-frIj5T rectangle-5" data-id="54:643"></div>
                        <div class="m-var timesnewroman-regular-normal-white-12px" data-id="54:644">MVar</div>
                    </div>
                </div>
            </div>
            <div class="measure-bay-5-Ys8k0x" data-id="54:686">
                <div class="measure-v" data-id="54:687">
                    <div class="nama" data-id="54:688">
                        <div class="rectangle-5-OsACPv rectangle-5" data-id="54:689"></div>
                        <div class="v timesnewroman-regular-normal-white-12px" data-id="54:690">V:</div>
                    </div>
                    <div class="float" data-id="54:691">
                        <div class="rectangle-5-bg5F49 rectangle-5" data-id="54:692"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="trf1_vst">-</div>
                    </div>
                    <div class="unit" data-id="54:694">
                        <div class="rectangle-5-pSQe08 rectangle-5" data-id="54:695"></div>
                        <div class="k-v timesnewroman-regular-normal-white-12px" data-id="54:696">kV</div>
                    </div>
                </div>
                <div class="measure-i" data-id="54:697">
                    <div class="nama" data-id="54:698">
                        <div class="rectangle-5-HtNPRz rectangle-5" data-id="54:699"></div>
                        <div class="i timesnewroman-regular-normal-white-12px" data-id="54:700">I:</div>
                    </div>
                    <div class="float" data-id="54:701">
                        <div class="rectangle-5-8VK1zm rectangle-5" data-id="54:702"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="trf1_is">-</div>
                    </div>
                    <div class="unit" data-id="54:704">
                        <div class="rectangle-5-St2Cor rectangle-5" data-id="54:705"></div>
                        <div class="a timesnewroman-regular-normal-white-12px" data-id="54:706">A</div>
                    </div>
                </div>
                <div class="measure-p" data-id="54:707">
                    <div class="nama" data-id="54:708">
                        <div class="rectangle-5-sD1kK7 rectangle-5" data-id="54:709"></div>
                        <div class="p timesnewroman-regular-normal-white-12px" data-id="54:710">P:</div>
                    </div>
                    <div class="float" data-id="54:711">
                        <div class="rectangle-5-5caRud rectangle-5" data-id="54:712"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="trf1_mw">-</div>
                    </div>
                    <div class="unit" data-id="54:714">
                        <div class="rectangle-5-VzBeAL rectangle-5" data-id="54:715"></div>
                        <div class="mw timesnewroman-regular-normal-white-12px" data-id="54:716">MW</div>
                    </div>
                </div>
                <div class="measure-q" data-id="54:717">
                    <div class="nama" data-id="54:718">
                        <div class="rectangle-5-DN9wUV rectangle-5" data-id="54:719"></div>
                        <div class="q timesnewroman-regular-normal-white-12px" data-id="54:720">Q:</div>
                    </div>
                    <div class="float" data-id="54:721">
                        <div class="rectangle-5-thzWqk rectangle-5" data-id="54:722"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="trf1_mvar">-</div>
                    </div>
                    <div class="unit" data-id="54:724">
                        <div class="rectangle-5-B0yxUZ rectangle-5" data-id="54:725"></div>
                        <div class="m-var timesnewroman-regular-normal-white-12px" data-id="54:726">MVar</div>
                    </div>
                </div>
            </div>
            <div class="measure-bay-5a-Ys8k0x" data-id="54:727">
                <div class="measure-v" data-id="54:728">
                    <div class="nama" data-id="54:729">
                        <div class="rectangle-5-Vy6DOs rectangle-5" data-id="54:730"></div>
                        <div class="v timesnewroman-regular-normal-white-12px" data-id="54:731">V:</div>
                    </div>
                    <div class="float" data-id="54:732">
                        <div class="rectangle-5-6mtLks rectangle-5" data-id="54:733"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="trf1_vst2">-</div>
                    </div>
                    <div class="unit" data-id="54:735">
                        <div class="rectangle-5-CxNuqc rectangle-5" data-id="54:736"></div>
                        <div class="k-v timesnewroman-regular-normal-white-12px" data-id="54:737">kV</div>
                    </div>
                </div>
                <div class="measure-i" data-id="54:738">
                    <div class="nama" data-id="54:739">
                        <div class="rectangle-5-Mok5Zx rectangle-5" data-id="54:740"></div>
                        <div class="i timesnewroman-regular-normal-white-12px" data-id="54:741">I:</div>
                    </div>
                    <div class="float" data-id="54:742">
                        <div class="rectangle-5-EfwYpT rectangle-5" data-id="54:743"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="trf1_is2">-</div>
                    </div>
                    <div class="unit" data-id="54:745">
                        <div class="rectangle-5-MtSSH2 rectangle-5" data-id="54:746"></div>
                        <div class="a timesnewroman-regular-normal-white-12px" data-id="54:747">A</div>
                    </div>
                </div>
                <div class="measure-p" data-id="54:748">
                    <div class="nama" data-id="54:749">
                        <div class="rectangle-5-5Nu6Fg rectangle-5" data-id="54:750"></div>
                        <div class="p timesnewroman-regular-normal-white-12px" data-id="54:751">P:</div>
                    </div>
                    <div class="float" data-id="54:752">
                        <div class="rectangle-5-zb13wx rectangle-5" data-id="54:753"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="trf1_mw2">-</div>
                    </div>
                    <div class="unit" data-id="54:755">
                        <div class="rectangle-5-qhGXKM rectangle-5" data-id="54:756"></div>
                        <div class="mw timesnewroman-regular-normal-white-12px" data-id="54:757">MW</div>
                    </div>
                </div>
                <div class="measure-q" data-id="54:758">
                    <div class="nama" data-id="54:759">
                        <div class="rectangle-5-joYlOT rectangle-5" data-id="54:760"></div>
                        <div class="q timesnewroman-regular-normal-white-12px" data-id="54:761">Q:</div>
                    </div>
                    <div class="float" data-id="54:762">
                        <div class="rectangle-5-Ml2rxP rectangle-5" data-id="54:763"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="trf1_mvar2">-</div>
                    </div>
                    <div class="unit" data-id="54:765">
                        <div class="rectangle-5-uipgRz rectangle-5" data-id="54:766"></div>
                        <div class="m-var timesnewroman-regular-normal-white-12px" data-id="54:767">MVar</div>
                    </div>
                </div>
            </div>
            <div class="measure-bay-6-Ys8k0x" data-id="54:645">
                <div class="measure-ir-vDxGix" data-id="54:646">
                    <div class="nama" data-id="54:647">
                        <div class="rectangle-5-9AgF7Z rectangle-5" data-id="54:648"></div>
                        <div class="ir-9AgF7Z timesnewroman-regular-normal-white-12px" data-id="54:649">Ir:</div>
                    </div>
                    <div class="float" data-id="54:650">
                        <div class="rectangle-5-0DRgP4 rectangle-5" data-id="54:651"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="ir">-</div>
                    </div>
                    <div class="unit" data-id="54:653">
                        <div class="rectangle-5-xLQrWM rectangle-5" data-id="54:654"></div>
                        <div class="a timesnewroman-regular-normal-white-12px" data-id="54:655">A</div>
                    </div>
                </div>
                <div class="measure-is-vDxGix" data-id="54:656">
                    <div class="nama" data-id="54:657">
                        <div class="rectangle-5-1sMfhx rectangle-5" data-id="54:658"></div>
                        <div class="is-1sMfhx timesnewroman-regular-normal-white-12px" data-id="54:659">Is:</div>
                    </div>
                    <div class="float" data-id="54:660">
                        <div class="rectangle-5-ZaaANV rectangle-5" data-id="54:661"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="is">-</div>
                    </div>
                    <div class="unit" data-id="54:663">
                        <div class="rectangle-5-0sVxal rectangle-5" data-id="54:664"></div>
                        <div class="a timesnewroman-regular-normal-white-12px" data-id="54:665">A</div>
                    </div>
                </div>
                <div class="measure-it-vDxGix" data-id="54:666">
                    <div class="nama" data-id="54:667">
                        <div class="rectangle-5-d51MJy rectangle-5" data-id="54:668"></div>
                        <div class="it-d51MJy timesnewroman-regular-normal-white-12px" data-id="54:669">It:</div>
                    </div>
                    <div class="float" data-id="54:670">
                        <div class="rectangle-5-iRJB2f rectangle-5" data-id="54:671"></div>
                        <div class="a1 timesnewroman-regular-normal-white-12px" id="it">-</div>
                    </div>
                    <div class="unit" data-id="54:673">
                        <div class="rectangle-5-ezbVaF rectangle-5" data-id="54:674"></div>
                        <div class="a timesnewroman-regular-normal-white-12px" data-id="54:675">A</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>