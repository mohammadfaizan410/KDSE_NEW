<?php
require_once("config-students.php");
?>
<?php

if (isset($_POST["patient_name"])) {
    if(isset($_POST['isUpdate'])){
        $stmt = $db->prepare("UPDATE form9 SET
        patient_name = ?,
        update_date = ?,
        assessed_area = ?,
        edema_severity = ?,
        WHERE form_id = ?");

    $stmt->execute([
        $_POST["patient_name"],
        $_POST["creation_date"],   
        $_POST["assessed_area"],   
        $_POST["edema_severity"],
        $_POST["form_id"],
    ]);
        echo "successfully updated";

        }
    
else{

    $stmt = $db->prepare("INSERT INTO form8 (
                form_num,
                patient_name,
                patient_id,
                creation_date,
                update_date,
                assessed_area,
                edema_severity
            ) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([
    $_POST["form_num"],
    $_POST["patient_name"],
    $_POST["patient_id"],
    $_POST["creation_date"],
    $_POST["update_date"],   
    $_POST["assessed_area"],
    $_POST["edema_severity"] 
]);


echo "Successfully inserted into form7";
}
}

else{
    echo "Error.";
}
?>