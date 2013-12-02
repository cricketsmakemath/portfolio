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
  if(contentBottomOffset < (dan.height() - 60)){dan.css('opacity', '.6');}
  else{if(dan.css('opacity') != '1'){dan.css('opacity', '1');}}
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

  //load typekit (ASSYNCRONOUSLY)
  (function() {
    var config = {
      kitId: 'vqc2huv',
      scriptTimeout: 3000
    };
    var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
  })();

  //IE HACK: trigger .load on dan
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

  // Schow project list
  $("#show_project_list").click(function() {
    $("#show_project_list").fadeOut('fast', function() {
      $('#project_list').slideDown('fast', function() {
        $('#project_list p').fadeIn('fast');
        $('#project_list h2').fadeIn('fast');
      });
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

  // Form submit events
  $(".submit_form").click(function() {  
    var dataString = 'name='+ $("#name_field").val() + '&email=' + $("#email_field").val() + '&message=' + $("#message_field").val();  
    //alert (dataString);return false;  
    $.ajax({  
      type: "POST",  
      url: "index.php/welcome/submitform",  
      data: dataString,  
      success: function(data) {
        if(data == 'SUCCESS')
        {  
          // successful submission, display thank you message
          $('#contact_form_container').fadeOut('500', function() {
            var newHtml = "<h3 style='font-size:3em;'>Thank You!</h3><p>I will reply to your message soon.</p><br><br>";
            $('#contact_form_container').html(newHtml);
          });
          $('#contact_form_container').fadeIn('500'); 
        }
        else
        {
          // submission failed, display errors
          var res = data.split("|"); 
          if (jQuery.inArray( "name", res ) != '-1') { $('#error_name').slideDown('slow'); };
          if (jQuery.inArray( "email", res ) != '-1') { $('#error_email').slideDown('slow'); };
          if (jQuery.inArray( "message", res ) != '-1') { $('#error_message').slideDown('slow'); };
        }         
      }  
    });  
    return false;  
  });  

});