<?php
session_start();
$base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/Hacettepe-KDSE-BPYS';
if (!isset($_SESSION['userlogin'])) {
    header("Location: login-student.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header("Location: main.php");
}

// $tanı_respiratory_rate = $_GET['tanı_respiratory_rate'];
// $tanı_heart_rate = $_GET['tanı_heart_rate'];
// $tanı_spo2_percentage = $_GET['tanı_spo2_percentage'];
// $tanı_o2_status = $_GET['tanı_o2_status'];
// $tanı_respiratory_nature = $_GET['tanı_respiratory_nature'];
$Dispne  = isset($_GET['Dispne ']) ? $_GET['Dispne '] : "NaN";
$systolic_bp = isset($_GET['systolic_bp']) ? $_GET['systolic_bp'] : "NaN";
$diastolic_bp = isset($_GET['diastolic_bp']) ? $_GET['diastolic_bp'] : "NaN";
$pulse_rate   = isset($_GET['pulse_rate  ']) ? $_GET['pulse_rate '] : "NaN";
$fatigue  = isset($_GET['fatigue ']) ? $_GET['fatigue '] : "NaN";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>KDSE-BPYS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="../style.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #eee;
        }

        h1 {
            text-align: center;
        }

        tr,
        td {
            width: 200px;
        }
    </style>

<body>
    <div class="container-fluid pt-4 px-4">
        <div class="send-patient">
            <span class='close closeBtn' id='closeBtn1'>&times;</span>
            <h1 class="form-header">Bakım Planı</h1>
            <div class="input-section-item">
                <div class="patients-save">
                    <form action="" method="POST" class="patients-save-fields">
                        <div class="input-section d-flex">
                            <p class="usernamelabel">Sorunla İlişkili Veriler:</p>
                            <div class="matchedfields-wrapper">
                                <?php
                                echo "<p class='matchedfields' id='Dispne' style='" . ($Dispne == 'NaN' ? 'color: red' : 'color:blue ') . "'>Ortalama uyku süresi: " . $Dispne . "</p>";
                                echo "<p class='matchedfields' id='systolic_bp' style='" . ($systolic_bp == 'NaN' ? 'color:red ' : 'color: blue') . "'>Uykuda sorun:" . $systolic_bp . "</p>";
                                echo "<p class='matchedfields' id='diastolic_bp' style='" . ($diastolic_bp == 'NaN' ? 'color:red ' : 'color: blue') . "'>Huzursuzluk:" . $diastolic_bp . "</p>";
                                echo "<p class='matchedfields' id='pulse_rate' style='" . ($pulse_rate == 'NaN' ? 'color:red ' : 'color: blue') . "'> Rahatsızlık :" . $pulse_rate . "</p>";
                                echo "<p class='matchedfields' id='fatigue' style='" . ($fatigue == 'NaN' ? 'color:red ' : 'color: blue') . "'>Kaşıntı :" . $fatigue . "</p>";
                                ?>
                            </div>

                        </div>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">Hemşirelik Tanıları:</p>
                            <p class="tanıdescription">Aktivite intoleransı </p>
                        </div>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">NOC Çıktıları:</p>
                            <p class="tanıdescription">Hastanın aktivite toleransı göstermesi </p>
                        </div>






                        <div class="input-section" id="o2-delivery-container">
                            <p class="usernamelabel">NOC Gösterge: </p>
                            <div class="form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator" id="noc_indicator" value="1:Hastanın aktiviteye toleransı yok">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">1:Hastanın aktiviteye toleransı yok</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator" id="noc_indicator" value="2:Hastanın aktiviteye toleransı sık sık yok">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">2:Hastanın aktiviteye toleransı sık sık yok</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator" id="noc_indicator" value="3:Hastanın aktiviteye toleransı bazen yok">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">3:Hastanın aktiviteye toleransı bazen yok</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator" id="noc_indicator" value="4:Hastanın aktiviteye toleransı nadiren yok">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">4:Hastanın aktiviteye toleransı nadiren yok</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator" id="
                                        noc_indicator" value="5: Hastanın aktivite toleransı var">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">5: Hastanın aktivite toleransı var
                                        </span>
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="input-section d-flex" style="flex-direction: column;">
                            <p class="usernamelabel">Hemşirelik Girişimleri:</p>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt1" value="Aktiviteye karşı gelişen kardiyorespiratör yanıt değerlendirilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Aktiviteye karşı gelişen kardiyorespiratör yanıt değerlendirilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt2" value="Aktivite öncesi, sırası ve sonrası yaşamsal bulgu takibi yapılır ve yaşamsal bulgular hasta için beklenen sınırlarda değilse ya da aktivitenin tolere edilmediğine dair belirti ve bulgu (göğüs ağrısı, vertigo, dispne) varsa aktivite sonlandırılır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Aktivite öncesi, sırası ve sonrası yaşamsal bulgu takibi yapılır ve yaşamsal bulgular hasta için beklenen sınırlarda değilse ya da aktivitenin tolere edilmediğine dair belirti ve bulgu (göğüs ağrısı, vertigo, dispne) varsa aktivite sonlandırılır</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt3" value="Aktiviteyi arttırmaya yönelik hastanın motivasyonu değerlendirilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Aktiviteyi arttırmaya yönelik hastanın motivasyonu değerlendirilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt4" value="Hastanın tolere edebileceği kadar yavaş bir şekilde pozisyon değiştirmesine, oturmasına, kalkmasına, hareket etmesine yardımcı olunur">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Hastanın tolere edebileceği kadar yavaş bir şekilde pozisyon değiştirmesine, oturmasına, kalkmasına, hareket etmesine yardımcı olunur</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt5" value="Yeterli enerji sağlamak için besin alımı değerlendirilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Yeterli enerji sağlamak için besin alımı değerlendirilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt6" value="Hastanın uyku düzeni izlenir ve günlük toplam uyku süresi kaydedilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Hastanın uyku düzeni izlenir ve günlük toplam uyku süresi kaydedilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt7" value="İhtiyaç olması halinde, hastaya fiziksel aktivitelerde destek olunur">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">İhtiyaç olması halinde, hastaya fiziksel aktivitelerde destek olunur</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt8" value="Hastanın ağrısı bir faktör ise, aktivite öncesinde ağrının yönetilmesi sağlanır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Hastanın ağrısı bir faktör ise, aktivite öncesinde ağrının yönetilmesi sağlanır</span>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt9" value="Hastanın enerjisinin yüksek olduğu zamanlara aktivite planlanır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Hastanın enerjisinin yüksek olduğu zamanlara aktivite planlanır</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_attempt" id="nurse_attempt10" value="Aktivite ve dinlenme periyotlarını sırasıyla yapması için teşvik edilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Aktivite ve dinlenme periyotlarını sırasıyla yapması için teşvik edilir</span>
                                </label>
                            </div>

                            <p class="usernamelabel">Eğitim:</p>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_education" id="nurse_attempt11" value="Kas gücünü korumak ve geliştirmek için aktif ve pasif ROM egzersizleri konusunda bilgilendirilir ve yapması konusunda hasta desteklenir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Kas gücünü korumak ve geliştirmek için aktif ve pasif ROM egzersizleri konusunda bilgilendirilir ve yapması konusunda hasta desteklenir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_education" id="nurse_attempt12" value="Sıklıkla kullandığı objeler hastanın kolay ulaşabileceği yerde bulundurmak gibi enerjinin korunmasına yönelik tedbirler öğretilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Sıklıkla kullandığı objeler hastanın kolay ulaşabileceği yerde bulundurmak gibi enerjinin korunmasına yönelik tedbirler öğretilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_education" id="nurse_attempt13" value="Bağımsızlığını ve dayanıklılığını arttırmak için hasta ve bakım verenle birlikte aktiviteler planlanır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Bağımsızlığını ve dayanıklılığını arttırmak için hasta ve bakım verenle birlikte aktiviteler planlanır</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_education" id="nurse_attempt14" value="Enerji düzeyini korumak ve sürdürmek için hastanın besin tüketimi değerlendirilir ve yeterli beslenmenin önemi anlatılır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Enerji düzeyini korumak ve sürdürmek için hastanın besin tüketimi değerlendirilir ve yeterli beslenmenin önemi anlatılır</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_education" id="nurse_attempt15" value="Aktivite sırasında gevşeme teknikleri (dikkati başka yöne çekme, hayal kurma gibi) öğretilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Aktivite sırasında gevşeme teknikleri (dikkati başka yöne çekme, hayal kurma gibi) öğretilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_education" id="nurse_attempt16" value="Aktivite sırasında kontrollü nefes kullanımı öğretilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Aktivite sırasında kontrollü nefes kullanımı öğretilir</span>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_education" id="nurse_attempt17" value="Hasta ve bakım verenlerine aktivite intoleransı belirti ve bulguları öğretilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Hasta ve bakım verenlerine aktivite intoleransı belirti ve bulguları öğretilir </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_education" id="nurse_attempt18" value="Gerekli ise, aktivite sırasında oksijen kullanımı öğretilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Gerekli ise, aktivite sırasında oksijen kullanımı öğretilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="nurse_education" id="nurse_attempt19" value="Aktivite intoleransının aile ve iş yaşamına olası etkileri anlatılır ">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Aktivite intoleransının aile ve iş yaşamına olası etkileri anlatılır </span>
                                </label>
                            </div>
                            <p class="usernamelabel">İŞ BİRLİĞİ GEREKTİREN UYGULAMALAR</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="collaborative_apps" id="nurse_attempt20" value="Kontraendike olmadıkça, beslenme planına yüksek enerjili yiyeceklerin tüketiminin arttırılması için diyetisyenle işbirliği yapılır">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Kontraendike olmadıkça, beslenme planına yüksek enerjili yiyeceklerin tüketiminin arttırılması için diyetisyenle işbirliği yapılır</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="collaborative_apps" id="nurse_attempt21" value="İş uğraş terapistleriyle birlikte hastaya uygun aktivite programları planlanır ve hastanın uyumu değerlendirilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">İş uğraş terapistleriyle birlikte hastaya uygun aktivite programları planlanır ve hastanın uyumu değerlendirilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="collaborative_apps" id="nurse_attempt22" value="İhtiyaç duyulması halinde, hasta evde bakım hizmetlerinden yararlanabilmesi için yönlendirilir">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">İhtiyaç duyulması halinde, hasta evde bakım hizmetlerinden yararlanabilmesi için yönlendirilir</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="collaborative_apps" id="nurse_attempt23" value="Gerekli ise psikolojik destek alabileceği birimlere yönlendirilir ">
                                <label class="form-check-label" for="nurse_attempt">
                                    <span class="checkbox-header">Gerekli ise psikolojik destek alabileceği birimlere yönlendirilir </span>
                                </label>
                            </div>

                        </div>
                        <div class="input-section d-flex">
                            <p class="usernamelabel">Değerlendirme:</p>
                            <div class="input-section d-flex">
                            <p class="usernamelabel">NOC Çıktıları:</p>
                            <p class="tanıdescription">Hastanın aktivite toleransı göstermesi  </p>
                        </div>
                        

 



                        <div class="input-section" id="o2-delivery-container">
                            <p class="usernamelabel">NOC Gösterge: </p>
                            <div class="form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator_after"
                                        id="noc_indicator"
                                        value="1:Hastanın aktiviteye toleransı yok">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">1:Hastanın aktiviteye toleransı yok</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator_after"
                                        id="noc_indicator"
                                        value="2:Hastanın aktiviteye toleransı sık sık yok">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">2:Hastanın aktiviteye toleransı sık sık yok</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator_after"
                                        id="noc_indicator"
                                        value="3:Hastanın aktiviteye toleransı bazen yok">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">3:Hastanın aktiviteye toleransı bazen yok</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator_after"
                                        id="noc_indicator"
                                        value="4:Hastanın aktiviteye toleransı nadiren yok">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">4:Hastanın aktiviteye toleransı nadiren yok</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="noc_indicator_after" id="
                                        noc_indicator" value="5: Hastanın aktivite toleransı var">
                                    <label class="form-check-label" for="noc_indicator">
                                        <span class="checkbox-header">5: Hastanın aktivite toleransı var 
                                        </span>
                                    </label>
                                </div>

                            </div>
                        </div>
                            <p class="tanıdescription"> Sorun devam ediyor: 1-4 gösterge seçildiyse; yeni günde bakım planında tanımlı tanı olacak.</p>
                            <p class="tanıdescription"> Sorun çözümlendi:
                                5 gösterge seçildiyse; yeni günde bakım planına bu tanıyı taşımayacak
                            </p>
                        </div>
                                                                <input type="submit" class="w-75 submit m-auto" name="submit" id="submit" value="Kaydet">



                    </form>
                </div>
            </div>
        </div>


    </div>
    

    <script>
        $(function() {
            $('#closeBtn1').click(function(e) {
                let patient_id = <?php
                                    $userid = $_GET['patient_id'];
                                    echo $userid
                                    ?>;
                let patient_name = "<?php
                                    echo urldecode($_GET['patient_name']);
                                    ?>";
                var url = "<?php echo $base_url; ?>/updateForms/showAllForms.php?patient_id=" + patient_id +
                    "&patient_name=" + encodeURIComponent(patient_name);
                $("#content").load(url);

            })
        });
    </script>
    <script>
        $(function() {
            $('#submit').click(function(e) {
                e.preventDefault()
                console.log("submit clicked")
                var id = <?php
                            $userid = $_SESSION['userlogin']['id'];
                            echo $userid
                            ?>;
                var name = $('#name').val();
                var surname = $('#surname').val();
                var age = $('#age').val();
                var not = $('#not').val();
                let form_num = 15;
                var patient_id = <?php
                                    $userid = $_GET['patient_id'];
                                    echo $userid
                                    ?>;
                let patient_name = "<?php
                                    echo urldecode($_GET['patient_name']);
                                    ?>";
                let yourDate = new Date();
                let creationDate = yourDate.toISOString().split('T')[0];
                let updateDate = yourDate.toISOString().split('T')[0];
                let nurse_attempt = $('.form-check-input[name="nurse_attempt"]:checked').map(function() {
                    return this.value;
                }).get().join('/');
                let nurse_education = $('.form-check-input[name="nurse_education"]:checked').map(function() {
                    return this.value;
                }).get().join('/');
                let collaborative_apps = $('.form-check-input[name="collaborative_apps"]:checked').map(function() {
                    return this.value;
                }).get().join('/');
                let noc_indicator = $('.form-check-input[name="noc_indicator"]:checked').val();
		        let noc_indicator_2 = $('.form-check-input[name="noc_indicator_2"]') ? $('.form-check-input[name=noc_indicator_2]:checked').val() : "null";
		        let noc_indicator_3 = $('.form-check-input[name="noc_indicator_3"]') ? $('.form-check-input[name=noc_indicator_3]:checked').val() : "null";
                let noc_indicator_after = $('.form-check-input[name="noc_indicator_after"]:checked').val();
		        let noc_indicator_after_2 = $('.form-check-input[name="noc_indicator_after_2"]') ? $('.form-check-input[name=noc_indicator_after_2]:checked').val() : "null";
		        let noc_indicator_after_3 = $('.form-check-input[name="noc_indicator_after_3"]') ? $('.form-check-input[name=noc_indicator_after_3]:checked').val() : "null";

                $.ajax({
                type: 'POST',
                url: '<?php echo $base_url; ?>/insertTanalar/riskTani15Insert.php',
                data: {
                    table: 'tani19',
                    patient_id: patient_id,
                    patient_name: patient_name,
                    creation_date: creationDate,
                    update_date: updateDate,
                    problem_info: problem_info,
                    nurse_description: nurse_description,
                    noc_output: noc_output,
                    noc_indicator: noc_indicator,
                    noc_indicator_after: noc_indicator_after,
                    noc_indicator_2: noc_indicator_2,
                    noc_indicator_after_2: noc_indicator_after_2,
                    noc_indicator_3: noc_indicator_3,
                    noc_indicator_after_3: noc_indicator_after_3,
                    nurse_attempt: nurse_attempt,
                    nurse_education: nurse_education,
                    collaborative_apps: collaborative_apps,
                    evaluation: evaluation,
                    standalone: $_GET['standalone']
                },
                success: function(data) {
                    console.log("something happened")
                    let url =
                        "<?php echo $base_url; ?>/taniReview/riskTani15Review.php?patient_id=" +
                        patient_id + "&patient_name=" + encodeURIComponent(
                            patient_name);
                            $("#tick-container").fadeIn(800);
                            // Change the tick background to the animated GIF
                            $("#tick").css("background-image", "url('./check-2.gif')");

                            // Delay for 2 seconds (adjust the duration as needed)
                            setTimeout(function() {
                            // Load the content
                            $("#content").load(url);
                            $("#tick-container").fadeOut(600);
                            // Hide the tick container
                            }, 1000);
;
                },
                error: function(data) {
                    console.log(data)
                }
            });
            })
        });
    </script>

</body>

</html>