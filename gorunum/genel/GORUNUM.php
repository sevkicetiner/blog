<?php

function sayfa_goster($src, $values=null) {
    include './gorunum/genel/header.php';
    include $src;
    include './gorunum/genel/footer.php';
    
}
function sayfaGosterGenel($src,$title,$values=null) {
    include './gorunum/genel/header.php';
    include "./gorunum/genel/".$src;                /// sadece sayfaismini uzantisyla girilebilmesi icin
    include './gorunum/genel/footer.php';
} 

function sayfaGosterOzel($src,$title,$values=null) {
    include './gorunum/genel/header.php';
    include "./gorunum/ozel/".$src;                /// sadece sayfaismini uzantisyla girilebilmesi icin
    include './gorunum/genel/footer.php';
}