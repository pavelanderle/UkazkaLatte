<?php 

    require_once("src/latte.php");
    $latte = new Latte\Engine;

    $latte->setTempDirectory('temp');
    
    if (isset($_GET["height"])) {
        $bmi = $_GET["width"]/($_GET["height"]*$_GET["height"]);
    }
    else{
        $bmi = 0;
    }
    
    $params = [
        'bmi' => $bmi,
    ];
    
    // kresli na výstup
    $latte->render('template/bmiTemplate.latte', $params);

?>