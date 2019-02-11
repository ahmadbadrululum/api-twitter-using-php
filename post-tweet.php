


<?php
// die('hard');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
       <?php

       require "vendor/autoload.php";
       use Abraham\TwitterOAuth\TwitterOAuth;
       
       
       define('CONSUMER_KEY', 'GWeQMCss3w6HGUGICb7SLs1bz');
       define('CONSUMER_SECRET', 'BafovJ1SYSPADEysxX6cQg9Qec3prQoFZFUzuWjK3hoejKKuSr' );
       $access_token = '1053876362-kVMwrqX6AnkrQUoTTslAnnwda2qQTB7N3B93pA3';
       $access_token_secret = 'B8qG04ehJwG57fznIjiguMYflp3FqrtvIEbkpfhof52Al';
       $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
    
    //    $content = $connection->get("account/verify_credentials");
       
    // $status = 'This is a test tweet using api twitter. https://akurat.co'; //text for your tweet.
    //    $post_tweets = $connection->post("statuses/update", ["status" => $status]);
    //    // die(print_r($content));
    //    if ($post_tweets == true) {
    //        echo "success tweet";
    //    }else{
    //        echo "failed tweet";
    //    }
       
    
        if(isset($_POST['submit'])) {

            $linkData = [
                'message' => $_POST['msg'],
                ];

            $post_tweets = $connection->post("statuses/update", ["status" => $linkData]);
            if ($post_tweets) {
                echo '<script language="javascript">';
                echo 'alert("message successfully sent")';
                echo '</script>';
            }else{
                echo '<script language="javascript">';
                echo 'alert("message failed sent")';
                echo '</script>';
            }
     }
    ?>



        <h1>post tweet on twitter using Twitter API's with php </h1>
        <form class="form-horizontal" method="post">
        
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="formGroupInputSmall">Message : </label>
                <div class="col-sm-4">
                    <input class="form-control"  type="textarea" id="msg" name="msg" placeholder="post on facebook">
                </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label" for="formGroupInputSmall"></label>     
               <div class="col-sm-4">
                  <input type="submit" class="btn btn-success" value="submit" name="submit">
                </div>
            </div>
        </form>
    </div>
</body>



</html>