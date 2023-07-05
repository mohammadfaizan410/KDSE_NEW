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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KDSE-BPYS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
</head>

<body style="background-color:white">
    
<div class="container-fluid pt-4 px-4">

    <div class="patients-table text-center rounded p-5" id="patients-table" style='aspect-ratio : 4/2'>
        <span class='close closeBtn' id='closeBtn1'>&times;</span>
        <div class='row'>
        <div class='col-lg-6' style="font-weight : bold; font-size: large;">
        Patient:<?php echo $_GET['patient_name'] ?>
            </div>
            
            <div class='col-lg-6' style="font-weight : bold; font-size: large;">
            ID:<?php echo $_GET['patient_id'] ?>
            </div>
</div>
    <div class='patient-details'>
        <h2 class='pb-5'>Tanilar</h2>
        <div class='row pt-5 pb-3 border-bottom justify-content-center'>
  <div class='col-lg-3 btn btn-success m-3' id='showAllTanis'>
    <a >Submit a Tani</a>
  </div>
  <div class='col-lg-3 btn btn-success m-3' id='showSystemGeneratedTanis'>
    <a >System Generated Tanis</a>
  </div>
  <div class='col-lg-3 btn btn-success m-3' id='showSubmittedTanis'>
    <a>Show tanis</a>
  </div>
</div>
</div>
</div>
        <script>      
            var patient_id = "<?php echo $_GET['patient_id']; ?>";
            var patient_name = "<?php echo $_GET['patient_name']; ?>";
            $('#showAllTanis').click(function() {
                var url = "<?php echo $base_url; ?>/updateForms/showAllTanis.php?patient_id=" +
                        patient_id + "&patient_name=" + encodeURIComponent(patient_name); 
                $("#content").load(url);
            });
            $('#showSubmittedTanis').click(function() {
                var url = "<?php echo $base_url; ?>/updateForms/showSubmittedTanis.php?patient_id=" +
                        patient_id + "&patient_name=" + encodeURIComponent(patient_name); 
                $("#content").load(url);
            });
            $('#showSystemGeneratedTanis').click(function() {
                var url = "<?php echo $base_url; ?>/updateForms/showSystemGeneratedTanis.php?patient_id=" +
                        patient_id + "&patient_name=" + encodeURIComponent(patient_name); 
                $("#content").load(url);
            });
            $(function() {
                
                $("#closeBtn1").on("click", function(e) {
                    e.preventDefault();
                    var url =
                        "<?php echo $base_url; ?>/updateForms/allOptions.php?patient_id=" +
                        patient_id + "&patient_name=" + encodeURIComponent(
                            patient_name);
                    $("#content").load(url);
                });
            });   
        </script>
</body>

</html>