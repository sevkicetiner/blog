

<?php

error_reporting(E_ALL);

include './kontrolcu/KONTROLCU.php';


$url = $_GET["url"];
if (!empty($url)) {


    switch ($url) {
        case "anasayfa":            kontrolcuMain("anasayfaKontrol.php", "anasayfa");           break;                             
        case "blogGoster":          kontrolcuMain("blogKontrol.php", "blogGoster");             break;
        case "blogYaz"   :          kontrolcuMain("blogKontrol.php", "blogYeni");                break;
        case "blogKayit":           kontrolcuMain("blogKontrol.php", "blogKayit");               break;          //bu bir sayfa degil sadece blogYaz.php den 
                                                                                                                //gelen url i yakalayip fonction calistirmakicin
        case "iletisim":             iletisim();                                                 break;
        
        

        default: hata(); echo "bu url tanimlanamamis";     break;
    }
} else {
    kontrolcuMain("anasayfaKontrol.php", "anasayfa");
    
}

