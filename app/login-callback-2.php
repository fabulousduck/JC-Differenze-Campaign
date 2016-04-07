<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();


$fb = new Facebook\Facebook([
'app_id' => '973224822714418',
'app_secret' => '6db0d3e7cd1c868f39d20e3d2583ab0c',
'default_graph_version' => 'v2.5',
isset($_SESSION['facebook_acces_token'])?$_SESSION['facebook_acces_token']: '973224822714418'
]);

$helper = $fb->getRedirectLoginHelper();
try {

  $accessToken = $helper->getAccessToken();
  //in de fb->get haalt de api alle data op over de user die mogelijk is
  $response = $fb->get('/me?fields=id,name,picture',$accessToken);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  $_SESSION['facebook_access_token'] = (string) $accessToken;
  echo "succes!<br>";
}
$user = $response->getGraphUser();
// var_dump($user);
// echo '<br>Name: ' . $user['name'];
// echo "<img src=".$user['picture']['url']." /> ";

 ?>
 
 

