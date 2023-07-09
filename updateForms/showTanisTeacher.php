<?php
session_start();
$base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/Hacettepe-KDSE-BPYS';

if (!isset($_SESSION['userlogin'])) {
    header("Location: main.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header("Location: main.php");
}

$taniNames = array(
    1 => 'Gaz değişiminde bozulma',
    2 => 'Etkisiz solunum örüntüsü',
    3 => 'Etkisiz hava yolu temizliği ',
    4 => 'Sıvı volüm eksikliği',
    5 => 'Sıvı volüm fazlalığı',
    6 => 'Etkisiz periferik doku perfüzyonu',
    7 => 'Akut ağrı',
    8 => 'Kronik ağrı',
    9 => 'İdrar boşaltımında bozulma',
    10 => 'İshal',
    11 => 'Konstipasyon',
    12 => 'Dengesiz beslenme: Beden gereksiniminden az beslenme',
    13 => 'Fazla kilo',
    14 => 'Obezite',
    15 => 'Oral mukoz membranda bozulma',
    16 => 'Uyku örüntüsünde bozulma',
    17 => 'Konforda bozulma',
    18 => 'Fiziksel mobilitede bozulma',
    19 => 'Aktivite intoleransı',
    20 => 'Yorgunluk',
    21 => 'Bulantı',
    22 => 'Hipertermi',
    23 => 'Hipotermi',
    24 => 'Banyo yapmada öz bakım yetersizliği',
    25 => 'Beslenmede öz bakım yetersizliği',
    26 => 'Beslenmede öz bakım yetersizliği',
    27 => 'Giyinmede öz bakım yetersizliği',
    28 => 'Tuvalet ihtiyacını karşılamada öz bakım yetersizliği',
    29 => 'Deri bütünlüğünde bozulma',
    30 => 'Doku bütünlüğünde bozulma',
    31 => 'Sözel iletişimde bozulma',
    32 => 'Umutsuzluk',
    33 => 'Boş zaman aktivitelerinde yetersizlik',
    34 => 'Etkisiz sağlık yönetimi',
    35 => 'Anksiyete',
    36 => 'Kanama riski',
    37 => 'Düşme riski',
    38 => 'Enfeksiyon riski',
    39 => 'Aspirasyon riski',
    40 => 'Travma riski',
    41 => 'Oral mükoz membranda bozulma riski',
    42 => 'Elektrolit dengesizliği riski',
    43 => 'Sıvı volüm eksikliği riski',
    44 => 'Alerjik yanıt riski',
    45 => 'Vücut sıcaklığında dengesizlik riski',
    46 => 'Kan şekeri düzeyinde dengesizlik riski',
    47 => 'Gastrointestinal motilitede bozulma riski',
    48 => 'Deri bütünlüğünde bozulma riski',
    49 => 'Doku bütünlüğünde bozulma riski'
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KDSE-BPYS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">

    <!-- Template Stylesheet -->

</head>

<body style="background-color:white">
    <div class="container-fluid pt-4 px-4">
    <span class='close closeBtn' style='margin-right : 20px; margin-bottom: 20px' id='closeBtn1'>&times;</span>

        <?php
        require_once('../config-students.php');
        $userid = $_SESSION['userlogin']['id'];
        $patientId = $_GET['patient_id'];
        $sql = "SELECT * FROM tani WHERE patient_id = " . $patientId . " and root_id = 0 ORDER BY tani_num";
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        if ($result) {
            $allTanisStandalone = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
            $count = count($allTanisStandalone);
        } else {
            echo 'error';
            $count = 0;
        }

        ?>
        <div class="send-patient">
        <div class="d-flex align-items-center justify-content-between mb-2">
                    <p style="color : #333333; font-size: 20px" class="pb-2">Tani Listesi</p>
                    <p style="color : #333333; font-size: 20px" class="pb-2">Hasta: <?php echo $_GET['patient_name']?></p>
                </div>
           
            <div class="patients-table text-center rounded p-4" id="patients-table">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <p style="color : #333333; font-size: 20px" class="pb-2">Sunulan Tanı</p>

                </div>

                <input type="text" id="searchInput" class='form-control mb-5' placeholder="Search by date, number, time">
<div id='taniContainer'>                
                <?php
$i = 1;
foreach ($allTanisStandalone as $row) {
    $sql = "SELECT * FROM tani WHERE root_id = " . $row['tani_id'] . " ORDER BY tani_id";
    $smtmselect = $db->prepare($sql);
    $result = $smtmselect->execute();
    if ($result) {
        $allExtensionTanis = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo 'error';
    }
    $taniOptions = "<div class='row searchable'><div class='col-lg-12 btn btn-success mb-2 '><li class='entered-forms-ul-li'><a class='nav-items d-sm-flex justify-content-around' style='color: white;'
                        href='" . $base_url . "/taniReview/tani" . $row['tani_num'] . "-review.php?patient_id=" . $row['patient_id'] . "&patient_name=" . $row['patient_name'] . "&evaluation=" . $row['evaluation'] . "&tani_id=".$row['tani_id']."&tani_num=".$row['tani_num']."&root_id=".$row['root_id']."&parent_id=".$row['parent_id']."&display=0&student_id=".$_GET['student_id']."&student_name=".$_GET['student_name']."'><div>tani" . $row['tani_num'] . " </div><div>Date:".$row['creation_date']."</div><div>Time:".$row['time']."</div></a></li></div></div>";


    foreach ($allExtensionTanis as $row2) {
        $taniOptions .= "<div class='row searchable'><div class='col-lg-12 btn btn-success mb-2'><li class='entered-forms-ul-li'><a class='nav-items d-sm-flex justify-content-around mb-2' style='color: white;'
                            href='" . $base_url . "/taniReview/tani" . $row2['tani_num'] . "-review.php?patient_id=" . $row2['patient_id'] . "&patient_name=" . $row2['patient_name'] . "&evaluation=" . $row2['evaluation'] . "&tani_id=".$row2['tani_id']."&tani_num=".$row2['tani_num']."&root_id=".$row2['root_id']."&parent_id=".$row2['parent_id']."&display=0&student_id=".$_GET['student_id']."&student_name=".$_GET['student_name']."'><div>tani" . $row2['tani_num'] . " </div><div>Date:".$row2['creation_date']."</div><div>Time:".$row2['time']."</div></a></li></div></div>";
    }

    if ($allExtensionTanis){
        $lastExtension = end($allExtensionTanis);
    } else {
        $lastExtension = $row;
    }
    echo '<div class="row mb-3 mt-2">';
    echo "<div class='root-tani col-lg-12 '>";
    echo "<button class='entered-forms btn btn-success m-auto align-items-center d-flex justify-content-around m-2' id='tani".$i."_toggle'><div>Tani: " . $taniNames[$row['tani_num']] . "</div><div>Date:".$lastExtension['creation_date']."</div><div>Time:".$lastExtension['time']."</div><div><span id='tani".$i."_caret'>&#9660;</span></div></button>";
    echo "<ul class='entered-forms-ul align-items-center w-75 mt-3 m-auto' id='tani".$i."_options' style='display:none; list-style-type: none;'>".$taniOptions."</ul>";
    echo "</div>";
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-lg-6" id="tani'.$row['tani_id'].'" style="display: none">';
    echo '</div>';
    echo '</div>';
    $i++;
}

?>
</div>
            </div>
        </div>
        <script>
       
            
            $(function() {
                
                var patient_id = "<?php echo $_GET['patient_id']; ?>";
                 var patient_name = "<?php echo $_GET['patient_name']; ?>";
                 var student_id = "<?php echo $_GET['student_id']; ?>";
                 console.log(student_id)
                 $("a.nav-items").on("click", function(e) {
                     e.preventDefault();
                     $("#content").load(this.href);
                    });
                });
                $(function() {
                    
                    var patient_id = "<?php echo $_GET['patient_id']; ?>";
                    var patient_name = "<?php echo $_GET['patient_name']; ?>";
                    var student_id = "<?php echo $_GET['student_id']; ?>";
                    var student_name = "<?php echo $_GET['student_name']; ?>";
                
                $("#closeBtn1").on("click", function(e) {
                    e.preventDefault();
                    var url =
                        "<?php echo $base_url; ?>/updateForms/showAllPatientsTeacher.php?patient_id=" +
                        patient_id + "&student_id=" + student_id + "&patient_name=" + encodeURIComponent(
                            patient_name) + "&student_name=" + encodeURIComponent(student_name);
                    $("#content").load(url);
                });
            });   
        </script>
        <script>
            $(function(){
                count = <?php echo $count; ?>;
                console.log(count);
                for (let i = 1; i < count + 1; i++) {
                    $("button#tani"+i+"_toggle").on("click", function(e) {
                        e.preventDefault();
                        $("#tani"+i+"_options").slideToggle('slow');
                        $("#tani"+i+"_add_extension").css('display','flex');
                        if($("#tani"+i+"_caret").css("transform") === "none"){
                            $("#tani"+i+"_caret").css("transform", "rotate(180deg)");
                            
                        }
                        else{
                            $("#tani"+i+"_caret").css("transform", "");
                            $("#tani"+i+"_add_extension").css('display','none');
                        }
                    })
                }
            })

            $(document).ready(function() {
        $("#searchInput").on("input", function() {
        var input, filter, container, tanis, i, txtValue;
        input = $(this);
        console.log(input.val());
        filter = input.val().toUpperCase();
        container = $("#taniContainer");
        tanis = container.find(".root-tani");
        for (i = 0; i < tanis.length; i++) {
            txtValue = $(tanis[i]).text();
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                $(tanis[i]).show();
            } else {
                $(tanis[i]).hide();
            }
        }
    });
});
        </script>

</body>

</html>