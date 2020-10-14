<?php 

    require_once("src/latte.php");
    $latte = new Latte\Engine;

    $latte->setTempDirectory('temp');
    
    $params = [
        'items1' => ['one', 'two', 'three'],
        'items2' => 'apple',
    ];
    
    // kresli na výstup
    $latte->render('template/template1.latte', $params);

?>