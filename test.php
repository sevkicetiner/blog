<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
include './twitteroauth/twitteroauth.php';

$consumer_key="q6YK5rhpaX4kaSkS8TNr0VlbL";
$consumer_secret="zqCPx61AOPzwepuNpZgkPtwxkm3fTpsXd5A59l8kXl3XoeqHsn";


$access_token="3133576766-OmdMEci02trjowJYzfJ3h9Pv3jTcqx0QNsIB2PC";
$access_token_secret="yiDVqsE4AqSPJZVFNhkuwJBP2gWaKfKrHIwKuhvckGkFW";

$twitter=new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
$tweets=$twitter->get("https://api.twitter.com/1.1/search/tweets.json?q=%23sondakika&result_type=popular&count=20"); //%23=#   ondan sonraki parametre de hastag 

?>


        <?php  
        include './gorunum/genel/header.php';
        
        foreach ($tweets->statuses as $key => $tweet) {?>
<script> var $toastContent = $('<span><?php echo $tweet->text; ?></span>');
  Materialize.toast($toastContent, 5000,'rounded');
  </script>
   <img src="<?php echo $tweet->user->profile_image_url; ?>" ></img> <?php echo $tweet->text; ?> <br>
      <?php  }
      
  include './gorunum/genel/footer.php';
      
        ?>
        
  