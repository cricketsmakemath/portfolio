<head>
    <title>Dan Stoeltzing: Web Developer, Web Designer, Producer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript">
    // Menu hover effect
    $(function() {      
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
    });
    //Scroll effect
    $(function() {
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
    </script>
    <script type="text/javascript" src="//use.typekit.net/vqc2huv.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <!--[if lte IE 6]>
    <style type="text/css">
      #container {
        height: 100%;
      }
    </style>
    <![endif]-->
</head>
<body>
  <div id="menu" class="shadow_bottom">
    <ul>
      <li><div class="menu_link"><a href="#home"><img src="assets/img/home-3.png" border="0" class="menu_icon" /><br>Dan</a></div></li>
      <li><div class="menu_link"><a href="#developer"><img src="assets/img/terminal-2.png" border="0" class="menu_icon" /><br>Developer</a></div></li>
      <li><div class="menu_link"><a href="#designer"><img src="assets/img/code.png" border="0" class="menu_icon" /><br>Designer</a></div></li>
      <li><div class="menu_link"><a href="#contact"><img src="assets/img/contact.png" border="0" class="menu_icon" /><br>Contact</a></div></li>
    </ul>
  </div>
  <!-- Start Home Page -->
  <div id="wrapper" class="home"><a name="home"></a>
    <div class="content_cell_less_pad">
      <h1>Dan Stoeltzing</h1>   
      <h3>Web Designer &amp; Developer</h3>
      
      <br>

      <div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div>

      <p>"Mr. Daniel Stoeltzing was contracted to produce a web page with a commerce function for GatorBites Tail &amp; Ale. His attention to detail, quick turn around and clear explanation of back-page functions was impeccable and greatly appreciated."<br><strong>- Todd Mann, Gatorbites Tail &amp; Ale</strong></p>
      <div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div>

      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a lacus ac augue feugiat rhoncus vel in nisl. Integer at elit porttitor, varius velit a, bibendum libero."
        <br><strong>- Another Person, Business Name</strong></p>
    
    </div>      
  </div>
  <!-- End Home Page -->
  <!-- Start Developer Page -->
  <div id="wrapper" class="developer shadow_top"><a name="developer"></a>
    <div class="content_cell_less_pad">
      <h1>Web Devloper</h1>
      <p>I am a meticulous web devloper with 5 years of professional and freelance experience.<br>Currenty, I am employed as the Webmaster at Edison State College.</p>
      <h3>These are some of the things I'm skilled in</h3>
      <div id="skills">
        <div class="skill_circle"><img src="assets/img/logos/html.png" width="80px"></div>
        <div class="skill_circle"><img src="assets/img/logos/css.png" width="80px"></div>
        <div class="skill_circle"><img src="assets/img/logos/php.png" width="80px"></div>
        <div class="skill_circle"><img src="assets/img/logos/mysql.png" width="80px"></div>
        <div class="skill_circle"><img src="assets/img/logos/jquery.png" width="80px"></div>
        <div class="skill_circle"><img src="assets/img/logos/ci.png" width="80px"></div><br>
        <div class="skill_circle"><img src="assets/img/logos/laravel.png" width="80px"></div>
        <div class="skill_circle"><img src="assets/img/logos/dw.png" width="80px"></div>
        <div class="skill_circle"><img src="assets/img/logos/ps.png" width="80px"></div>
        <div class="skill_circle"><img src="assets/img/logos/sublime.png" width="80px"></div>
        <div class="skill_circle"><img src="assets/img/logos/git.png" width="80px"></div>        
      </div>
      <h3>These are some of the things I'm learning</h3>
      <div id="skills">
        <div class="skill_circle"><img src="assets/img/logos/linux.png" width="80px"></div>
        <div class="skill_circle"><img src="assets/img/logos/node.png" width="80px"></div>
        <div class="skill_circle"><img src="assets/img/logos/mongo.png" width="80px"></div>    
      </div>
    </div>

  </div>
  <!-- End Developer Page -->
  <!-- Start Designer Page -->
  <div id="wrapper" class="designer shadow_top"><a name="designer"></a>
    <div class="content_cell_less_pad">
      <h1>Web Designer</h1>
      <h3>These are some websites I've designed</h3>
      <div class="portfolio_screenshot">
        <a href="http://thebridgeplace.com" target="_blank"><img src="assets/img/screenshots/bc.jpg"></a><br>
        <p><a href="http://thebridgeplace.com" target="_blank">McGregor Point Bridge Club</a></p>
      </div>
      <div class="portfolio_screenshot">
        <a href="http://yourphotodoc.com" target="_blank"><img src="assets/img/screenshots/photodoc.jpg"></a><br>
        <p><a href="http://yourphotodoc.com" target="_blank">Your Photo Doctor</a></p>
      </div>
      <div class="portfolio_screenshot">
        <a href="http://austinmillermusic.com" target="_blank"><img src="assets/img/screenshots/austin.jpg"></a><br>
        <p><a href="http://austinmillermusic.com" target="_blank">Austin Miller Music</a></p>
      </div><br>
      <div class="portfolio_screenshot">
        <a href="http://bewareofthegator.com" target="_blank"><img src="assets/img/screenshots/gator.jpg"></a><br>
        <p><a href="http://bewareofthegator.com" target="_blank">GatorBites Tail &amp; Ale</a></p>
      </div>
      
      <div class="portfolio_screenshot">
        <img src="assets/img/screenshots/ti.jpg"><br>
        <p>Turtle Ink Productions</p>
      </div>
      <div class="portfolio_screenshot">
        <img src="assets/img/screenshots/cmm.jpg"><br>
        <p>Crickets Make Math</p>
      </div>
      <br><br>
      <h3>And of course, this portfolio site...</h3>
    </div>
  </div>
  <!-- End Designer Page -->
  <!-- Start Contact Page -->
  <div id="wrapper" class="contact shadow_top"><a name="contact"></a>
    <div class="content_cell_less_pad">
      <h1>Contact Me</h1>
      <p>Questions? Comments?<br>Fill out the form below to shoot me an email. I'll get back to you A.S.A.P</p>
      <div id="contact_form_container">
        <form name="contact_form">
          <p><strong>Name</strong></p>
          <input type="text" name="name" size="50">
          <p><strong>Email Address</strong></p>
          <p class="meta">I solemnly swear not to share, sell or spam it!</p>
          <input type="text" name="name" size="50">
          <p><strong>Message</strong></p>
          <textarea name="message" rows="5" cols="60"></textarea>
          <p></p>
          <input type="submit" name="submit" value="Send"> 
        </form>
      </div>
      </form>
    </div>
  </div>
  <!-- End Contact Page -->
    
</body>
