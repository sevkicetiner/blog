<h3>Yeni Blog</h3>

<div class="row " style="margin: 30px">
    <form class="col s12" action="?url=blogKayit" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input  id="first_name" type="text" name= "isim" class="validate">
                    <label for="first_name">Isim Soyisim</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" name="tarih" class="validate">
                    <label for="last_name">Tarih</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="konu" type="text" name="konu" class="validate">
                    <label for="konu">Konu</label>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <input id="icerik" type="text" name="icerik" class="validate">
                    <label for="icerik">Icerik</label>
            </div>
        </div>
        
            <div class="file-field input-field">
                <div class="btn">
                    <span>Resim</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" name="resim" type="text">
                </div>
            </div>    


            <div class="row">
                <div class="col s12">

                    <div class="input-field inline">
                        <input id="email" type="email" name="mail" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>

                    <button class="btn waves-effect waves-light right" type="submit" >Yayinla..
                        <i class="material-icons  right">send</i>
                    </button>

                </div>
            </div>



        </form>
</div>


<script>
    $(document).ready(function () {
        Materialize.updateTextFields();
    });

</script>

<?php
$isim = $_GET["isim"];
echo $isim;

