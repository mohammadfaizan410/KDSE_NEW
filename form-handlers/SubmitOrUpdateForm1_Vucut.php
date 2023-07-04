
<?php
require_once("../config-students.php");

if (isset($_POST["patient_name"])) {
    
        $stmt = $db->prepare("INSERT INTO vucuduTemizForm1 (
                form_name,
                patient_name,
                patient_id,
                creation_date,
                update_date,
                bathDate,
                bodyCleansingDependence,
                bathingFrequency,
                bathingMethod,
                waterTemperature,
                cleaningProduct,
                hairCleaningProduct,
                afterBathProduct,
                mouthCareFreq,
                mouthCareMethod,
                mouthCareMaterial,
                nailCareFreq,
                nailCareMethod,
                nailCareMaterial,
                handWashingFreq,
                handWashingMethod,
                handWashingMaterial,
                periniumCareMethod,
                periniumCareMaterial,
                periniumCareFreq,
                menstrualDate,
                mensturalTime,
                mensturalProduct,
                mensturalProductReplacement,
                skinColorProblem,
                skinMoisture,
                skinTemperature,
                skinStructure,
                skinAge,
                skinProblem,
                bodyHairStructure,
                hairDistributionProblem,
                scalpHairProblem,
                nailColorProblem,
                nailStructureProblem,
                capillaryFillingProblem
            ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $result = $stmt->execute([
            $_POST["form_name"],
            $_POST["patient_name"],
            $_POST["patient_id"],
            $_POST["creation_date"],
            $_POST["update_date"],
            $_POST["bathDate"],
            $_POST["bodyCleansingDependence"],
            $_POST["bathingFrequency"],
            $_POST["bathingMethod"],
            $_POST["waterTemperature"],
            $_POST["cleaningProduct"],
            $_POST["hairCleaningProduct"],
            $_POST["afterBathProduct"],
            $_POST["mouthCareFreq"],
            $_POST["mouthCareMethod"],
            $_POST["mouthCareMaterial"],
            $_POST["nailCareFreq"],
            $_POST["nailCareMethod"],
            $_POST["nailCareMaterial"],
            $_POST["handWashingFreq"],
            $_POST["handWashingMethod"],
            $_POST["handWashingMaterial"],
            $_POST["periniumCareMethod"],
            $_POST["periniumCareMaterial"],
            $_POST["periniumCareFreq"],
            $_POST["menstrualDate"],
            $_POST["mensturalTime"],
            $_POST["mensturalProduct"],
            $_POST["mensturalProductReplacement"],
            $_POST["skinColorProblem"],
            $_POST["skinMoisture"],
            $_POST["skinTemperature"],
            $_POST["skinStructure"],
            $_POST["skinAge"],
            $_POST["skinProblem"],
            $_POST["bodyHairStructure"],
            $_POST["hairDistributionProblem"],
            $_POST["scalpHairProblem"],
            $_POST["nailColorProblem"],
            $_POST["nailStructureProblem"],
            $_POST["capillaryFillingProblem"]
        ]);
        if ($result) {
            echo "Ekleme Başarılı";
        } else {
            echo "Error: could not inserted!";
        }
    
} else {
    echo "Error: Post data not set!";
}
?>
