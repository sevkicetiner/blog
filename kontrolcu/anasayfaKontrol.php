<?php

function anasayfa() { 
    
    $bloglarimiz= tumunuAl();
    
    sayfaGosterOzel("anasayfa.php", "anasayfa", $bloglarimiz);
     //sayfa_goster('./gorunum/ozel/anasayfa.php',$bloglarimiz);
}
