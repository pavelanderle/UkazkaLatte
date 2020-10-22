<?php
    require_once("src/latte.php");
    $latte = new Latte\Engine;

    $latte->setTempDirectory('temp');

    /* hodnoty z formuláře */
    $stupen = $_GET["stupen"];
    $pocetPiv = $_GET["pocetpiv"];
    
    /* vypocty */
    // todo
    
    /* vypoctene hodnoty */
    $params = [
        
    ];
    
    // kresli na výstup
    $latte->render('template/calTemplate.latte', $params);
    ?>
