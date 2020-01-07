<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="Fernando Palomo Moreno">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,Fernando Palomo Moreno,fernandopal,java,discord bot,programmer">
    <meta name="author" content="Fernando Palomo Moreno">

    <script type="text/javascript" src="assets/js/controls.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/sidenav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="icon" type="image/jpg" href="assets/images/favicon.jpg">

    <title>Fernando Palomo - Home</title>
  </head>
  <body id="body">
    <!--<?php include('html/menu-fragment.html'); ?>-->
    <div id="menu" class="sidenav" unselectable="on" onselectstart="return false;" onmousedown="return false;">
      <span>
        <a id="menu-close-btn" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      </span>
      <span class="menu-btn" onclick="openNav()" id="menu-btn">&#9776;</span>

      <a id="home-btn" href="./" class="active">Home</a>
      <a id="cv-btn" href="https://drive.google.com/open?id=1obOgnfBEP2hL9W0d7qVLE-onv_Gw_OAH">Download my CV</a>
      <a id="finland-btn" href="pages/finland/gallery/">Finland<p class="date-in-menu">(19/03/2019 - 19/06/2019)</p></a>
      <a id="italy-btn" href="pages/italy/gallery/">Italy<p class="date-in-menu">(31/06/2019 - 31/08/2019)</p></a>

      <div id="contact-menu" class="contact">
        <a href="https://twitter.com/fernandopm00" class="fa fa-twitter"></a>
        <a href="https://instagram.com/fernando_pm00" class="fa fa-instagram"></a>
        <a href="https://github.com/fernandopal/" class="fa fa-github"></a>
        <a href="https://steamcommunity.com/id/fernandopal/" class="fa fa-steam"></a>
        <a href="https://www.paypal.me/fernandopm00" class="fa fa-paypal"></a>
        <a href="https://codepen.io/fernandopm00/" class="fa fa-codepen"></a>
        <div id="mail-btn" class="c-tooltip">
          <a href="mailto:mail@fernandopal.es" class="fa fa-envelope"><span id="mail-text" class="c-tooltiptext">mail@fernandopal.es</span></a>
        </div>
        <div id="tel-btn" class="c-tooltip">
          <a href="tel:+34673367018" class="fa fa-phone"><span id="tel-text" class="c-tooltiptext phone">+34 673367018</span></a>
        </div>
      </div>
    </div>
    
    <div id="blur-container">
      <div id="main">
        <div class="container about-me">
          <p>Hi! Im a 18 years old self-taught programmer from Spain.</p>
          <p>Welcome to my website :)</p>
        </div>
        <div class="container-fluid">
          <div class="pad-vertical">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <div class="ms-container">
	                <div class="ms-line">
	                  <a href="pages/projects">
	                    <div class="ms-mid">
	                      <i class="fa fa-suitcase"></i>
	                    </div>
	                  </div>
	                </a>
                  <h2>Projects</h2>
                </div>
              </div>
              <div class="col-sm-4 col-xs-12">
                <div class="ms-container">
	                <div class="ms-line">
	                  <a href="pages/about-me">
	                    <div class="ms-mid">
	                      <img src="assets/images/favicon.jpg"></img>
	                    </div>
	                  </div>
	                </a>
	                <h2>About me</h2>
                </div>
              </div>
              <div class="col-sm-4 col-xs-12">
                <div class="ms-container">
	                <div class="ms-line">
	                  <a href="pages/knowledge">
	                    <div class="ms-mid">
	                      <i class="fa fa-book"></i>
	                    </div>
	                  </div>
	                </a>
                  <h2>Experience & knowledge</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
