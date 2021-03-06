
<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>">
    <?php endif; ?>
    <?php /* <link rel="shortcut icon" href="<?php echo img('favicon.ico'); ?>" type="image/x-icon" /> */ ?>
    <?php /* <link rel="apple-touch-icon" href="<?php echo img('favicon.svg'); ?>" type="image/svg+xml" /> */ ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view' => $this)); ?>

    <!-- Stylesheets -->
     <?php
    ($textColor = get_theme_option('text_color'));
    ($linkColor = get_theme_option('link_color'));
    ($buttonColor = get_theme_option('button_color'));
    ($buttonTextColor = get_theme_option('button_text_color'));
    ($titleColor = get_theme_option('header_title_color'));
    ?>
<?php
    queue_css_file('bootstrap.min');
    queue_css_file('font-awesome.min');
    queue_css_file('global-mhs');
?>
    <style>
        body {
            color: <?php echo $textColor; ?>;
        }
        p {
	    color: <?php echo $textColor; ?>;
        }
	#site-title a:link, #site-title a:visited,
        #site-title a:active, #site-title a:hover {
            color: <?php echo $titleColor; ?>;
            <?php if (get_theme_option('header_background')): ?>
            text-shadow: 0px 0px 20px #000;
            <?php endif; ?>
        }
        a:link {
            color: <?php echo $linkColor; ?>;
        }
        a:visited {
            color: <?php echo $linkColor; ?>;
        }
        a:hover, a:active, a:focus {
            color: <?php echo $linkColor; ?>;
        }

        .button, button,
        input[type="reset"],
        input[type="submit"],
        input[type="button"],
        .pagination_next a, 
        .pagination_previous a {
         background-color: <?php echo $buttonColor; ?>;
          color: <?php echo $buttonTextColor; ?> !important;
        }

        #search-form input[type="text"] {
            border-color: <?php echo $buttonColor; ?>
        }

        .mobile li { 
            background-color: <?php echo $buttonColor; ?>;
        }

        .mobile li ul li {
            background-color: <?php echo $buttonColor; ?>;
        }

        .mobile li li li {
            background-color: <?php echo $buttonColor; ?>;
        }
    </style>
     
    <?php
    //if (get_theme_option('Use Internal Bootstrap')) {
         //queue_css_file('bootstrap.min');
         //queue_css_file('font-awesome.min');
    //} else {
        //queue_css_url('//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        //queue_css_url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    //}
     // queue_css_file('style');
      
    if ($textColor){
       queue_css_file('style');
    }  
    if ($linkColor){
       queue_css_file('style');
    } 
    if ($buttonColor){
       queue_css_file('style');
    } 
    if ($buttonTextColor){
       queue_css_file('style');
    } 
    if ($titleColor){
       queue_css_file('style');
    } 
    
     
    if (get_theme_option('Display Grid Rotator') && is_current_url('/')):
        queue_css_file('grid-rotator-style');
    ?>
        <noscript>
        <link rel="stylesheet" type="text/css" href="<?php echo css_src('grid-rotator-fallback'); ?>" />
        </noscript>
        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="<?php echo css_src('grid-rotator-fallback'); ?>" />
        <![endif]-->
    <?php
    endif;

    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php If (get_theme_option('Use Accessible Mega Menu')):
        queue_js_file(array('globals', 'vendor/jquery-accessibleMegaMenu'));
    endif; ?>
    <?php // see footer for bootstrap-related js...
    echo head_js(); ?>
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <!-- <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a> -->
    <?php fire_plugin_hook('public_body', array('view' => $this)); ?>


            <!--Header Container-->
            <header class="headerContainer">
                <!--Header Content-->
                              <div class="headerContent clearfix ">
                    <div class="mainLogo">
                    <a href="http://www.manchester.ac.uk/"><img src="//humassets.manchester.ac.uk/rwd-assets/images/logo-university-of-manchester.png" alt="The University of Manchester" width="206"$
                    <!--Mobile Menu Icon-->

                    <!--<a class="mobile-menu-icon" href="#"><img src="/media/humanities/humrwd/assets/images/icon-menu-25x20.gif" alt="" style="width: 25px; height: 20px;" class="" /></a>-->
                                      <a class="mobile-menu-icon" href="#"><img src="/media/humanities/humrwd/assets/images/icon-menu-25x20-25x20.gif" alt="" style="width: 25px; height: 20px;" clas$

                    <!--<a class="search-icon"><img src="/media/humanities/humrwd/assets/images/icon-search-mobile-20x20.gif" alt="" style="width: 20px; height: 20px;" class="" /><span>Search</span$
                                      <a class="search-icon"><img src="/media/humanities/humrwd/assets/images/icon-search-mobile-20x20-20x21.gif" alt="" style="width: 20px; height: 21px;" class="" $
                    <div class="search-options">
                        <div class="row">

                            <div class="searchContainer">
                                                          <!-- navigation object : Search -->
                                                                                                                                                    <form method="get" action="/search/" class="autoc$
                                    <div class="searchInputWrapper">
                                        <label for="searchBox" class="offScreen">Search text</label>
                                        <input type="text" id="searchBox" name="q" class="q" value="" placeholder="Search the website" />
                                        <!--<input type="hidden" name="site" value="University" class="site" />
                                        <input type="hidden" name="client" value="MAN_aboutus_search" class="client" />-->
                                                                          <input type="hidden" name="site" value="DigitalHumanities" class="site" />                                                 $
                                    <div class="searchFilterWrapper">
                                        <fieldset>
                                            <legend class="screenreader">Search type</legend>
                                            <label for="webFilter" class="label"><input type="radio" id="webFilter" name="searchFilter" class="searchFilter" value="website" checked="checked" />Webs$
                                            <label for="staffFilter" class="label"><input type="radio" id="staffFilter" name="searchFilter" class="searchFilter" value="staff" />Staff directory</lab$
                                        </fieldset>
                                    </div>
                                                                        <input type="submit" value="Search" />
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="site-identifier">                        <p class=""><!-- navigation object : Section title -->Digital Humanities</p>
                    </div>
                </div>
                <div class="primaryNav-container">
                                  <!--BEGIN Primary Nav-->
                                  <nav class="primaryNav">

                                  <ul class="megaMenu clickOut clearfix">
                                  <li class="menuItem"><a class="home" href="/">Home</a></li>
<li class="menuItem">
</li>
<li class="menuItem">
</li>
<li class="menuItem">
</li>
<li class="menuItem">
</li>
<li class="menuItem">
</li>
                                      </ul>
                                  </nav>
                                  <!--END Primary Nav-->
                </div>
                <!--END Header Content-->
            </header>
            <!--END Header Container-->
                                                                         

    <?php // Eventually remove the container to set the menu through screen. ?>
    <div class="container">
    <nav id="nav-wrap" class="navbar navbar-default">
        <div class="container-fluid">
            <?php // Brand and toggle get grouped for better mobile display ?>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only"><?php echo __('Toggle navigation'); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php if ($navbarBrandText = get_theme_option('Navbar Brand Text')): ?>
                <a class="navbar-brand" href="#"><?php echo $navbarBrandText; ?></a>
                <?php endif; ?>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <?php $nav = bootstrap_nav(public_nav_main(), array(
                    'ulClass' => 'navigation nav navbar-nav navbar-left',
                    'addExternalLinks' => false,
                ));
                echo $nav;

                // Set a second part of the navbar.
                $twitter = get_theme_option('Link Twitter');
                $facebook = get_theme_option('Link Facebook');
                if ($twitter || $facebook): ?>
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($twitter): ?>
                    <li><a href="<?php echo $twitter; ?>" target="__blank" class="navbar-link"><span class="fa fa-lg fa-twitter"></span></a></li>
                    <?php endif; ?>
                    <?php if ($facebook): ?>
                    <li><a href="<?php echo $facebook; ?>" target="__blank" class="navbar-link"><span class="fa fa-lg fa-facebook"></span></a></li>
                    <?php endif; ?>
                </ul>
                <?php endif; ?>
            </div>
         </div>
    </nav>
    <?php if ($breadcrumb = get_theme_option('Display Breadcrumb Trail')):
        echo common('breadcrumb', array('title' => @$title, 'mode' => $breadcrumb));
    endif; ?>
    </div>
    <div class="container" id="wrapper">
        <div id="content">
