$(document).ready(function() {
//Array of images which you want to show: Use path you want.
var images=new Array('img/back1.jpg','img/back2.jpg','img/back3.jpg','img/back4.jpg','img/back5.jpg');
var nextimage=0;
doSlideshow();

function doSlideshow(){
    if(nextimage>=images.length){nextimage=0;}
    $('body')
    .css('background-image','url("'+images[nextimage++]+'")')
    .fadeIn(500,function(){
        setTimeout(doSlideshow,7000);   //time the image stays on screen
    });
}

 
  $("#owl").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      navigationText : ["&#xf0d9; prev", "next &#xf0da;"],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem: true,
      autoHeight : true
  });
 
});