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
     <nav id="fb-nav">
        <div class="fltLeft fb-button">
            <p>Facebook</p>
        </div>
        <div class="fltRight fb-button">
            <a href=" <?php echo $loginUrl ?> ">login</a>
        </div>
        <i class="fa fa-user fa-5x fa-inverse fltRight imrgtop" aria-hidden="true"></i>
    </nav>
    <div id="titleOne">
        <i><p>wat is jou talent ?</p></i>
    </div>
    <div id="explainSection">
        <div id="explainOne">
            <i><p>In deze app ga je een quiz maken</p></i>
        </div>
        <div id="explainTwo">
            <i><p>Dankzij deze quiz kunnen wij samen met jou,<br>erachter komen wat jou talent is.</p><i>
        </div>
    </div>
    <div id="continueButton">
        <p>doe de quiz</p>
    </div>
    <script src="logic/JS/app-ageHandler.js"></script>
    <script src="logic/JS/httpRunner.js"></script>
</body>
 </html>
