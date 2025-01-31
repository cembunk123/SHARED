<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1920, maximum-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="elemen/Logo_PLN.png">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="photo">
    <script src="etc/js/timeline.js"></script>
    <script src="etc/js/jquery-3.6.0.min.js"></script>
    <script>
        const fetchData = (url, prefix) => {
            $.ajax({
                url,
                method: 'GET',
                dataType: 'json',
                success: data => {
                    for (const key in data) {
                        $(`#${prefix}_${key}`).text(data[key]);
                    }
                },
                error: (xhr, status, error) => {
                    console.error(`Error fetching ${url}:`, error);
                }
            });
        };

        $(document).ready(() => {
            const endpoints = [
                { url: 'backend/dashboard/batang1/get_datamx.php', prefix: 'batang1' },
                { url: 'backend/dashboard/batang2/get_datamx.php', prefix: 'batang2' },
                { url: 'backend/dashboard/comal1/get_datamx.php', prefix: 'comal1' },
                { url: 'backend/dashboard/comal2/get_datamx.php', prefix: 'comal2' },
                { url: 'backend/dashboard/trafo1/get_datamx.php', prefix: 'trafo1' },
                { url: 'backend/dashboard/trafo2/get_datamx.php', prefix: 'trafo2' },
                { url: 'backend/dashboard/trafo3/get_datamx.php', prefix: 'trafo3' },
                { url: 'backend/dashboard/kopel/get_datamx.php', prefix: 'kopel' },
                { url: 'backend/dashboard/kapasitor/get_datamx.php', prefix: 'kapasitor' },
            ];

            const fetchDataAll = () => {
                endpoints.forEach(({ url, prefix }) => fetchData(url, prefix));
            };

            fetchDataAll();
            setInterval(fetchDataAll, 5000);
        });
    </script>

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

    <link rel="stylesheet" href="etc/styles.css">

</head>

<body style="margin: 0;background: #252424;"><input type="hidden" id="anPageName" name="page" value="index">
    <div class="container-center-horizontal">
        <div class="index screen " data-id="5:2">
            <header class="header-IO3Fu5" data-id="5:3">
                <div class="main-sld-74EEvB" data-id="5:4">
                    <div class="rectangle-2-GToATA rectangle-2" data-id="5:5"></div>
                    <h1 class="title-GToATA" data-id="5:6">MAIN SINGLE LINE</h1>
                </div>
                <div class="gi-pekalongan-74EEvB" data-id="5:7">
                    <div class="rectangle-2-fdIdby rectangle-2" data-id="5:8"></div>
                    <div class="gardu-induk-pekalongan-fdIdby" data-id="5:9">GARDU INDUK PEKALONGAN</div>
                    <span id="dateTime" class="tanggal-fdIdby"></span>
                </div>
                <div class="logo-pln-74EEvB" data-id="5:10">
                    <div class="rectangle-1-eD0pgn" data-id="5:11"></div>
                    <div class="pt-pln-persero-eD0pgn" data-id="5:12">PT. PLN (Persero)</div><img
                        class="logo_pln-1-eD0pgn" data-id="5:13" src="etc/elemen/Logo_PLN.png" alt="Logo_PLN 1">
                </div>
            </header>
            <div class="bay-1-IO3Fu5 bay-1" data-id="5:130">
                <a href="Bay/batang1.php" style="text-decoration: none;">
                    <div class="kotak-measurement" data-id="5:131">
                        <div class="rectangle-3" data-id="5:132"></div>
                        <div class="rectangle-2-ahpsC0 rectangle-2" data-id="5:133"></div>
                        <div class="bay-1-ahpsC0 bay-1 fjallaone-normal-white-32px" data-id="5:134">BATANG 1</div>
                    </div>
                </a>
                <div class="group-1" data-id="5:135">
                    <div class="rectangle-5-v25vjb rectangle-5" data-id="5:136"></div>
                    <div class="vr timesnewroman-regular-normal-white-32px" data-id="5:137">Vr</div>
                </div>
                <div class="group-34" data-id="5:138">
                    <div class="group-12-5IC7JW group-12" data-id="5:139">
                        <div class="rectangle-5-PpLuTu rectangle-5" data-id="5:140"></div>
                        <span id="batang1_vr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-40" data-id="5:142">
                    <div class="group-12-clO2gl group-12" data-id="5:143">
                        <div class="rectangle-5-aqeVKZ rectangle-5" data-id="5:144"></div>
                        <span id="batang1_ir" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-37" data-id="5:146">
                    <div class="group-12-soxXRI group-12" data-id="5:147">
                        <div class="rectangle-5-nmwaU9 rectangle-5" data-id="5:148"></div>
                        <span id="batang1_vrs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-41" data-id="5:150">
                    <div class="group-12-IP8pHI group-12" data-id="5:151">
                        <div class="rectangle-5-CyIfQR rectangle-5" data-id="5:152"></div>
                        <span id="batang1_mw" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-12-JxHscs group-12" data-id="5:154">
                    <div class="rectangle-5-AiEmiB rectangle-5" data-id="5:155"></div>
                    <span id="batang1_vs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                </div>
                <div class="group-42" data-id="5:157">
                    <div class="group-12-JL2C1I group-12" data-id="5:158">
                        <div class="rectangle-5-osMzZw rectangle-5" data-id="5:159"></div>
                        <span id="batang1_is" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-38" data-id="5:161">
                    <div class="group-12-ejhib1 group-12" data-id="5:162">
                        <div class="rectangle-5-xrjTVo rectangle-5" data-id="5:163"></div>
                        <span id="batang1_vst" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-43" data-id="5:165">
                    <div class="group-12-scuNEl group-12" data-id="5:166">
                        <div class="rectangle-5-JyK2x6 rectangle-5" data-id="5:167"></div>
                        <span id="batang1_mvar" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-36" data-id="5:169">
                    <div class="group-12-6hbws1 group-12" data-id="5:170">
                        <div class="rectangle-5-Ax8VNN rectangle-5" data-id="5:171"></div>
                        <span id="batang1_vt" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-44" data-id="5:173">
                    <div class="group-12-kxMvCB group-12" data-id="5:174">
                        <div class="rectangle-5-wVR9yh rectangle-5" data-id="5:175"></div>
                        <span id="batang1_it" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-39" data-id="5:177">
                    <div class="group-12-ltkumC group-12" data-id="5:178">
                        <div class="rectangle-5-oGZsUM rectangle-5" data-id="5:179"></div>
                        <span id="batang1_vtr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-23" data-id="5:181">
                    <div class="rectangle-5-y2GMxV rectangle-5" data-id="5:182"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:183">kV</div>
                </div>
                <div class="group-7" data-id="5:184">
                    <div class="rectangle-5-CFal5H rectangle-5" data-id="5:185"></div>
                    <div class="ir timesnewroman-regular-normal-white-32px" data-id="5:186">Ir</div>
                </div>
                <div class="group-24" data-id="5:187">
                    <div class="rectangle-5-4Bxw5A rectangle-5" data-id="5:188"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:189">A</div>
                </div>
                <div class="group-4" data-id="5:190">
                    <div class="rectangle-5-6KRZek rectangle-5" data-id="5:191"></div>
                    <div class="vrs timesnewroman-regular-normal-white-32px" data-id="5:192">Vrs</div>
                </div>
                <div class="group-25" data-id="5:193">
                    <div class="rectangle-5-eJMD40 rectangle-5" data-id="5:194"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:195">kV</div>
                </div>
                <div class="group-2" data-id="5:196">
                    <div class="rectangle-5-Hsmx0k rectangle-5" data-id="5:197"></div>
                    <div class="vs timesnewroman-regular-normal-white-32px" data-id="5:198">Vs</div>
                </div>
                <div class="group-26" data-id="5:199">
                    <div class="rectangle-5-m2cnqP rectangle-5" data-id="5:200"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:201">kV</div>
                </div>
                <div class="group-8" data-id="5:202">
                    <div class="rectangle-5-PPJJAd rectangle-5" data-id="5:203"></div>
                    <div class="is timesnewroman-regular-normal-white-32px" data-id="5:204">Is</div>
                </div>
                <div class="group-27" data-id="5:205">
                    <div class="rectangle-5-7wb8Ea rectangle-5" data-id="5:206"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:207">A</div>
                </div>
                <div class="group-10" data-id="5:208">
                    <div class="rectangle-5-tnTGaN rectangle-5" data-id="5:209"></div>
                    <div class="p timesnewroman-regular-normal-white-32px" data-id="5:210">P</div>
                </div>
                <div class="group-28" data-id="5:211">
                    <div class="rectangle-5-IxWSLL rectangle-5" data-id="5:212"></div>
                    <div class="mw timesnewroman-regular-normal-white-32px" data-id="5:213">MW</div>
                </div>
                <div class="group-5" data-id="5:214">
                    <div class="rectangle-5-KjgY3U rectangle-5" data-id="5:215"></div>
                    <div class="vst timesnewroman-regular-normal-white-32px" data-id="5:216">Vst</div>
                </div>
                <div class="group-29" data-id="5:217">
                    <div class="rectangle-5-hcKZRu rectangle-5" data-id="5:218"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:219">kV</div>
                </div>
                <div class="group-3" data-id="5:220">
                    <div class="rectangle-5-xqgVlY rectangle-5" data-id="5:221"></div>
                    <div class="vt timesnewroman-regular-normal-white-32px" data-id="5:222">Vt</div>
                </div>
                <div class="group-30" data-id="5:223">
                    <div class="rectangle-5-PAEi45 rectangle-5" data-id="5:224"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:225">kV</div>
                </div>
                <div class="group-9" data-id="5:226">
                    <div class="rectangle-5-znQYWc rectangle-5" data-id="5:227"></div>
                    <div class="it timesnewroman-regular-normal-white-32px" data-id="5:228">It</div>
                </div>
                <div class="group-31" data-id="5:229">
                    <div class="rectangle-5-blpraL rectangle-5" data-id="5:230"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:231">A</div>
                </div>
                <div class="group-11" data-id="5:232">
                    <div class="rectangle-5-Ate4HQ rectangle-5" data-id="5:233"></div>
                    <div class="q timesnewroman-regular-normal-white-32px" data-id="5:234">Q</div>
                </div>
                <div class="group-32" data-id="5:235">
                    <div class="rectangle-5-hwwJEF rectangle-5" data-id="5:236"></div>
                    <div class="m-var timesnewroman-regular-normal-white-32px" data-id="5:237">MVar</div>
                </div>
                <div class="group-6" data-id="5:238">
                    <div class="rectangle-5-SpXOLh rectangle-5" data-id="5:239"></div>
                    <div class="vtr timesnewroman-regular-normal-white-32px" data-id="5:240">Vtr</div>
                </div>
                <div class="group-33" data-id="5:241">
                    <div class="rectangle-5-87X9YQ rectangle-5" data-id="5:242"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:243">kV</div>
                </div>
            </div>
            <div class="bay-5-IO3Fu5 bay-5" data-id="5:587">
                <a href="Bay/trafo1.php" style="text-decoration: none;">
                    <div class="kotak-measurement" data-id="5:588">
                        <div class="rectangle-3" data-id="5:589"></div>
                        <div class="rectangle-2-sFMODz rectangle-2" data-id="5:590"></div>
                        <div class="bay-5-sFMODz bay-5 fjallaone-normal-white-32px" data-id="5:591">TRAFO 1</div>
                    </div>
                </a>
                <div class="group-1" data-id="5:592">
                    <div class="rectangle-5-3m1hLB rectangle-5" data-id="5:593"></div>
                    <div class="vr timesnewroman-regular-normal-white-32px" data-id="5:594">Vr</div>
                </div>
                <div class="group-34" data-id="5:595">
                    <div class="group-12-x6RHH9 group-12" data-id="5:596">
                        <div class="rectangle-5-1DT5Av rectangle-5" data-id="5:597"></div>
                        <span id="trafo1_vr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-40" data-id="5:599">
                    <div class="group-12-RCtWex group-12" data-id="5:600">
                        <div class="rectangle-5-zj052f rectangle-5" data-id="5:601"></div>
                        <span id="trafo1_ir" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-37" data-id="5:603">
                    <div class="group-12-LabpK7 group-12" data-id="5:604">
                        <div class="rectangle-5-qJuiHr rectangle-5" data-id="5:605"></div>
                        <span id="trafo1_vrs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-41" data-id="5:607">
                    <div class="group-12-jsoSJb group-12" data-id="5:608">
                        <div class="rectangle-5-lOFfEA rectangle-5" data-id="5:609"></div>
                        <span id="trafo1_mw" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-12-43jF2O group-12" data-id="5:611">
                    <div class="rectangle-5-cwINqR rectangle-5" data-id="5:612"></div>
                    <span id="trafo1_vs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                </div>
                <div class="group-42" data-id="5:614">
                    <div class="group-12-XCRC0i group-12" data-id="5:615">
                        <div class="rectangle-5-LUK8u5 rectangle-5" data-id="5:616"></div>
                        <span id="trafo1_is" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-38" data-id="5:618">
                    <div class="group-12-wxdWNW group-12" data-id="5:619">
                        <div class="rectangle-5-rxg9em rectangle-5" data-id="5:620"></div>
                        <span id="trafo1_vst" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-43" data-id="5:622">
                    <div class="group-12-uEGXx8 group-12" data-id="5:623">
                        <div class="rectangle-5-ulS3KI rectangle-5" data-id="5:624"></div>
                        <span id="trafo1_mvar" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-36" data-id="5:626">
                    <div class="group-12-Ov0zc5 group-12" data-id="5:627">
                        <div class="rectangle-5-TtxxfB rectangle-5" data-id="5:628"></div>
                        <span id="trafo1_vt" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-44" data-id="5:630">
                    <div class="group-12-TpcMYR group-12" data-id="5:631">
                        <div class="rectangle-5-Qec9qj rectangle-5" data-id="5:632"></div>
                        <span id="trafo1_it" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-39" data-id="5:634">
                    <div class="group-12-sejIAl group-12" data-id="5:635">
                        <div class="rectangle-5-Ozh0Ko rectangle-5" data-id="5:636"></div>
                        <span id="trafo1_vtr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-23" data-id="5:638">
                    <div class="rectangle-5-EvSO7N rectangle-5" data-id="5:639"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:640">kV</div>
                </div>
                <div class="group-7" data-id="5:641">
                    <div class="rectangle-5-P80s7v rectangle-5" data-id="5:642"></div>
                    <div class="ir timesnewroman-regular-normal-white-32px" data-id="5:643">Ir</div>
                </div>
                <div class="group-24" data-id="5:644">
                    <div class="rectangle-5-yinmCk rectangle-5" data-id="5:645"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:646">A</div>
                </div>
                <div class="group-4" data-id="5:647">
                    <div class="rectangle-5-xz5l07 rectangle-5" data-id="5:648"></div>
                    <div class="vrs timesnewroman-regular-normal-white-32px" data-id="5:649">Vrs</div>
                </div>
                <div class="group-25" data-id="5:650">
                    <div class="rectangle-5-xWi86c rectangle-5" data-id="5:651"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:652">kV</div>
                </div>
                <div class="group-2" data-id="5:653">
                    <div class="rectangle-5-tgig0o rectangle-5" data-id="5:654"></div>
                    <div class="vs timesnewroman-regular-normal-white-32px" data-id="5:655">Vs</div>
                </div>
                <div class="group-26" data-id="5:656">
                    <div class="rectangle-5-tD1FRE rectangle-5" data-id="5:657"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:658">kV</div>
                </div>
                <div class="group-8" data-id="5:659">
                    <div class="rectangle-5-vxROAz rectangle-5" data-id="5:660"></div>
                    <div class="is timesnewroman-regular-normal-white-32px" data-id="5:661">Is</div>
                </div>
                <div class="group-27" data-id="5:662">
                    <div class="rectangle-5-SXxtjo rectangle-5" data-id="5:663"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:664">A</div>
                </div>
                <div class="group-10" data-id="5:665">
                    <div class="rectangle-5-REN5La rectangle-5" data-id="5:666"></div>
                    <div class="p timesnewroman-regular-normal-white-32px" data-id="5:667">P</div>
                </div>
                <div class="group-28" data-id="5:668">
                    <div class="rectangle-5-sUSpe5 rectangle-5" data-id="5:669"></div>
                    <div class="mw timesnewroman-regular-normal-white-32px" data-id="5:670">MW</div>
                </div>
                <div class="group-5" data-id="5:671">
                    <div class="rectangle-5-BX257Z rectangle-5" data-id="5:672"></div>
                    <div class="vst timesnewroman-regular-normal-white-32px" data-id="5:673">Vst</div>
                </div>
                <div class="group-29" data-id="5:674">
                    <div class="rectangle-5-g2wC5X rectangle-5" data-id="5:675"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:676">kV</div>
                </div>
                <div class="group-3" data-id="5:677">
                    <div class="rectangle-5-ZKFuMI rectangle-5" data-id="5:678"></div>
                    <div class="vt timesnewroman-regular-normal-white-32px" data-id="5:679">Vt</div>
                </div>
                <div class="group-30" data-id="5:680">
                    <div class="rectangle-5-Gvadg1 rectangle-5" data-id="5:681"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:682">kV</div>
                </div>
                <div class="group-9" data-id="5:683">
                    <div class="rectangle-5-u90pVo rectangle-5" data-id="5:684"></div>
                    <div class="it timesnewroman-regular-normal-white-32px" data-id="5:685">It</div>
                </div>
                <div class="group-31" data-id="5:686">
                    <div class="rectangle-5-fN1GWg rectangle-5" data-id="5:687"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:688">A</div>
                </div>
                <div class="group-11" data-id="5:689">
                    <div class="rectangle-5-kESHrQ rectangle-5" data-id="5:690"></div>
                    <div class="q timesnewroman-regular-normal-white-32px" data-id="5:691">Q</div>
                </div>
                <div class="group-32" data-id="5:692">
                    <div class="rectangle-5-O4ZQwu rectangle-5" data-id="5:693"></div>
                    <div class="m-var timesnewroman-regular-normal-white-32px" data-id="5:694">MVar</div>
                </div>
                <div class="group-6" data-id="5:695">
                    <div class="rectangle-5-daBtxw rectangle-5" data-id="5:696"></div>
                    <div class="vtr timesnewroman-regular-normal-white-32px" data-id="5:697">Vtr</div>
                </div>
                <div class="group-33" data-id="5:698">
                    <div class="rectangle-5-ULxG8h rectangle-5" data-id="5:699"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:700">kV</div>
                </div>
            </div>
            <div class="bay-3-IO3Fu5 bay-3" data-id="5:359">
                <a href="Bay/comal1.php" style="text-decoration: none;">
                    <div class="kotak-measurement" data-id="5:360">
                        <div class="rectangle-3" data-id="5:361"></div>
                        <div class="rectangle-2-xMXexI rectangle-2" data-id="5:362"></div>
                        <div class="bay-3-xMXexI bay-3 fjallaone-normal-white-32px" data-id="5:363">COMAL 1</div>
                    </div>
                </a>
                <div class="group-1" data-id="5:364">
                    <div class="rectangle-5-7xc5Xp rectangle-5" data-id="5:365"></div>
                    <div class="vr timesnewroman-regular-normal-white-32px" data-id="5:366">Vr</div>
                </div>
                <div class="group-34" data-id="5:367">
                    <div class="group-12-xHv4ZL group-12" data-id="5:368">
                        <div class="rectangle-5-ghdCY9 rectangle-5" data-id="5:369"></div>
                        <span id="comal1_vr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-40" data-id="5:371">
                    <div class="group-12-q3qSgw group-12" data-id="5:372">
                        <div class="rectangle-5-zdFM7d rectangle-5" data-id="5:373"></div>
                        <span id="comal1_ir" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-37" data-id="5:375">
                    <div class="group-12-eN5neP group-12" data-id="5:376">
                        <div class="rectangle-5-rbx2RS rectangle-5" data-id="5:377"></div>
                        <span id="comal1_vrs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-41" data-id="5:379">
                    <div class="group-12-zIvFHh group-12" data-id="5:380">
                        <div class="rectangle-5-26UXeh rectangle-5" data-id="5:381"></div>
                        <span id="comal1_mw" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-12-Tr1UG8 group-12" data-id="5:383">
                    <div class="rectangle-5-eRqXhE rectangle-5" data-id="5:384"></div>
                    <span id="comal1_vs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                </div>
                <div class="group-42" data-id="5:386">
                    <div class="group-12-Z3FKEv group-12" data-id="5:387">
                        <div class="rectangle-5-6xPjam rectangle-5" data-id="5:388"></div>
                        <span id="comal1_is" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-38" data-id="5:390">
                    <div class="group-12-pJJoPE group-12" data-id="5:391">
                        <div class="rectangle-5-U45R9Q rectangle-5" data-id="5:392"></div>
                        <span id="comal1_vst" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-43" data-id="5:394">
                    <div class="group-12-cfHAqN group-12" data-id="5:395">
                        <div class="rectangle-5-fDcBQG rectangle-5" data-id="5:396"></div>
                        <span id="comal1_mvar" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-36" data-id="5:398">
                    <div class="group-12-2UgFjx group-12" data-id="5:399">
                        <div class="rectangle-5-my87VV rectangle-5" data-id="5:400"></div>
                        <span id="comal1_vt" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-44" data-id="5:402">
                    <div class="group-12-DEWxxS group-12" data-id="5:403">
                        <div class="rectangle-5-UjBWd2 rectangle-5" data-id="5:404"></div>
                        <span id="comal1_it" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-39" data-id="5:406">
                    <div class="group-12-sDn7eu group-12" data-id="5:407">
                        <div class="rectangle-5-gr2twz rectangle-5" data-id="5:408"></div>
                        <span id="comal1_vtr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-23" data-id="5:410">
                    <div class="rectangle-5-iQkzgX rectangle-5" data-id="5:411"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:412">kV</div>
                </div>
                <div class="group-7" data-id="5:413">
                    <div class="rectangle-5-MVQe9G rectangle-5" data-id="5:414"></div>
                    <div class="ir timesnewroman-regular-normal-white-32px" data-id="5:415">Ir</div>
                </div>
                <div class="group-24" data-id="5:416">
                    <div class="rectangle-5-NZSvnj rectangle-5" data-id="5:417"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:418">A</div>
                </div>
                <div class="group-4" data-id="5:419">
                    <div class="rectangle-5-duwFAx rectangle-5" data-id="5:420"></div>
                    <div class="vrs timesnewroman-regular-normal-white-32px" data-id="5:421">Vrs</div>
                </div>
                <div class="group-25" data-id="5:422">
                    <div class="rectangle-5-CdRUsp rectangle-5" data-id="5:423"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:424">kV</div>
                </div>
                <div class="group-2" data-id="5:425">
                    <div class="rectangle-5-mNCeeO rectangle-5" data-id="5:426"></div>
                    <div class="vs timesnewroman-regular-normal-white-32px" data-id="5:427">Vs</div>
                </div>
                <div class="group-26" data-id="5:428">
                    <div class="rectangle-5-tBLlxs rectangle-5" data-id="5:429"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:430">kV</div>
                </div>
                <div class="group-8" data-id="5:431">
                    <div class="rectangle-5-FAq7dP rectangle-5" data-id="5:432"></div>
                    <div class="is timesnewroman-regular-normal-white-32px" data-id="5:433">Is</div>
                </div>
                <div class="group-27" data-id="5:434">
                    <div class="rectangle-5-O90rMf rectangle-5" data-id="5:435"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:436">A</div>
                </div>
                <div class="group-10" data-id="5:437">
                    <div class="rectangle-5-Vb3UqV rectangle-5" data-id="5:438"></div>
                    <div class="p timesnewroman-regular-normal-white-32px" data-id="5:439">P</div>
                </div>
                <div class="group-28" data-id="5:440">
                    <div class="rectangle-5-35RUPT rectangle-5" data-id="5:441"></div>
                    <div class="mw timesnewroman-regular-normal-white-32px" data-id="5:442">MW</div>
                </div>
                <div class="group-5" data-id="5:443">
                    <div class="rectangle-5-3uRCKP rectangle-5" data-id="5:444"></div>
                    <div class="vst timesnewroman-regular-normal-white-32px" data-id="5:445">Vst</div>
                </div>
                <div class="group-29" data-id="5:446">
                    <div class="rectangle-5-E30EsR rectangle-5" data-id="5:447"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:448">kV</div>
                </div>
                <div class="group-3" data-id="5:449">
                    <div class="rectangle-5-1zCsUW rectangle-5" data-id="5:450"></div>
                    <div class="vt timesnewroman-regular-normal-white-32px" data-id="5:451">Vt</div>
                </div>
                <div class="group-30" data-id="5:452">
                    <div class="rectangle-5-2a7sPR rectangle-5" data-id="5:453"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:454">kV</div>
                </div>
                <div class="group-9" data-id="5:455">
                    <div class="rectangle-5-5yupd5 rectangle-5" data-id="5:456"></div>
                    <div class="it timesnewroman-regular-normal-white-32px" data-id="5:457">It</div>
                </div>
                <div class="group-31" data-id="5:458">
                    <div class="rectangle-5-qgcGzo rectangle-5" data-id="5:459"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:460">A</div>
                </div>
                <div class="group-11" data-id="5:461">
                    <div class="rectangle-5-wL8Dpr rectangle-5" data-id="5:462"></div>
                    <div class="q timesnewroman-regular-normal-white-32px" data-id="5:463">Q</div>
                </div>
                <div class="group-32" data-id="5:464">
                    <div class="rectangle-5-Qnwx7W rectangle-5" data-id="5:465"></div>
                    <div class="m-var timesnewroman-regular-normal-white-32px" data-id="5:466">MVar</div>
                </div>
                <div class="group-6" data-id="5:467">
                    <div class="rectangle-5-ddPy4P rectangle-5" data-id="5:468"></div>
                    <div class="vtr timesnewroman-regular-normal-white-32px" data-id="5:469">Vtr</div>
                </div>
                <div class="group-33" data-id="5:470">
                    <div class="rectangle-5-4JDrnf rectangle-5" data-id="5:471"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:472">kV</div>
                </div>
            </div>
            <div class="bay-7-IO3Fu5 bay-7" data-id="5:701">
                <a href="Bay/trafo3.php" style="text-decoration: none;">
                    <div class="kotak-measurement" data-id="5:702">
                        <div class="rectangle-3" data-id="5:703"></div>
                        <div class="rectangle-2-fLcWuE rectangle-2" data-id="5:704"></div>
                        <div class="bay-6-fLcWuE bay-6 fjallaone-normal-white-32px" data-id="5:705">TRAFO 3</div>
                    </div>
                </a>
                <div class="group-1" data-id="5:706">
                    <div class="rectangle-5-1f3lxr rectangle-5" data-id="5:707"></div>
                    <div class="vr timesnewroman-regular-normal-white-32px" data-id="5:708">Vr</div>
                </div>
                <div class="group-34" data-id="5:709">
                    <div class="group-12-soAkwQ group-12" data-id="5:710">
                        <div class="rectangle-5-gT98Tw rectangle-5" data-id="5:711"></div>
                        <span id="trafo3_vr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-40" data-id="5:713">
                    <div class="group-12-SF2nQS group-12" data-id="5:714">
                        <div class="rectangle-5-UI0l6j rectangle-5" data-id="5:715"></div>
                        <<span id="trafo3_ir" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-37" data-id="5:717">
                    <div class="group-12-OvPnlJ group-12" data-id="5:718">
                        <div class="rectangle-5-Lgm2Pc rectangle-5" data-id="5:719"></div>
                        <span id="trafo3_vrs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-41" data-id="5:721">
                    <div class="group-12-LmHYu9 group-12" data-id="5:722">
                        <div class="rectangle-5-EUfocu rectangle-5" data-id="5:723"></div>
                        <span id="trafo3_mw" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-12-uor4Ck group-12" data-id="5:725">
                    <div class="rectangle-5-Jt17Q3 rectangle-5" data-id="5:726"></div>
                    <span id="trafo3_vs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                </div>
                <div class="group-42" data-id="5:728">
                    <div class="group-12-mX2M5y group-12" data-id="5:729">
                        <div class="rectangle-5-06mdxT rectangle-5" data-id="5:730"></div>
                        <span id="trafo3_is" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-38" data-id="5:732">
                    <div class="group-12-aqRc6J group-12" data-id="5:733">
                        <div class="rectangle-5-vPFwPe rectangle-5" data-id="5:734"></div>
                        <span id="trafo3_vst" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-43" data-id="5:736">
                    <div class="group-12-yfGFcm group-12" data-id="5:737">
                        <div class="rectangle-5-druuZ4 rectangle-5" data-id="5:738"></div>
                        <span id="trafo3_mvar" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-36" data-id="5:740">
                    <div class="group-12-bwBGrF group-12" data-id="5:741">
                        <div class="rectangle-5-druYiX rectangle-5" data-id="5:742"></div>
                        <span id="trafo3_vt" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-44" data-id="5:744">
                    <div class="group-12-uNA4Hd group-12" data-id="5:745">
                        <div class="rectangle-5-xTcEda rectangle-5" data-id="5:746"></div>
                        <span id="trafo3_it" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-39" data-id="5:748">
                    <div class="group-12-tiuxnU group-12" data-id="5:749">
                        <div class="rectangle-5-n1cRBt rectangle-5" data-id="5:750"></div>
                        <span id="trafo3_vtr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-23" data-id="5:752">
                    <div class="rectangle-5-d4cmjY rectangle-5" data-id="5:753"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:754">kV</div>
                </div>
                <div class="group-7" data-id="5:755">
                    <div class="rectangle-5-z4Uyaq rectangle-5" data-id="5:756"></div>
                    <div class="ir timesnewroman-regular-normal-white-32px" data-id="5:757">Ir</div>
                </div>
                <div class="group-24" data-id="5:758">
                    <div class="rectangle-5-76yhUG rectangle-5" data-id="5:759"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:760">A</div>
                </div>
                <div class="group-4" data-id="5:761">
                    <div class="rectangle-5-6lvcm4 rectangle-5" data-id="5:762"></div>
                    <div class="vrs timesnewroman-regular-normal-white-32px" data-id="5:763">Vrs</div>
                </div>
                <div class="group-25" data-id="5:764">
                    <div class="rectangle-5-B3yBJE rectangle-5" data-id="5:765"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:766">kV</div>
                </div>
                <div class="group-2" data-id="5:767">
                    <div class="rectangle-5-M8usxM rectangle-5" data-id="5:768"></div>
                    <div class="vs timesnewroman-regular-normal-white-32px" data-id="5:769">Vs</div>
                </div>
                <div class="group-26" data-id="5:770">
                    <div class="rectangle-5-FX32Xx rectangle-5" data-id="5:771"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:772">kV</div>
                </div>
                <div class="group-8" data-id="5:773">
                    <div class="rectangle-5-DPJw5x rectangle-5" data-id="5:774"></div>
                    <div class="is timesnewroman-regular-normal-white-32px" data-id="5:775">Is</div>
                </div>
                <div class="group-27" data-id="5:776">
                    <div class="rectangle-5-pagzqW rectangle-5" data-id="5:777"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:778">A</div>
                </div>
                <div class="group-10" data-id="5:779">
                    <div class="rectangle-5-wEGVqW rectangle-5" data-id="5:780"></div>
                    <div class="p timesnewroman-regular-normal-white-32px" data-id="5:781">P</div>
                </div>
                <div class="group-28" data-id="5:782">
                    <div class="rectangle-5-b9EnjA rectangle-5" data-id="5:783"></div>
                    <div class="mw timesnewroman-regular-normal-white-32px" data-id="5:784">MW</div>
                </div>
                <div class="group-5" data-id="5:785">
                    <div class="rectangle-5-3MtMdp rectangle-5" data-id="5:786"></div>
                    <div class="vst timesnewroman-regular-normal-white-32px" data-id="5:787">Vst</div>
                </div>
                <div class="group-29" data-id="5:788">
                    <div class="rectangle-5-YZV3Hg rectangle-5" data-id="5:789"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:790">kV</div>
                </div>
                <div class="group-3" data-id="5:791">
                    <div class="rectangle-5-If0xTx rectangle-5" data-id="5:792"></div>
                    <div class="vt timesnewroman-regular-normal-white-32px" data-id="5:793">Vt</div>
                </div>
                <div class="group-30" data-id="5:794">
                    <div class="rectangle-5-xSV2mq rectangle-5" data-id="5:795"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:796">kV</div>
                </div>
                <div class="group-9" data-id="5:797">
                    <div class="rectangle-5-xbEl4i rectangle-5" data-id="5:798"></div>
                    <div class="it timesnewroman-regular-normal-white-32px" data-id="5:799">It</div>
                </div>
                <div class="group-31" data-id="5:800">
                    <div class="rectangle-5-vcI2Gv rectangle-5" data-id="5:801"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:802">A</div>
                </div>
                <div class="group-11" data-id="5:803">
                    <div class="rectangle-5-rj4Yml rectangle-5" data-id="5:804"></div>
                    <div class="q timesnewroman-regular-normal-white-32px" data-id="5:805">Q</div>
                </div>
                <div class="group-32" data-id="5:806">
                    <div class="rectangle-5-aI0br1 rectangle-5" data-id="5:807"></div>
                    <div class="m-var timesnewroman-regular-normal-white-32px" data-id="5:808">MVar</div>
                </div>
                <div class="group-6" data-id="5:809">
                    <div class="rectangle-5-MrZnGP rectangle-5" data-id="5:810"></div>
                    <div class="vtr timesnewroman-regular-normal-white-32px" data-id="5:811">Vtr</div>
                </div>
                <div class="group-33" data-id="5:812">
                    <div class="rectangle-5-3Uzh4R rectangle-5" data-id="5:813"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:814">kV</div>
                </div>
            </div>
            <div class="bay-8-IO3Fu5 bay-8" data-id="5:1272">
                <a href="Bay/kopel.php" style="text-decoration: none;">
                    <div class="kotak-measurement" data-id="5:1273">
                        <div class="rectangle-3" data-id="5:1274"></div>
                        <div class="rectangle-2-QoRvSJ rectangle-2" data-id="5:1275"></div>
                        <div class="bay-8-QoRvSJ bay-8 fjallaone-normal-white-32px" data-id="5:1276">KOPEL</div>
                    </div>
                </a>
                <div class="group-1" data-id="5:1277">
                    <div class="rectangle-5-wr6AVo rectangle-5" data-id="5:1278"></div>
                    <div class="vr timesnewroman-regular-normal-white-20px" data-id="5:1279">BUS 1</div>
                </div>
                <div class="group-34" data-id="5:1280">
                    <div class="group-12-3atzyZ group-12" data-id="5:1281">
                        <div class="rectangle-5-cAKlz1 rectangle-5" data-id="5:1282"></div>
                        <span id="kopel_vr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-40" data-id="5:1284">
                    <div class="group-12-NJPuAb group-12" data-id="5:1285">
                        <div class="rectangle-5-Ex9sm9 rectangle-5" data-id="5:1286"></div>
                        <span id="kopel_ir" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-12-kW27vx group-12" data-id="5:1296">
                    <div class="rectangle-5-I9AsYl rectangle-5" data-id="5:1297"></div>
                    <span id="kopel_vs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                </div>
                <div class="group-42" data-id="5:1299">
                    <div class="group-12-vMoEHx group-12" data-id="5:1300">
                        <div class="rectangle-5-rnH8nX rectangle-5" data-id="5:1301"></div>
                        <span id="kopel_is" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-44" data-id="5:1315">
                    <div class="group-12-xlkt1b group-12" data-id="5:1316">
                        <div class="rectangle-5-BCSOfE rectangle-5" data-id="5:1317"></div>
                        <span id="kopel_it" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-23" data-id="5:1323">
                    <div class="rectangle-5-VodSHi rectangle-5" data-id="5:1324"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:1325">kV</div>
                </div>
                <div class="group-7" data-id="5:1326">
                    <div class="rectangle-5-8D0YIi rectangle-5" data-id="5:1327"></div>
                    <div class="ir timesnewroman-regular-normal-white-32px" data-id="5:1328">Ir</div>
                </div>
                <div class="group-24" data-id="5:1329">
                    <div class="rectangle-5-RHIGUq rectangle-5" data-id="5:1330"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:1331">A</div>
                </div>
                <div class="group-2" data-id="5:1338">
                    <div class="rectangle-5-fT3sPA rectangle-5" data-id="5:1339"></div>
                    <div class="vs timesnewroman-regular-normal-white-20px" data-id="5:1340">BUS 2</div>
                </div>
                <div class="group-26" data-id="5:1341">
                    <div class="rectangle-5-Vxx3fs rectangle-5" data-id="5:1342"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:1343">kV</div>
                </div>
                <div class="group-8" data-id="5:1344">
                    <div class="rectangle-5-2bS5yp rectangle-5" data-id="5:1345"></div>
                    <div class="is timesnewroman-regular-normal-white-32px" data-id="5:1346">Is</div>
                </div>
                <div class="group-27" data-id="5:1347">
                    <div class="rectangle-5-DXXLoc rectangle-5" data-id="5:1348"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:1349">A</div>
                </div>
                <div class="group-9" data-id="5:1368">
                    <div class="rectangle-5-jB9FsZ rectangle-5" data-id="5:1369"></div>
                    <div class="it timesnewroman-regular-normal-white-32px" data-id="5:1370">It</div>
                </div>
                <div class="group-31" data-id="5:1371">
                    <div class="rectangle-5-Ua2GRc rectangle-5" data-id="5:1372"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:1373">A</div>
                </div>
            </div>
            <div class="bay-9-IO3Fu5 bay-9" data-id="5:1387">
                <a href="Bay/kapasitor.php" style="text-decoration: none;">
                    <div class="kotak-measurement" data-id="5:1388">
                        <div class="rectangle-3" data-id="5:1389"></div>
                        <div class="rectangle-2-SJsvec rectangle-2" data-id="5:1390"></div>
                        <div class="bay-9-SJsvec bay-9 fjallaone-normal-white-32px" data-id="5:1391">KAPASITOR</div>
                    </div>
                </a>
                <div class="group-1" data-id="5:1392">
                    <div class="rectangle-5-xLmQxn rectangle-5" data-id="5:1393"></div>
                    <div class="vr timesnewroman-regular-normal-white-32px" data-id="5:1394">Vr</div>
                </div>
                <div class="group-34" data-id="5:1395">
                    <div class="group-12-CiERmQ group-12" data-id="5:1396">
                        <div class="rectangle-5-oGSOzN rectangle-5" data-id="5:1397"></div>
                        <span id="kapasitor_vr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-40" data-id="5:1399">
                    <div class="group-12-NmgykU group-12" data-id="5:1400">
                        <div class="rectangle-5-XAWxpn rectangle-5" data-id="5:1401"></div>
                        <span id="kapasitor_ir" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-37" data-id="5:1403">
                    <div class="group-12-w9iJZk group-12" data-id="5:1404">
                        <div class="rectangle-5-KJeSJR rectangle-5" data-id="5:1405"></div>
                        <span id="kapasitor_vrs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-41" data-id="5:1407">
                    <div class="group-12-kQGVd7 group-12" data-id="5:1408">
                        <div class="rectangle-5-J8RZTR rectangle-5" data-id="5:1409"></div>
                        <span id="kapasitor_mw" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-12-LNtu6l group-12" data-id="5:1411">
                    <div class="rectangle-5-ona1yi rectangle-5" data-id="5:1412"></div>
                    <span id="kapasitor_vs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                </div>
                <div class="group-42" data-id="5:1414">
                    <div class="group-12-zuZLxp group-12" data-id="5:1415">
                        <div class="rectangle-5-Mt1vxV rectangle-5" data-id="5:1416"></div>
                        <span id="kapasitor_is" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-38" data-id="5:1418">
                    <div class="group-12-CruWn2 group-12" data-id="5:1419">
                        <div class="rectangle-5-OrA0WS rectangle-5" data-id="5:1420"></div>
                        <span id="kapasitor_vst" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-36" data-id="5:1426">
                    <div class="group-12-P2Brgc group-12" data-id="5:1427">
                        <div class="rectangle-5-xzSwyf rectangle-5" data-id="5:1428"></div>
                        <span id="kapasitor_vt" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-44" data-id="5:1430">
                    <div class="group-12-xTboSb group-12" data-id="5:1431">
                        <div class="rectangle-5-8q15wx rectangle-5" data-id="5:1432"></div>
                        <span id="kapasitor_it" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-39" data-id="5:1434">
                    <div class="group-12-kJKBF3 group-12" data-id="5:1435">
                        <div class="rectangle-5-uxzcx0 rectangle-5" data-id="5:1436"></div>
                        <span id="kapasitor_vtr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-23" data-id="5:1438">
                    <div class="rectangle-5-Pr5SIc rectangle-5" data-id="5:1439"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:1440">kV</div>
                </div>
                <div class="group-7" data-id="5:1441">
                    <div class="rectangle-5-FSBzR2 rectangle-5" data-id="5:1442"></div>
                    <div class="ir timesnewroman-regular-normal-white-32px" data-id="5:1443">Ir</div>
                </div>
                <div class="group-24" data-id="5:1444">
                    <div class="rectangle-5-d34D9x rectangle-5" data-id="5:1445"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:1446">A</div>
                </div>
                <div class="group-4" data-id="5:1447">
                    <div class="rectangle-5-IVGHJM rectangle-5" data-id="5:1448"></div>
                    <div class="vrs timesnewroman-regular-normal-white-32px" data-id="5:1449">Vrs</div>
                </div>
                <div class="group-25" data-id="5:1450">
                    <div class="rectangle-5-qWpw8d rectangle-5" data-id="5:1451"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:1452">kV</div>
                </div>
                <div class="group-2" data-id="5:1453">
                    <div class="rectangle-5-5C7rSf rectangle-5" data-id="5:1454"></div>
                    <div class="vs timesnewroman-regular-normal-white-32px" data-id="5:1455">Vs</div>
                </div>
                <div class="group-26" data-id="5:1456">
                    <div class="rectangle-5-M88fXE rectangle-5" data-id="5:1457"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:1458">kV</div>
                </div>
                <div class="group-8" data-id="5:1459">
                    <div class="rectangle-5-rFoPX9 rectangle-5" data-id="5:1460"></div>
                    <div class="is timesnewroman-regular-normal-white-32px" data-id="5:1461">Is</div>
                </div>
                <div class="group-27" data-id="5:1462">
                    <div class="rectangle-5-yctQRC rectangle-5" data-id="5:1463"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:1464">A</div>
                </div>
                <div class="group-10" data-id="5:1465">
                    <div class="rectangle-5-HoqRG5 rectangle-5" data-id="5:1466"></div>
                    <div class="p timesnewroman-regular-normal-white-32px" data-id="5:1467">P</div>
                </div>
                <div class="group-28" data-id="5:1468">
                    <div class="rectangle-5-V3q8ow rectangle-5" data-id="5:1469"></div>
                    <div class="mw timesnewroman-regular-normal-white-32px" data-id="5:1470">MW</div>
                </div>
                <div class="group-5" data-id="5:1471">
                    <div class="rectangle-5-KhIwA9 rectangle-5" data-id="5:1472"></div>
                    <div class="vst timesnewroman-regular-normal-white-32px" data-id="5:1473">Vst</div>
                </div>
                <div class="group-29" data-id="5:1474">
                    <div class="rectangle-5-clweZD rectangle-5" data-id="5:1475"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:1476">kV</div>
                </div>
                <div class="group-3" data-id="5:1477">
                    <div class="rectangle-5-2xCHUj rectangle-5" data-id="5:1478"></div>
                    <div class="vt timesnewroman-regular-normal-white-32px" data-id="5:1479">Vt</div>
                </div>
                <div class="group-30" data-id="5:1480">
                    <div class="rectangle-5-lfVxSq rectangle-5" data-id="5:1481"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:1482">kV</div>
                </div>
                <div class="group-9" data-id="5:1483">
                    <div class="rectangle-5-yQS7I5 rectangle-5" data-id="5:1484"></div>
                    <div class="it timesnewroman-regular-normal-white-32px" data-id="5:1485">It</div>
                </div>
                <div class="group-31" data-id="5:1486">
                    <div class="rectangle-5-ixVdo7 rectangle-5" data-id="5:1487"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:1488">A</div>
                </div>
                <div class="group-6" data-id="5:1495">
                    <div class="rectangle-5-zh6roe rectangle-5" data-id="5:1496"></div>
                    <div class="vtr timesnewroman-regular-normal-white-32px" data-id="5:1497">Vtr</div>
                </div>
                <div class="group-33" data-id="5:1498">
                    <div class="rectangle-5-ewoePw rectangle-5" data-id="5:1499"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:1500">kV</div>
                </div>
            </div>
            <div class="bay-2-IO3Fu5 bay-2" data-id="5:245">
                <a href="Bay/batang2.php" style="text-decoration: none;">
                    <div class="kotak-measurement" data-id="5:246">
                        <div class="rectangle-3" data-id="5:247"></div>
                        <div class="rectangle-2-XUn00u rectangle-2" data-id="5:248"></div>
                        <div class="bay-2-XUn00u bay-2 fjallaone-normal-white-32px" data-id="5:249">BATANG 2</div>
                    </div>
                </a>
                <div class="group-1" data-id="5:250">
                    <div class="rectangle-5-LkWyL6 rectangle-5" data-id="5:251"></div>
                    <div class="vr timesnewroman-regular-normal-white-32px" data-id="5:252">Vr</div>
                </div>
                <div class="group-34" data-id="5:253">
                    <div class="group-12-AfFTM1 group-12" data-id="5:254">
                        <div class="rectangle-5-IzTveL rectangle-5" data-id="5:255"></div>
                        <span id="batang2_vr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-40" data-id="5:257">
                    <div class="group-12-emVHHr group-12" data-id="5:258">
                        <div class="rectangle-5-xKA78K rectangle-5" data-id="5:259"></div>
                        <span id="batang2_ir" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-37" data-id="5:261">
                    <div class="group-12-iDyhAk group-12" data-id="5:262">
                        <div class="rectangle-5-59y203 rectangle-5" data-id="5:263"></div>
                        <span id="batang2_vrs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-41" data-id="5:265">
                    <div class="group-12-VxTB2b group-12" data-id="5:266">
                        <div class="rectangle-5-0SroLH rectangle-5" data-id="5:267"></div>
                        <span id="batang2_mw" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-12-PvcyZU group-12" data-id="5:269">
                    <div class="rectangle-5-gHgJBf rectangle-5" data-id="5:270"></div>
                    <span id="batang2_vs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                </div>
                <div class="group-42" data-id="5:272">
                    <div class="group-12-dxrVAh group-12" data-id="5:273">
                        <div class="rectangle-5-FsPFaS rectangle-5" data-id="5:274"></div>
                        <span id="batang2_is" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-38" data-id="5:276">
                    <div class="group-12-042MQM group-12" data-id="5:277">
                        <div class="rectangle-5-cWCzl1 rectangle-5" data-id="5:278"></div>
                        <span id="batang2_vst" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-43" data-id="5:280">
                    <div class="group-12-oSB9K3 group-12" data-id="5:281">
                        <div class="rectangle-5-E9KCZm rectangle-5" data-id="5:282"></div>
                        <span id="batang2_mvar" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-36" data-id="5:284">
                    <div class="group-12-Ddfv3n group-12" data-id="5:285">
                        <div class="rectangle-5-p6zi2i rectangle-5" data-id="5:286"></div>
                        <span id="batang2_vt" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-44" data-id="5:288">
                    <div class="group-12-Jl3iKk group-12" data-id="5:289">
                        <div class="rectangle-5-qvZdXj rectangle-5" data-id="5:290"></div>
                        <span id="batang2_it" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-39" data-id="5:292">
                    <div class="group-12-HNDTZF group-12" data-id="5:293">
                        <div class="rectangle-5-Pyw18t rectangle-5" data-id="5:294"></div>
                        <span id="batang2_vtr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-23" data-id="5:296">
                    <div class="rectangle-5-7xQIKR rectangle-5" data-id="5:297"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:298">kV</div>
                </div>
                <div class="group-7" data-id="5:299">
                    <div class="rectangle-5-894I8w rectangle-5" data-id="5:300"></div>
                    <div class="ir timesnewroman-regular-normal-white-32px" data-id="5:301">Ir</div>
                </div>
                <div class="group-24" data-id="5:302">
                    <div class="rectangle-5-0O4xif rectangle-5" data-id="5:303"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:304">A</div>
                </div>
                <div class="group-4" data-id="5:305">
                    <div class="rectangle-5-rETJzk rectangle-5" data-id="5:306"></div>
                    <div class="vrs timesnewroman-regular-normal-white-32px" data-id="5:307">Vrs</div>
                </div>
                <div class="group-25" data-id="5:308">
                    <div class="rectangle-5-0RE0yx rectangle-5" data-id="5:309"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:310">kV</div>
                </div>
                <div class="group-2" data-id="5:311">
                    <div class="rectangle-5-XlxBxp rectangle-5" data-id="5:312"></div>
                    <div class="vs timesnewroman-regular-normal-white-32px" data-id="5:313">Vs</div>
                </div>
                <div class="group-26" data-id="5:314">
                    <div class="rectangle-5-eQg5Uj rectangle-5" data-id="5:315"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:316">kV</div>
                </div>
                <div class="group-8" data-id="5:317">
                    <div class="rectangle-5-3XPFGl rectangle-5" data-id="5:318"></div>
                    <div class="is timesnewroman-regular-normal-white-32px" data-id="5:319">Is</div>
                </div>
                <div class="group-27" data-id="5:320">
                    <div class="rectangle-5-93iFUu rectangle-5" data-id="5:321"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:322">A</div>
                </div>
                <div class="group-10" data-id="5:323">
                    <div class="rectangle-5-vWQdOl rectangle-5" data-id="5:324"></div>
                    <div class="p timesnewroman-regular-normal-white-32px" data-id="5:325">P</div>
                </div>
                <div class="group-28" data-id="5:326">
                    <div class="rectangle-5-iAQ1pN rectangle-5" data-id="5:327"></div>
                    <div class="mw timesnewroman-regular-normal-white-32px" data-id="5:328">MW</div>
                </div>
                <div class="group-5" data-id="5:329">
                    <div class="rectangle-5-Q3Z5mv rectangle-5" data-id="5:330"></div>
                    <div class="vst timesnewroman-regular-normal-white-32px" data-id="5:331">Vst</div>
                </div>
                <div class="group-29" data-id="5:332">
                    <div class="rectangle-5-gDNzkm rectangle-5" data-id="5:333"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:334">kV</div>
                </div>
                <div class="group-3" data-id="5:335">
                    <div class="rectangle-5-xAVUGT rectangle-5" data-id="5:336"></div>
                    <div class="vt timesnewroman-regular-normal-white-32px" data-id="5:337">Vt</div>
                </div>
                <div class="group-30" data-id="5:338">
                    <div class="rectangle-5-SFg1cZ rectangle-5" data-id="5:339"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:340">kV</div>
                </div>
                <div class="group-9" data-id="5:341">
                    <div class="rectangle-5-3yIxsM rectangle-5" data-id="5:342"></div>
                    <div class="it timesnewroman-regular-normal-white-32px" data-id="5:343">It</div>
                </div>
                <div class="group-31" data-id="5:344">
                    <div class="rectangle-5-dLvxBB rectangle-5" data-id="5:345"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:346">A</div>
                </div>
                <div class="group-11" data-id="5:347">
                    <div class="rectangle-5-Ec46hM rectangle-5" data-id="5:348"></div>
                    <div class="q timesnewroman-regular-normal-white-32px" data-id="5:349">Q</div>
                </div>
                <div class="group-32" data-id="5:350">
                    <div class="rectangle-5-WzVExx rectangle-5" data-id="5:351"></div>
                    <div class="m-var timesnewroman-regular-normal-white-32px" data-id="5:352">MVar</div>
                </div>
                <div class="group-6" data-id="5:353">
                    <div class="rectangle-5-X5AJmt rectangle-5" data-id="5:354"></div>
                    <div class="vtr timesnewroman-regular-normal-white-32px" data-id="5:355">Vtr</div>
                </div>
                <div class="group-33" data-id="5:356">
                    <div class="rectangle-5-VHeikn rectangle-5" data-id="5:357"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:358">kV</div>
                </div>
            </div>
            <div class="bay-6-IO3Fu5 bay-6" data-id="5:815">
                <a href="Bay/trafo2.php" style="text-decoration: none;">
                    <div class="kotak-measurement" data-id="5:816">
                        <div class="rectangle-3" data-id="5:817"></div>
                        <div class="rectangle-2-FbNQUQ rectangle-2" data-id="5:818"></div>
                        <div class="bay-7-FbNQUQ bay-7 fjallaone-normal-white-32px" data-id="5:819">TRAFO 2</div>
                    </div>
                </a>
                <div class="group-1" data-id="5:820">
                    <div class="rectangle-5-VHgG3X rectangle-5" data-id="5:821"></div>
                    <div class="vr timesnewroman-regular-normal-white-32px" data-id="5:822">Vr</div>
                </div>
                <div class="group-34" data-id="5:823">
                    <div class="group-12-Rx7mrK group-12" data-id="5:824">
                        <div class="rectangle-5-tl2axI rectangle-5" data-id="5:825"></div>
                        <span id="trafo2_vr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-40" data-id="5:827">
                    <div class="group-12-1SwRVq group-12" data-id="5:828">
                        <div class="rectangle-5-Wp4S4T rectangle-5" data-id="5:829"></div>
                        <span id="trafo2_ir" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-37" data-id="5:831">
                    <div class="group-12-udI8HG group-12" data-id="5:832">
                        <div class="rectangle-5-5jGp6z rectangle-5" data-id="5:833"></div>
                        <span id="trafo2_vrs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-41" data-id="5:835">
                    <div class="group-12-Y111B2 group-12" data-id="5:836">
                        <div class="rectangle-5-ojfuJM rectangle-5" data-id="5:837"></div>
                        <span id="trafo2_mw" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-12-A7FF9m group-12" data-id="5:839">
                    <div class="rectangle-5-03hoks rectangle-5" data-id="5:840"></div>
                    <span id="trafo2_vs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                </div>
                <div class="group-42" data-id="5:842">
                    <div class="group-12-dV9h6Q group-12" data-id="5:843">
                        <div class="rectangle-5-gTYQxk rectangle-5" data-id="5:844"></div>
                        <span id="trafo2_is" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-38" data-id="5:846">
                    <div class="group-12-3vGEJK group-12" data-id="5:847">
                        <div class="rectangle-5-Zx8r6w rectangle-5" data-id="5:848"></div>
                        <span id="trafo2_vst" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-43" data-id="5:850">
                    <div class="group-12-BQKYJh group-12" data-id="5:851">
                        <div class="rectangle-5-pvfeLt rectangle-5" data-id="5:852"></div>
                        <span id="trafo2_mvar" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-36" data-id="5:854">
                    <div class="group-12-bPnmQ1 group-12" data-id="5:855">
                        <div class="rectangle-5-iKchyw rectangle-5" data-id="5:856"></div>
                        <span id="trafo2_vt" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-44" data-id="5:858">
                    <div class="group-12-IBDgnY group-12" data-id="5:859">
                        <div class="rectangle-5-doMHmI rectangle-5" data-id="5:860"></div>
                        <span id="trafo2_it" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-39" data-id="5:862">
                    <div class="group-12-txBOuV group-12" data-id="5:863">
                        <div class="rectangle-5-7XhzuC rectangle-5" data-id="5:864"></div>
                        <span id="trafo2_vtr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-23" data-id="5:866">
                    <div class="rectangle-5-pasKwX rectangle-5" data-id="5:867"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:868">kV</div>
                </div>
                <div class="group-7" data-id="5:869">
                    <div class="rectangle-5-M18umZ rectangle-5" data-id="5:870"></div>
                    <div class="ir timesnewroman-regular-normal-white-32px" data-id="5:871">Ir</div>
                </div>
                <div class="group-24" data-id="5:872">
                    <div class="rectangle-5-nn4sTC rectangle-5" data-id="5:873"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:874">A</div>
                </div>
                <div class="group-4" data-id="5:875">
                    <div class="rectangle-5-NWxBWQ rectangle-5" data-id="5:876"></div>
                    <div class="vrs timesnewroman-regular-normal-white-32px" data-id="5:877">Vrs</div>
                </div>
                <div class="group-25" data-id="5:878">
                    <div class="rectangle-5-XFPQj8 rectangle-5" data-id="5:879"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:880">kV</div>
                </div>
                <div class="group-2" data-id="5:881">
                    <div class="rectangle-5-I32lOK rectangle-5" data-id="5:882"></div>
                    <div class="vs timesnewroman-regular-normal-white-32px" data-id="5:883">Vs</div>
                </div>
                <div class="group-26" data-id="5:884">
                    <div class="rectangle-5-kLn27P rectangle-5" data-id="5:885"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:886">kV</div>
                </div>
                <div class="group-8" data-id="5:887">
                    <div class="rectangle-5-dT81KW rectangle-5" data-id="5:888"></div>
                    <div class="is timesnewroman-regular-normal-white-32px" data-id="5:889">Is</div>
                </div>
                <div class="group-27" data-id="5:890">
                    <div class="rectangle-5-IGqqNK rectangle-5" data-id="5:891"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:892">A</div>
                </div>
                <div class="group-10" data-id="5:893">
                    <div class="rectangle-5-aFYn67 rectangle-5" data-id="5:894"></div>
                    <div class="p timesnewroman-regular-normal-white-32px" data-id="5:895">P</div>
                </div>
                <div class="group-28" data-id="5:896">
                    <div class="rectangle-5-4RhkXx rectangle-5" data-id="5:897"></div>
                    <div class="mw timesnewroman-regular-normal-white-32px" data-id="5:898">MW</div>
                </div>
                <div class="group-5" data-id="5:899">
                    <div class="rectangle-5-zxIVB8 rectangle-5" data-id="5:900"></div>
                    <div class="vst timesnewroman-regular-normal-white-32px" data-id="5:901">Vst</div>
                </div>
                <div class="group-29" data-id="5:902">
                    <div class="rectangle-5-9L6Duc rectangle-5" data-id="5:903"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:904">kV</div>
                </div>
                <div class="group-3" data-id="5:905">
                    <div class="rectangle-5-88F30A rectangle-5" data-id="5:906"></div>
                    <div class="vt timesnewroman-regular-normal-white-32px" data-id="5:907">Vt</div>
                </div>
                <div class="group-30" data-id="5:908">
                    <div class="rectangle-5-SffCkV rectangle-5" data-id="5:909"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:910">kV</div>
                </div>
                <div class="group-9" data-id="5:911">
                    <div class="rectangle-5-Ogagb9 rectangle-5" data-id="5:912"></div>
                    <div class="it timesnewroman-regular-normal-white-32px" data-id="5:913">It</div>
                </div>
                <div class="group-31" data-id="5:914">
                    <div class="rectangle-5-uXq7Du rectangle-5" data-id="5:915"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:916">A</div>
                </div>
                <div class="group-11" data-id="5:917">
                    <div class="rectangle-5-ird4dz rectangle-5" data-id="5:918"></div>
                    <div class="q timesnewroman-regular-normal-white-32px" data-id="5:919">Q</div>
                </div>
                <div class="group-32" data-id="5:920">
                    <div class="rectangle-5-YlhExC rectangle-5" data-id="5:921"></div>
                    <div class="m-var timesnewroman-regular-normal-white-32px" data-id="5:922">MVar</div>
                </div>
                <div class="group-6" data-id="5:923">
                    <div class="rectangle-5-fOgdMZ rectangle-5" data-id="5:924"></div>
                    <div class="vtr timesnewroman-regular-normal-white-32px" data-id="5:925">Vtr</div>
                </div>
                <div class="group-33" data-id="5:926">
                    <div class="rectangle-5-iF2JnK rectangle-5" data-id="5:927"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:928">kV</div>
                </div>
            </div>
            <div class="bay-4-IO3Fu5 bay-4" data-id="5:473">
                <a href="Bay/comal2.php" style="text-decoration: none;">
                    <div class="kotak-measurement" data-id="5:474">
                        <div class="rectangle-3" data-id="5:475"></div>
                        <div class="rectangle-2-HD8F9X rectangle-2" data-id="5:476"></div>
                        <div class="bay-4-HD8F9X bay-4 fjallaone-normal-white-32px" data-id="5:477">COMAL 2</div>
                    </div>
                </a>
                <div class="group-1" data-id="5:478">
                    <div class="rectangle-5-nk6g5l rectangle-5" data-id="5:479"></div>
                    <div class="vr timesnewroman-regular-normal-white-32px" data-id="5:480">Vr</div>
                </div>
                <div class="group-34" data-id="5:481">
                    <div class="group-12-XKcxDx group-12" data-id="5:482">
                        <div class="rectangle-5-4reNo2 rectangle-5" data-id="5:483"></div>
                        <span id="comal2_vr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-40" data-id="5:485">
                    <div class="group-12-uv17si group-12" data-id="5:486">
                        <div class="rectangle-5-UTic1X rectangle-5" data-id="5:487"></div>
                        <span id="comal2_ir" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-37" data-id="5:489">
                    <div class="group-12-Xi9J67 group-12" data-id="5:490">
                        <div class="rectangle-5-8w2QUa rectangle-5" data-id="5:491"></div>
                        <span id="comal2_vrs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-41" data-id="5:493">
                    <div class="group-12-6AaXng group-12" data-id="5:494">
                        <div class="rectangle-5-sU9EWB rectangle-5" data-id="5:495"></div>
                        <span id="comal2_mw" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-12-zjo3Zy group-12" data-id="5:497">
                    <div class="rectangle-5-8x7dTu rectangle-5" data-id="5:498"></div>
                    <span id="comal2_vs" class="a7 timesnewroman-regular-normal-white-32px"></span>
                </div>
                <div class="group-42" data-id="5:500">
                    <div class="group-12-kxcOGg group-12" data-id="5:501">
                        <div class="rectangle-5-oxSGSP rectangle-5" data-id="5:502"></div>
                        <span id="comal2_is" class="a7 timesnewroman-regular-normal-white-32px"></span>

                    </div>
                </div>
                <div class="group-38" data-id="5:504">
                    <div class="group-12-PylbHt group-12" data-id="5:505">
                        <div class="rectangle-5-WB2wBF rectangle-5" data-id="5:506"></div>
                        <span id="comal2_vst" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-43" data-id="5:508">
                    <div class="group-12-rr6o9J group-12" data-id="5:509">
                        <div class="rectangle-5-K1fzzE rectangle-5" data-id="5:510"></div>
                        <span id="comal2_mvar" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-36" data-id="5:512">
                    <div class="group-12-4fxYKN group-12" data-id="5:513">
                        <div class="rectangle-5-xnFxGJ rectangle-5" data-id="5:514"></div>
                        <span id="comal2_vt" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-44" data-id="5:516">
                    <div class="group-12-9BmpNs group-12" data-id="5:517">
                        <div class="rectangle-5-xmB6H4 rectangle-5" data-id="5:518"></div>
                        <span id="comal2_it" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-39" data-id="5:520">
                    <div class="group-12-RKwyuJ group-12" data-id="5:521">
                        <div class="rectangle-5-iR14o8 rectangle-5" data-id="5:522"></div>
                        <span id="comal2_vtr" class="a7 timesnewroman-regular-normal-white-32px"></span>
                    </div>
                </div>
                <div class="group-23" data-id="5:524">
                    <div class="rectangle-5-lmvmCF rectangle-5" data-id="5:525"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:526">kV</div>
                </div>
                <div class="group-7" data-id="5:527">
                    <div class="rectangle-5-Xaeh2l rectangle-5" data-id="5:528"></div>
                    <div class="ir timesnewroman-regular-normal-white-32px" data-id="5:529">Ir</div>
                </div>
                <div class="group-24" data-id="5:530">
                    <div class="rectangle-5-QqGokf rectangle-5" data-id="5:531"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:532">A</div>
                </div>
                <div class="group-4" data-id="5:533">
                    <div class="rectangle-5-PAY5Zj rectangle-5" data-id="5:534"></div>
                    <div class="vrs timesnewroman-regular-normal-white-32px" data-id="5:535">Vrs</div>
                </div>
                <div class="group-25" data-id="5:536">
                    <div class="rectangle-5-CToeGq rectangle-5" data-id="5:537"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:538">kV</div>
                </div>
                <div class="group-2" data-id="5:539">
                    <div class="rectangle-5-UtlD2A rectangle-5" data-id="5:540"></div>
                    <div class="vs timesnewroman-regular-normal-white-32px" data-id="5:541">Vs</div>
                </div>
                <div class="group-26" data-id="5:542">
                    <div class="rectangle-5-yo6lDa rectangle-5" data-id="5:543"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:544">kV</div>
                </div>
                <div class="group-8" data-id="5:545">
                    <div class="rectangle-5-Wzwjmc rectangle-5" data-id="5:546"></div>
                    <div class="is timesnewroman-regular-normal-white-32px" data-id="5:547">Is</div>
                </div>
                <div class="group-27" data-id="5:548">
                    <div class="rectangle-5-RaZ2ZQ rectangle-5" data-id="5:549"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:550">A</div>
                </div>
                <div class="group-10" data-id="5:551">
                    <div class="rectangle-5-BYw4dk rectangle-5" data-id="5:552"></div>
                    <div class="p timesnewroman-regular-normal-white-32px" data-id="5:553">P</div>
                </div>
                <div class="group-28" data-id="5:554">
                    <div class="rectangle-5-X465sm rectangle-5" data-id="5:555"></div>
                    <div class="mw timesnewroman-regular-normal-white-32px" data-id="5:556">MW</div>
                </div>
                <div class="group-5" data-id="5:557">
                    <div class="rectangle-5-2DHYyb rectangle-5" data-id="5:558"></div>
                    <div class="vst timesnewroman-regular-normal-white-32px" data-id="5:559">Vst</div>
                </div>
                <div class="group-29" data-id="5:560">
                    <div class="rectangle-5-u9VVCT rectangle-5" data-id="5:561"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:562">kV</div>
                </div>
                <div class="group-3" data-id="5:563">
                    <div class="rectangle-5-01srhx rectangle-5" data-id="5:564"></div>
                    <div class="vt timesnewroman-regular-normal-white-32px" data-id="5:565">Vt</div>
                </div>
                <div class="group-30" data-id="5:566">
                    <div class="rectangle-5-sAABDx rectangle-5" data-id="5:567"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:568">kV</div>
                </div>
                <div class="group-9" data-id="5:569">
                    <div class="rectangle-5-dMAyPb rectangle-5" data-id="5:570"></div>
                    <div class="it timesnewroman-regular-normal-white-32px" data-id="5:571">It</div>
                </div>
                <div class="group-31" data-id="5:572">
                    <div class="rectangle-5-08O1dW rectangle-5" data-id="5:573"></div>
                    <div class="a timesnewroman-regular-normal-white-32px" data-id="5:574">A</div>
                </div>
                <div class="group-11" data-id="5:575">
                    <div class="rectangle-5-vwXANN rectangle-5" data-id="5:576"></div>
                    <div class="q timesnewroman-regular-normal-white-32px" data-id="5:577">Q</div>
                </div>
                <div class="group-32" data-id="5:578">
                    <div class="rectangle-5-D0mXoi rectangle-5" data-id="5:579"></div>
                    <div class="m-var timesnewroman-regular-normal-white-32px" data-id="5:580">MVar</div>
                </div>
                <div class="group-6" data-id="5:581">
                    <div class="rectangle-5-hFNAL8 rectangle-5" data-id="5:582"></div>
                    <div class="vtr timesnewroman-regular-normal-white-32px" data-id="5:583">Vtr</div>
                </div>
                <div class="group-33" data-id="5:584">
                    <div class="rectangle-5-mtSr0B rectangle-5" data-id="5:585"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="5:586">kV</div>
                </div>
            </div>
        </div>
    </div>
    <script defer src="etc/js/restart-btn.min.js"></script>
</body>

</html>