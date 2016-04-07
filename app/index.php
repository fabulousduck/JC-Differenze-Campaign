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
   </head>
   <body>
     <nav id="fb-nav">
         <div class="first fb-button">
            <a href=" <?php echo $loginUrl ?> ">login</a>
         </div>
     </nav>
   </body>
 </html>