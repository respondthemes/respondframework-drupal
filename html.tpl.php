<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  

  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <!-- 2.0 for modern browsers, 1.10 for .oldie -->
  <script>
  var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
  if(!oldieCheck) {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
  } else {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
  }
  </script>
  <script>
  if(!window.jQuery) {
    if(!oldieCheck) {
      document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
    } else {
      document.write('<script src="js/libs/jquery-1.10.1.min.js"><\/script>');
    }
  }
  </script>
  
  <!-- Gumby JS -->
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/gumby.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.retina.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.fixed.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.skiplink.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.toggleswitch.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.checkbox.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.radiobtn.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.tabs.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.navbar.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/gumby.fittext.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/ui/jquery.validation.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/gumby.init.js"></script>

  <script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/gumby.min.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/plugins.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/main.js"></script>

  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!--<script>
  window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
  Modernizr.load({
    load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
  });
  </script>-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
     chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
  <!-- Live Reload -->
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>

</html>