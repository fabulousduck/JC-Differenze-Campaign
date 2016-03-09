var scrollY = 0;
var distance = 40;
var speed = 25;

function autoScrollTo(el){
	var currentY = window.scrollY;
	var targetY = document.getElementById(el).offsetTop;
	var bodyHeight = document.body.offsetHeight;
	var yPos = currentY + window.innerHeight;
	var animator = setTimeout('autoscrollTo(\''+el+'\')', speed);
	
	if(yPos > bodyHeight){
		clearTimeout(animator);
	}
	else{
		if(currentY < targetY  - distance){
			scrollY = currentY + distance;
			window.scroll(0, scrollY); //scrollY === 840
		}
		else{
			clearTimeout(animator);
		}	
	}
}//end function autoScrollTo
//copyrighted by de noudster gino's


// $(function() {
//   $('a[href*=#]:not([href=#])').click(function() {
//     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
//       if (target.length) {
//         $('html,body').animate({
//           scrollTop: target.offset().top
//         }, 1000);
//         return false;
//       }
//     }
//   });
// }); //kut script van het internet