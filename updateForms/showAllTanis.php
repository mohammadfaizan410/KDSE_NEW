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
        <?php
        require_once('../config-students.php');
        $userid = $_SESSION['userlogin']['id'];
        //echo $_GET['patient_id'];
        $sql = "SELECT * FROM  patients  WHERE id =" . $_GET['patient_id'];
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        $values = [];
        if ($result) {
            $values = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };

        ?>
        <div class="send-patient">
        <span class='close closeBtn' id='closeBtn1'>&times;</span>
            <div class="patients-table text-center rounded p-4" id="patients-table">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <p style="color : #333333; font-size: 20px" class="pb-2">Tani list</p>

                </div>

                <div class="table-responsive">
                <input type="text" id="searchInput" class='form-control mb-5' placeholder="Tani Ad/numara göre ara">

                    <table class="table text-start align-middle table-hover mb-0" id='dataTable'>
                        <thead>
                            <tr class="darkcyan table-head">
                                <th scope="col" style="font-weight : bold; font-size: large;"></th>
                            </tr>
                            <tr><td><div class="mt-3 entered-forms align-items-center"><a class="nav-items review btn btn-success w-50 p-3" style="color : white;"
                               href="<?php echo $base_url; ?>/tanılar/tani1.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı1</a><div></td><t/r>
                          <tr><td> <div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" style="color : white;" 
                                  href="<?php echo $base_url; ?>/tanılar/tani2.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı2</a>
                            </div></td><t/r>

                            <tr><td> <div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" style="color : white;" 
                                  href="<?php echo $base_url; ?>/tanılar/tani3.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı3</a>
                            </div></td><t/r>

                            <tr><td> <div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" style="color : white;" 
                                  href="<?php echo $base_url; ?>/tanılar/tani4.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı4</a>
                            </div></td><t/r>

                            <tr><td> <div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" style="color : white;" 
                                  href="<?php echo $base_url; ?>/tanılar/tani5.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı5</a>
                            </div></td><t/r>

                            <tr><td> <div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" style="color : white;" 
                                  href="<?php echo $base_url; ?>/tanılar/tani6.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı6</a>
                            </div></td><t/r>

                            <tr><td> <div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" style="color : white;" 
                                  href="<?php echo $base_url; ?>/tanılar/tani7.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı7</a>
                            </div></td><t/r>

                            <tr><td> <div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" style="color : white;" 
                                  href="<?php echo $base_url; ?>/tanılar/tani8.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı8</a>
                            </div></td><t/r>

                            <tr><td> <div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" style="color : white;" 
                                  href="<?php echo $base_url; ?>/tanılar/tani9.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı9</a>
                            </div></td><t/r>

                            <tr><td> <div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" style="color: white;" 
                                  href="<?php echo $base_url; ?>/tanılar/tani10.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı10</a>
                            </div></td><t/r>

                            <tr><td> <div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" 
                                  href="<?php echo $base_url; ?>/tanılar/tani11.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı11</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" 
                                  href="<?php echo $base_url; ?>/tanılar/tani12.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı12</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" 
                                  href="<?php echo $base_url; ?>/tanılar/tani13.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı13</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" 
                                  href="<?php echo $base_url; ?>/tanılar/tani14.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı14</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" 
                                  href="<?php echo $base_url; ?>/tanılar/tani15.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı15</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" 
                                  href="<?php echo $base_url; ?>/tanılar/tani16.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı16</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" 
                                  href="<?php echo $base_url; ?>/tanılar/tani17.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı17</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" 
                                  href="<?php echo $base_url; ?>/tanılar/tani18.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı18</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3" 
                                  href="<?php echo $base_url; ?>/tanılar/tani19.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı19</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani20.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı20</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani21.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı21</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani22.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı22</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani23.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı23</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani24.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı24</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani25.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı25</a>
                            </div></td><t/r>
                            
                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani26.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı26</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani27.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı27</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani28.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı28</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani29.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı29</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani30.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı30</a>
                            </div></td><t/r>
                            
                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani31.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı31</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani32.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı32</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani33.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı33</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/tani34.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı34</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani1.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı35</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani2.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı36</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani3.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı37</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani4.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı38</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani5.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı39</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani6.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı40</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani7.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı41</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani8.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı42</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani9.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı43</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani10.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı44</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani11.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı45</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani12.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı46</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani13.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı47</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani14.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı48</a>
                            </div></td><t/r>

                            <tr><td><div class="mt-3 entered-forms"><a class="nav-items review btn btn-success w-50 p-3"
                                  href="<?php echo $base_url; ?>/tanılar/riskTani15.php?patient_id=<?php echo $_GET['patient_id']; ?>&patient_name=<?php echo $_GET['patient_name']; ?>&standalone=0&root=''&parent=''">Tanı49</a>
                            </div></td><t/r>
                           </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
       
                var patient_id = "<?php echo $_GET['patient_id']; ?>";
                 var patient_name = "<?php echo $_GET['patient_name']; ?>";
            
            $(function() {
                $("a.nav-items").on("click", function(e) {
                    e.preventDefault();
                    $("#content").load(this.href);
                });
            });
            $(function() {
                $("#closeBtn1").on("click", function(e) {
                    var url =
                        "<?php echo $base_url; ?>/updateForms/formOptions.php?patient_id=" +
                        patient_id + "&patient_name=" + encodeURIComponent(
                            patient_name);
                    e.preventDefault();
                    $("#content").load(url);
                });
            });

            
        </script>
                    <script>
          var input = document.getElementById("searchInput");
var table = document.getElementById("dataTable");

input.addEventListener("input", function() {
  var filter = input.value.toLowerCase().trim();

  for (var i = 1; i < table.rows.length; i++) {
    var row = table.rows[i];
    var name = row.cells[0].getElementsByTagName("a")[0].textContent.toLowerCase();

    if (name.includes(filter)) {
      row.style.display = "";
    } else {
      row.style.display = "none";
    }
  }
});
            </script>
</body>

</html>