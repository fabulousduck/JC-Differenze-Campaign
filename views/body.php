<?php
    $language = $_GET['lang'] ?: "ENG";
    define("LANG",$language);
?>

<div class="container">
    <div id="nav1"></div>
    <div class="containerAbout" id="about">
        <div class="headingTitle"><h1>about</h1></div>
        <div class="whoAreWe">
            <div class="icon"><i class="fa fa-users"></i></div>
            <div class="title"><h1><?php echo infoTitleDataGrep(LANG)[0]; ?></h1></div>
            <div class="text">
                <p>
                    <?php echo infoContentDataGrep(LANG)[0]; ?>
                </p>
            </div>
            <div class="button"><a class="hvr-bounce-to-top" href="#">More Info</a></div>
        </div>
        
            <div class="whyAreWe">
            <div class="icon"><i class="fa fa-wheelchair"></i></div>
            <div class="title"><h1><?php echo infoTitleDataGrep(LANG)[1]; ?></h1></div>
            <div class="text">
                <p>
                    <?php echo infoContentDataGrep(LANG)[1]; ?>
                </p>
            </div>
            <div class="button"><a class="hvr-bounce-to-top" href="#">More Info</a></div>
        </div>
        
            <div class="whatAreWe">
            <div class="icon"><i class="fa fa-cogs"></i></div>
            <div class="title"><h1><?php echo infoTitleDataGrep(LANG)[2]; ?></h1></div>
            <div class="text">
                <p>
                    <?php echo infoContentDataGrep(LANG)[2]; ?>
                </p>
            </div>
            <div class="button"><a class="hvr-bounce-to-top" href="#">More Info</a></div>
        </div>
        
            <div class="whereAreWe">
            <div class="icon"><i class="fa fa-mobile"></i></div>
            <div class="title"><h1><?php echo infoTitleDataGrep(LANG)[3]; ?></h1></div>
            <div class="text">
                <p>
                   <?php echo infoContentDataGrep(LANG)[3]; ?>
                </p>
            </div>
            <div class="button"><a class="hvr-bounce-to-top" href="#">More Info</a></div>
        </div>
    </div> <!--end containerAbout-->

<div id="nav2"></div>
    <div class="containerPreview" id="preview"> 
        <div class="headingTitle"><h1>preview</h1></div>
        
        <div class="textPreviewLeft">
            <div class="title"><?php echo previewTitleDataGrep(LANG)[0]; ?></div>
            <img src="img/iMac.png"></img>
            <div class="textLeft">
                <p>
                    <?php echo previewContentDataGrep(LANG)[0]; ?>
                </p>
            </div>
        </div>
        <div class="textPreviewRight">
            <div class="title"><?php echo previewTitleDataGrep(LANG)[1]; ?></div>
            <img src="img/iPhone.png"></img>
            <div class="textRight">
                <p>
                    <?php echo previewContentDataGrep(LANG)[1]; ?>        
                </p>
            </div>
        </div>
        
    </div><!--End containerPreview-->
    
 
<div id="nav3"></div>    
    <div class="containerSignup">
        
        <div class="headingTitleSignup" id="sign-up"><h1>Sign Up</h1></div>
        <div class="openContainerButton"><i class="fa fa-arrow-circle-down"></i></div>
        
        <div class="openContainer">
            
            <div class="signUpForm">
                <form action="index.html" method="post">

                    
                    <div class="leftForm">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="user_name">
                          
                        <label for="mail">Email:</label>
                        <input type="email" id="mail" name="user_email">
                          
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="user_password">
                        <label for="password">Confirm password:</label>
                        <input type="password" id="password" name="user_password">
                          
                        <label for="phone">Phone:</label>
                        <input type="tel" id="phone" name="user_phone">
                    </div>
                
                    <div class="rightForm">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="user_address">
                          
                        <label for="zipcode">Zipcode:</label>
                        <input type="text" id="zipcode" name="user_zipcode">
                          
                        <label for="country">Country:</label>
                        <input type="text" id="Country" name="user_country">
                          
                        <label for="language">Language:</label>
                        <select id="langauge" name="user_language">
                                <option value="dutch">Dutch</option>
                                <option value="russian">Russian</option>
                                <option value="spanish">Spanish</option>
                                <option value="english">English</option>
                        </select>
                          
                        <label for="birth">Birthday:</label>
                        <input type="date" id="birth" name="user_birth" value="01-12-1983">
                    </div>
                    
                </form>  
                
                <div class="centerItems">
                    <div class="submitButton"><button type="submit">Sign up</button></div>
                    By submitting this form you agree to Bemika Software's <a href="">Terms of Use</a>.
                </div>
            </div>
        
        </div>
        
    </div><!--end containerSignup-->

<div id="nav5"></div>
       <div class="containerLanguage" id="languages">
        
        <div class="headingTitle"><h1>Available in:</h1></div>
                
                <ul class="listLanguage">
                    <li><img src="img/languages/nederlands.png"></img></li>
                    <li><img src="img/languages/servisch.png"></img></li>
                    <li><img src="img/languages/spaans.jpg"></img></li>
                    <li><img src="img/languages/UK-engels.png"></img></li>
                </ul>
        
    </div>
    
    
</div> <!--end container-->