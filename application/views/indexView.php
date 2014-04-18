<!DOCTYPE html>
<html>
<head>
    <title>Dan Stoeltzing: Web Designer and Developer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0;">
    <META NAME="keywords" CONTENT="web,deisgn,development,fort myers,florida,small business,portfolio">
    <META NAME="description" CONTENT="I am a meticulous web devloper with 5 years of professional and freelance experience. Currenty, I am employed as the Webmaster at Edison State College.">
    <META NAME="author" CONTENT="Daniel Stoeltzing">
    <META NAME="robots" CONTENT="FOLLOW,INDEX">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <?php $this->carabiner->display('css'); ?>
</head>
<body>
  <div id="menu" class="shadow_bottom">
    <ul>
      <li><div class="menu_link"><a href="#home"><img src="assets/img/home-3.png" class="menu_icon" alt="home" border="0" /><br>Dan</a></div></li>
      <li><div class="menu_link"><a href="#developer"><img src="assets/img/terminal-2.png" class="menu_icon" alt="developer" border="0" /><br>Developer</a></div></li>
      <li><div class="menu_link"><a href="#designer"><img src="assets/img/code.png" class="menu_icon" alt="designer" border="0" /><br>Designer</a></div></li>
      <li><div class="menu_link"><a href="#contact"><img src="assets/img/contact.png" class="menu_icon" alt="contact" border="0" /><br>Contact</a></div></li>
    </ul>
  </div>
  <div id="mobile_menu" class="shadow_bottom">
    <ul>
      <li><a href="#home"><img src="assets/img/home-3.png" class="menu_icon" alt="home" /></a></li>
      <li><a href="#developer"><img src="assets/img/terminal-2.png" class="menu_icon" alt="developer" /></a></li>
      <li><a href="#designer"><img src="assets/img/code.png" class="menu_icon" alt="designer" /></a></li>
      <li><a href="#contact"><img src="assets/img/contact.png" class="menu_icon" alt="contact" /></a></li>
    </ul>
  </div>
  <!-- Start Home Page -->
  <div class="wrapper home"><a name="home"></a>
    
    <div class="content_cell_less_pad" id="home_content_cell">
      <h1>Dan Stoeltzing</h1>   
      <h3>Web Designer &amp; Developer</h3>
      <?php if($browser_message){echo $browser_message;} ?>      
      <br>
      <div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div>

      <p>"Mr. Daniel Stoeltzing was contracted to produce a web page with a commerce function for GatorBites Tail &amp; Ale. His attention to detail, quick turn around and clear explanation of back-page functions was impeccable and greatly appreciated."<br><strong>- Todd Mann, Gatorbites Tail &amp; Ale Restaurant</strong></p>
      <div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div>

      <p>"[Dan] did a great job at making my vision a reality. He also went above and beyond by adding a few of his own ideas to compliment mine, which were both tasteful and practical."
        <br><strong>- Austin Miller, Musician</strong></p><br><br>
    
    </div>   
    <div id="dan_container"><img class="dan" src="assets/img/dan.png" id="dan" alt="dan" /></div>
  </div>
  <!-- End Home Page -->
  <!-- Start Developer Page -->
  <div class="wrapper developer shadow_top"><a name="developer"></a>
    <div class="content_cell_less_pad">
      <h1>Web Developer</h1>
      <p>I am a meticulous web developer with 5 years of professional and freelance experience.</p>

      <p>I <strong class="dev_highlight">listen</strong> carefully, <strong class="dev_highlight">ponder</strong> thoroughly, and then I use technology to <strong class="dev_highlight">solve problems</strong> and <strong class="dev_highlight">make your life easier</strong>.</p>

      <h2>These are some of my favorite tools:</h2>
   
      <div id="skills">
        <div class="skill_circle"><img src="assets/img/logos/html.png" width="80" alt="HTML"></div>
        <div class="skill_circle"><img src="assets/img/logos/css.png" width="80" alt="CSS"></div>
        <div class="skill_circle"><img src="assets/img/logos/jquery.png" width="80" alt="jquery"></div>
        <div class="skill_circle"><img src="assets/img/logos/php.png" width="80" alt="php"></div>
        <div class="skill_circle"><img src="assets/img/logos/ci.png" width="80" alt="codeigniter"></div>
        <div class="skill_circle"><img src="assets/img/logos/laravel.png" width="80" alt="laravel"></div> 
        <div class="skill_circle"><img src="assets/img/logos/mysql.png" width="80" alt="mysql"></div>       
      </div>

      <h2>Some solutions I've developed include:</h2>
      <div id="project_list">
      <ul>
        <li>A paperless agenda management system for Edison State College's Board of Trustees meetings which saved the college thousands in courier/printing fees.</li>
        <li>Web payments on <a href="http://2over1.com" target="_blank">2over1.com</a> via paypal and authorize.net that integrate with the VuBridge registration process allowing for seamless payment and registration.</li>
        <li>A complete announcement management system for Edison State College through which articles can be submitted, reviewed, approved and compiled into a weekly, mass-mailed, newsletter.</li>
        <li>Custom built, ultra-simplified content management features for <a href="http://www.bewareofthegator.com" target="_blank">bewareofthegator.com</a> and <a href="http://www.thebridgeplace.com" target="_blank">thebridgeplace.com</a>.</li>
      </ul> 
      </div>    
      <br><br>
    </div>

  </div>
  <!-- End Developer Page -->
  <!-- Start Designer Page -->
  <div class="wrapper designer shadow_top"><a name="designer"></a>
    <div class="content_cell_less_pad">
      <h1>Web Designer</h1>
      <h3>These are some websites I've designed</h3>
      <div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><br>
      <div class="portfolio_screenshot">
        <a href="http://thebridgeplace.com" target="_blank"><img src="assets/img/screenshots/bc.jpg" alt="McGregor Point Bridge Club"></a><br>
        <p><a href="http://thebridgeplace.com" target="_blank">McGregor Point Bridge Club</a></p>
      </div>
      <div class="portfolio_screenshot">
        <a href="http://yourphotodoc.com" target="_blank"><img src="assets/img/screenshots/photodoc.jpg" alt="Your Photo Doc"></a><br>
        <p><a href="http://yourphotodoc.com" target="_blank">Your Photo Doctor</a></p>
      </div>
      <div class="portfolio_screenshot">
        <a href="http://austinmillermusic.com" target="_blank"><img src="assets/img/screenshots/austin.jpg" alt="Austin Miller Music"></a><br>
        <p><a href="http://austinmillermusic.com" target="_blank">Austin Miller Music</a></p>
      </div>
      <div class="portfolio_screenshot">
        <a href="http://bewareofthegator.com" target="_blank"><img src="assets/img/screenshots/gator.jpg" alt="GatorBites Tail and Ale"></a><br>
        <p><a href="http://bewareofthegator.com" target="_blank">GatorBites Tail &amp; Ale</a></p>
      </div>      
      <div class="portfolio_screenshot">
        <img src="assets/img/screenshots/ti.jpg" alt="Turtle Ink Productions"><br>
        <p><a class="inactive_link">Turtle Ink Productions (Offline)</a></p>
      </div>
      <div class="portfolio_screenshot">
        <img src="assets/img/screenshots/cmm.jpg" alt="Crickets Make Math"><br>
        <p><a class="inactive_link">Crickets Make Math (Offline)</a></p>
      </div><br><br>
    </div>
  </div>
  <!-- End Designer Page -->
  <!-- Start Contact Page -->
  <div class="wrapper contact shadow_top"><a name="contact"></a>
    <div class="content_cell_less_pad">
      <h1>Contact Me</h1>
      
      <p>Can I be of service to you? If so, here's how to contact me:</p><br>
      <div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><div class="sep_circle">&nbsp;</div><br><br><br>
      <strong class="contact_method"><img src="assets/img/<?php echo $supported_icon_format; ?>/phone3.<?php echo $supported_icon_format; ?>" width="30px"> (716) 708-5024</strong><br>
      <strong class="contact_method"> 
        <img src="assets/img/<?php echo $supported_icon_format; ?>/envelop.<?php echo $supported_icon_format; ?>" width="30px">
        <noscript><img src="assets/img/email.PNG"><br><span class="email_off">(FYI: The email link above is inactive because you have Javascript turned off)</span></noscript>
        <script type="text/javascript">
var epfkuvl = ['i','g','a','.','t','d','h','<','c','g','o','m','d','d','a',' ','m','m','e','=','z','a','z','d','i','=',' ','l','e','n','w','/','<','>','"','e','c','f','"','n','"','>','s','l','@','i','"','a','s','n','m','@','.','r','l','o','n','b','e','w','i','b','o','a','c','a',':','a'];var awjxbcw = [11,56,17,60,13,48,3,64,29,24,14,9,16,52,36,2,31,63,26,39,53,66,21,20,44,7,33,35,58,55,25,65,0,67,46,41,34,6,40,23,32,47,37,12,51,54,8,49,38,18,42,19,28,4,45,30,50,59,5,57,22,27,62,1,61,43,15,10];var deseyyv= new Array();for(var i=0;i<awjxbcw.length;i++){deseyyv[awjxbcw[i]] = epfkuvl[i]; }for(var i=0;i<deseyyv.length;i++){document.write(deseyyv[i]);} </script>
      </strong class="contact_method">
      <br>
      
      <strong class="contact_method"><img src="assets/img/<?php echo $supported_icon_format; ?>/linkedin.<?php echo $supported_icon_format; ?>" width="30px"> Connect with me on <a href="http://www.linkedin.com/pub/daniel-stoeltzing/83/614/538/" target="_blank">LinkedIn</a></strong><br>

      <strong class="contact_method"><img src="assets/img/<?php echo $supported_icon_format; ?>/github3.<?php echo $supported_icon_format; ?>" width="30px"> View this code on <a href="https://github.com/cricketsmakemath/portfolio" target="_blank">GitHub</a></strong>
      <br><br>
      
    
    </div>
  </div>
  <!-- End Contact Page -->
<?php $this->carabiner->display('js'); ?>
</body>
</html>