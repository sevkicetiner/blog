<?php

function blogGoster() {
   
    
    $id=$_GET["id"];
   
    $blog= tekBlogCek($id);
    sayfaGosterOzel("blogGoster.php", "Blog",  $blog);
    //sayfa_goster("./gorunum/ozel/blogGoster.php", $blog);
}

function blogYeni() {
    sayfaGosterOzel("blogYaz.php", "Yeni Blog");
    //sayfa_goster("./gorunum/ozel/blogYaz.php","yeni blog yaz..");
}

function blogKayit() {
    include './vt_islem/TV_ISLEM.php';
    
    if (!empty($_POST["konu"])&&!empty($_POST["icerik"])&&!empty($_POST["mail"])) {
         
        $id = blogInsert();
        blogGoster($id);
    }
 
}

