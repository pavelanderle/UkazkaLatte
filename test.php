<?php 

    require_once("src/latte.php");
    $latte = new Latte\Engine;

    $latte->setTempDirectory('temp');
    
    $params = [
        'items1' => ['one', 'two', 'three'],
        'items2' => 'apple',
        'ovoce' => 'jablko',
        'rezervace' => true,
        '$objednavka' => ['sluchátka','procesor','monitor','case','kamera','klavesnice'],
    ];
    
    // kresli na výstup
    $latte->render('template/template1.latte', $params);

?>