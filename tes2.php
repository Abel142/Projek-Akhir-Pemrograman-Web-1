<?php
    echo "selamat datang";
    //ini komentar
    $nama = "Altaha";
    $umur = -5;
    $kom = "B";

    echo "<br>Nama saya adalah $nama. <h1>Saya berumur ".($umur*2).".</h1>"." saya berada di dalam kom $kom";
    echo "<br>";

    if($umur<=5 and $umur>=0){
        $tahap = "Balita";
    }
    else if ($umur>=6 and $umur<=16){
        $tahap = "Anak-anak";
    }
    else if ($umur>=17 and $umur<=20){
        $tahap = "Remaja";
    }
    else if ($umur>=21 and $umur<=50){
        $tahap = "dewasa";
    }
    else if ($umur>=51 and $umur<=80){
        $tahap = "tua";
    }
    else{
        $tahap = "tidak terdefinisi";
    }
    echo "<br>";
    echo $tahap;
    echo "<br>";

    $makanan = "lontong";

    switch($makanan){
        case "sate":
        case "lontong":
            echo "makanan berkuah";
            break;
        case "donat":
            echo "makanan kering";
            break;
        default:
            echo "tidak tau";
    }

    for($i=0;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }

$dunia = array("Indonesia"=>"Jakarta", "USA"=>"Washington DC", "India"=>"Delhi", "Inggris"=>"London");

    foreach($dunia as $negara => $ibukota){
        echo "Ibu kota dari negara $negara adalah $ibukota.<br>";
    }


function luassegitiga($alas, $tinggi){
        $luas = 0.5*$alas*$tinggi;
        return $luas;
    }

    echo "Luas segitiga adalah ".luassegitiga(8,15);
