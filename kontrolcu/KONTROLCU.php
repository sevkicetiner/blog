
<?php

include './vt_islem/VT_ISLEM.php';
include './gorunum/genel/GORUNUM.php';


function kontrolcuMain($kontrolcuAdi,$fonksiyonAdi) {
    include "./kontrolcu/".$kontrolcuAdi;
    $fonksiyonAdi();
}



function iletisim() {
    sayfaGosterOzel("iletisim.php", "Iletisim");
    //sayfa_goster('./gorunum/ozel/iletisim.php', 'Iletisim');
}



function hata() {
    sayfaGosterGenel("hata.php", 'Hata..',error_reporting(E_ALL));
}
