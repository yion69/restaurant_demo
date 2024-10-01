<?php

    require_once "/xampp/htdocs/C0S_108_Assignment/vendor/autoload.php";

    define("GOOGLE_CLIENT_ID",'30336252135-e49e2dimeipauoabf6m4df1tq5n7io8g.apps.googleusercontent.com');
    define("GOOGLE_CLIENT_SECRET", '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');
    define("GOOGLE_REDIRECT_URL", 'http://localhost/C0S_108_Assignment/pages/Login/test.php');


    $client = new Google\Client();
    $client -> setApplicationName("Client_Library_Example");
    $client -> setClientId("GOOGLE_CLIENT_ID");
    $client -> setClientSecret("GOOGLE_CLIENT_SECRET");
    $client -> setRedirectUri("GOOGLE_REDIRECT_URL"); 
    
    // $oauth = new Google\Service\;
?>
