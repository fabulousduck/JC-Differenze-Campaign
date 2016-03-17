<?php
    error_reporting(0);
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Remosteps"/>
    <meta name="description" content="Remosteps"/>
    <meta name="author" content="Ryan, Noud, Donovan" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/loginStyle.css" type="text/css"/>
    <link rel="icon" type="image/png" href="../img/favicon.png" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <title>REMOsteps</title>
</head>
<body>
    <div class="containerLogin">
        
        <div class="containerLogo">
            <img src="../img/cloudie.png" class="margin"></img>
            <img src="../img/REMOSTEPS.png"></img>
        </div>
        
    <div class="containerForm">
        
		<h1>Log In </h1>
		
		<form class="form" method="post" action="../logic/PHP/login.php">
		    
			<input type="text" placeholder="Username" name="u_name">
			<input type="password" placeholder="Password" name="u_pwd">
			<button type="submit" id="login-button">Login</button>
			
		</form>
	</div>
        
    </div> <!--end containerPrivacy-->
</body>

<script type="text/javascript">
     $("#login-button").click(function(event){
		 event.preventDefault();
	 
	 $('form').fadeOut(500);
	 $('.wrapper').addClass('form-success');
	 //copy right help
});
</script>