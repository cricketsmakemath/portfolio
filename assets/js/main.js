//position dan to bottom center
function positionDanOnLoad()
{
  //position image
  var dan = $('img.dan');
  var bottomOffset = $(window).height() - (dan.offset().top + dan.height());
  var topOffset    = dan.offset().top + bottomOffset;
  var leftOffset   = ($(window).width() - dan.width()) * 0.5;
  dan.offset({top: topOffset, left: leftOffset});
  //lower opacity if overlap occurs
  contentBottomOffset = $(window).height() - ($('#home_content_cell').offset().top + $('#home_content_cell').height());
  if(contentBottomOffset < (dan.height() - 100)){dan.fadeTo('400', 0.7);}
  else{dan.fadeTo('400', 1);}
};
  
//move dan on scroll      
function positionDanOnScroll()
{
  var dan = $('img.dan');
  var bottomOffset = $(window).height() - (dan.offset().top + dan.height());
  var topOffset    = dan.offset().top + bottomOffset + $(window).scrollTop();
  dan.offset({top: topOffset});
};

//doc load
$( document ).ready(function() {

  //load typekit
  try{Typekit.load();}catch(e){}

  // IE HACK: trigger .load on dan
  danSrc = $(".dan").attr("src");
  myImge = $(".dan").attr("src", danSrc + "?" + new Date().getTime());

  //position Dan on load
  $('img.dan').load(function() {
    positionDanOnLoad();
    $(window).scroll(function() {                        
      positionDanOnScroll();
    });
    $(window).resize(function(event) {
       positionDanOnLoad();
    });
  });

  // Menu hover effect
  $('.menu_link').hover(function() 
    {
      var anchor = this;
      $(anchor).stop( true, true ).find( "img" ).animate({"margin-bottom":"10px"}, 200);            
    }, 
    function() 
    {
      var anchor = this;
      $(anchor).stop( true, true ).find( "img" ).animate({"margin-bottom":"0px"}, 100);            
    }
  );

  // Document scroll effect
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 800);
        return false;
      }
    }
  }); 

});