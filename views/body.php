<?php
    $language = $_GET['lang'] ?: "ENG";
    define("LANG",$language);
?>


<div id="home"></div>
<div class="container">
    
    <div class="containerAbout">
        <div class="headingTitle" id="about"><h1>about</h1></div>
        <div class="whoAreWe">
            <div class="icon"><i class="fa fa-users"></i></div>
            <div class="title"><h1>Who are we?</h1></div>
            <div class="text">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                    ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                    accumsan et iusto odio dignissim qui blandit praesent luptatum
                    zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
            </div>
            <div class="button"><a class="hvr-bounce-to-top" href="#">More Info</a></div>
        </div>
        
            <div class="whyAreWe">
            <div class="icon"><i class="fa fa-wheelchair"></i></div>
            <div class="title"><h1>Why are we?</h1></div>
            <div class="text">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                </p>
            </div>
            <div class="button"><a class="hvr-bounce-to-top" href="#">More Info</a></div>
        </div>
        
            <div class="whatAreWe">
            <div class="icon"><i class="fa fa-cogs"></i></div>
            <div class="title"><h1>What are we?</h1></div>
            <div class="text">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                    ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                    dolor in hendrerit in vulputate velit esse molestie consequat,
                </p>
            </div>
            <div class="button"><a class="hvr-bounce-to-top" href="#">More Info</a></div>
        </div>
        
            <div class="whereAreWe">
            <div class="icon"><i class="fa fa-mobile"></i></div>
            <div class="title"><h1>Where are we?</h1></div>
            <div class="text">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                    vel illum dolore eu feugiat nulla facilisis at vero eros et
                    accumsan et iusto odio dignissim qui blandit praesent luptatum
                    zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
            </div>
            <div class="button"><a class="hvr-bounce-to-top" href="#">More Info</a></div>
        </div>
    </div> <!--end containerAbout-->

    <div class="containerPreview"> 
        <div class="headingTitle"><h1>preview</h1></div>
        
        <div class="textPreview">
            <div class="textPreviewRight">
                
                
                
                <div class="imacPreview">
                    
                    <img src="img/iMac.png"></img>
                    
                </div>
                
                <div class="iphonePreview">
                    
                    <img src="img/iPhone.png"></img>
                    
                </div>
            </div>
        </div>
        <!---->
        <div class="textPreview">
            <div class="textPreviewLeft">
                
                <div class="titleTextImac">
                    <div class="title"><h1>What the user sees</h1></div>
                    
                    <div class="text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                            quis nostrud exerci tation ullamcorper suscipit lobortis nis.
                            <br>
                        <p>
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                            quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                        </p>
                        </p>
                    </div>
                    
                     <div class="button"><a class="hvr-bounce-to-top" href="#">download</a></div>
                    
                </div>
                
                <div class="titleTextIphone">
                    <div class="title"><h1>What the helper sees</h1></div>
                    
                    <div class="text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                        </p>
                        <br>
                        <p>
                            quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                        </p>
                    </div>
                    
                    <div class="button"><a class="hvr-bounce-to-top" href="#">download</a></div>
                    
                </div>
                
                
            </div>
        </div>
    </div><!--End containerPreview-->
    
    <div class="containerLanguage">
        
        <div class="headingTitle"><h1>Languages</h1></div>
                
                <ul class="listLanguage">
                    <li><img src="img/languages/nederlands.png"></img></li>
                    <li><img src="img/languages/servisch.png"></img></li>
                    <li><img src="img/languages/spaans.jpg"></img></li>
                    <li><img src="img/languages/UK-engels.png"></img></li>
                </ul>
        
    </div>
    
    <div class="containerSignup" id="sign-up">
        
        <div class="headingTitle"><h1>Sign Up</h1></div>
        
        <div class="openContainer">
            
            X
            
        </div>
        
    </div><!--end containerSignup-->
    
</div> <!--end container-->