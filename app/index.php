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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/appStyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        
    </head>
   <body>
     <nav id="fb-nav">
        <div class="fb-button">
            <p>Facebook</p>
        </div>
        <i class="fa fa-user icon" aria-hidden="true"></i>
        <div class="fb-button2">
            <a href=" <?php echo $loginUrl ?> ">login</a>
        </div>
        
    </nav>
    <div id="titleOne">
        <p>wat is jou talent ?</p>
    </div>
    <div id="explainSection">
        <div id="explainOne">
            <p>In deze app ga je een <span>quiz</span> maken</p>
        </div>
        <div id="explainTwo">
            <p>Dankzij deze quiz kunnen <span>wij</span> samen met jou,<br>erachter komen wat jou talent is!</p>
        </div>
    </div>
    <div class="clear"></div>
    <div id="continueButton">
        <a href="views/questionTemplate.php">Doe De Quiz</a>
    </div>
    
     <footer class="footer">
        <p>&copy; All rights reserved | Project by <a href="http://ma-web.nl">Mediacollege Amsterdam</a></p>
    </footer>
    
    <script src="logic/JS/app-ageHandler.js"></script>
    <script src="logic/JS/httpRunner.js"></script>
</body>
 </html>
