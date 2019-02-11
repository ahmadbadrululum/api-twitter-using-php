<?php

require "vendor/autoload.php";
    use Abraham\TwitterOAuth\TwitterOAuth;
    
    
    define('CONSUMER_KEY', 'GWeQMCss3w6HGUGICb7SLs1bz');
    define('CONSUMER_SECRET', 'BafovJ1SYSPADEysxX6cQg9Qec3prQoFZFUzuWjK3hoejKKuSr' );
    $access_token = '1053876362-kVMwrqX6AnkrQUoTTslAnnwda2qQTB7N3B93pA3';
    $access_token_secret = 'B8qG04ehJwG57fznIjiguMYflp3FqrtvIEbkpfhof52Al';
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token,$access_token_secret);
  
  
    // ========= get data profile 
    // $content = $connection->get("account/verify_credentials");

    // ========= get feed tweet home;
    // $statuses = $connection->get("statuses/home_timeline", ["count" => 2, "exclude_replies" => true]);
    
    // ========= verifikasi oauth 
    // $access_token1 = $connection->oauth("oauth/access_token", ["oauth_verifier" => "1053876362-kVMwrqX6AnkrQUoTTslAnnwda2qQTB7N3B93pA3"]);

    // ======== get data serching
    // $statuses = $connection->get("search/tweets", ["q" => "twitterapi"]);    

    // ======== make posting tweet 
    // $statues = $connection->post("statuses/update", ["status" => "testing API twitter with php 2"]);



    // $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
    $media1 = $connection->upload('media/upload', ['media' => '/var/www/html/cms-akurat/images/banner/1.gif']);
    // die(var_dump($media1));
    // $media2 = $connection->upload('media/upload', ['media' => '/var/www/html/api-twitter/images/watermark.png']);
    $parameters = [
        'status' => 'testing tweet and upload file using API Twitter',
        'media_ids' => implode(',', [$media1->media_id_string])
    ];
    $result = $connection->post('statuses/update', $parameters);
    var_dump($result);
