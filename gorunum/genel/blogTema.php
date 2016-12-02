


<div class="col s12 m7">

        <div class="card horizontal">
            <div class="card-image">
                <img src="<?php echo $blog["RESIM"]; ?>">
            </div>
            <div class="card-stacked">
                <article>
                    
                    <div class="card-content">

                        <header>
                        <h5><?php echo "  " . $blog["KONU"] ?></h5>
                    </header>
                        <p> <?php echo $blog["ICERIK"] ?></p>
                        
                        <footer style="font-size: 10px">
                        <?php echo $blog["TARIH"] ?>
                    </footer>
                    </div>
                    
                </article>
                <div class="card-action">
                    <a href="?url=blogGoster&id=<?php echo $blog["ID"]; ?>">Devamini oku....</a>
                </div>
            </div>
        </div>
    </div>
