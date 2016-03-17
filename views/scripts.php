<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="logic/JS/navigation-sub.js"></script>
<script type="text/javascript" src="logic/JS/navigation.js"></script>
<!--<script type="text/javascript" src="logic/JS/main.js"></script>-->
<script type="text/javascript" src="logic/JS/parallax.js"></script>
<script type="text/javascript" src="logic/JS/popup.js"></script>
<script type="text/javascript" src="logic/JS/signup-unfold.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        $target = $(target);

        $('html, body').stop().animate({
            'scrollTop':  parseInt($target.offset().top,10)
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});

 // end autoscroll
</script>