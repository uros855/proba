<?php

//echo("Pozdrav");

$proizvodi = array(
    array(
        'id'=>1,
        'naziv'=>'Laptop',
        'cena'=>1000
    ),
    array(
        'id'=>2,
        'naziv'=>'Mis',
        'cena'=>30
    ),
    array(
        'id'=>3,
        'naziv'=>'Tastatura',
        'cena'=>100
    )
);

session_start();

if(!isset($_SESSION['ukupno'])){
    $_SESSION['ukupno'] = 0;
}

if(isset($_POST['submit']) && $_POST['submit'] == 'Kupi'){
    $prID = $_POST['id'];
    foreach($proizvodi as $pr){
        if($pr['id'] == $_POST['id']){
            $_SESSION['ukupno'] += $pr['cena'];
        }
    }

}

if(isset($_GET['vidi_korpu'])){
    include "korpa.php";
    exit();
}

include "katalog.php";