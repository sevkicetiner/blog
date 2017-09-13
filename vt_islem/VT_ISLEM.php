<?php




$vt= new mysqli(".....",".....",".....","....");//zW2o6HeCyBYJeU7h
$vt->set_charset("UTF8");



function tumunuAl() {
    global $vt;
    $ham=$vt->query("SELECT * FROM myBlog ORDER BY ID DESC");
    $bloglar=$ham->fetch_all(1);
    
    return $bloglar;
}


function tekBlogCek($id) {
    global $vt;
    $ham=$vt->query("SELECT * FROM myBlog WHERE ID='$id'");
    $blog=$ham->fetch_assoc();
    
    return $blog;
}

function blogInsert(){
    global $vt;
    
        $yazar=$POST["isim"];
        $konu= htmlentities($_POST["konu"],ENT_QUOTES);
        $icerik= htmlentities($_POST["icerik"],ENT_QUOTES);
        $mail=$_POST["mail"];
        $resim=$_POST["resim"];
        $tarih= date('d.m.Y H:i:s', time());
    
    $vt->real_query("INSERT INTO myBlog (KONU, ICERIK,YAZAR,TARIH,MAIL,RESIM) VALUES('$konu','$icerik','$yazar','$tarih','$mail','$resim')")
            or die("yeni blog veri tabanina kaydedilirken hata olustu..<br />".$vt->error);
    return $vt->insert_id;
}
