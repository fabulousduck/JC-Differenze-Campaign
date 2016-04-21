<?php

  #index.php

  require_once __DIR__ . '/vendor/autoload.php';

  session_start();

  $fb = new Facebook\Facebook([
  'app_id' => '973224822714418',
  'app_secret' => '6db0d3e7cd1c868f39d20e3d2583ab0c',
  'default_graph_version' => 'v2.5',
  isset($_SESSION['facebook_acces_token'])?$_SESSION['facebook_acces_token']: '973224822714418'
  ]);

  $helper = $fb->getRedirectLoginHelper();
  $permissions = ['email', 'user_likes'];
  $loginUrl = $helper->getLoginUrl('http://ma.cruxpanel.nl/workspace_3/app/login-callback-2.php', $permissions);




?>

 <html>
    <head>
        <link rel="stylesheet" href="css/appStyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
   <body>
      <?php
         include "views/header.php";
       ?>
    <div id="explainSection">
        <div id="explainOne">
            <i><p>In deze app ga je een quiz maken</p></i>
        </div>
        <div id="explainTwo">
            <i><p>Dankzij deze quiz kunnen wij samen met jou,<br>erachter komen wat jou talent is.</p><i>
        </div>
    </div>
    <a href="views/questionTemplate.php"><div id="continueButton">
        <p>doe de quiz</p>
    </div></a>
    <?php
      include "views/footer.php";
     ?>

    <script src="logic/JS/httpRunner.js"></script>
</body>
 </html>
