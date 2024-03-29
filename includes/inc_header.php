<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">

  <head>
    <title><?php print $head_title; ?></title>
    <!-- stats-SEO -->
    <meta name="google-site-verification" content="msBEDS9QaIIEpzPS6_Wi-HOzKWr1Kw0dageOmF-4rbs" />
    <META name="y_key" content="11677ed5e2db4f15" />
    <meta name="msvalidate.01" content="E2114447554473259DE0996EF11B87E0" />
    <!-- Pour CSS selon taille de l'ecran = tactile -->
    <meta name="viewport" content="width=device-width, user-scalable=yes" />
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    
   
      
  </head>

 <body class="<?php print $body_classes; ?>">

	<div id="general">
 
    <!-- ______________________ HEADER _______________________ -->
	 <div id="header">
	 
		<div id="header-inner">
	
        <div id="headHaut">
		
          <div id="logoHead">
	           <?php if (!empty($logo)): ?>
		           <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
	          <?php endif; ?>
	       </div>   
		   
         <div id="menuImg">
              <?php if (!empty($navStatic)): ?>
		           <?php print $navStatic; ?>
	          <?php endif; ?>
          </div>

          </div><!-- /headHaut -->
		 <div id="headBas">
		 
	<?php if (!empty($site_slogan)): ?>
            <div id="site-slogan">
	<?php print $site_slogan; ?>
            </div><!-- /site-slogan -->
            <?php endif; ?>


            <div id="headSearch">
		  <?php if (!empty($search_box)): ?>
		  <?php print $search_box ?>
		  <?php endif; ?>
		  </div><!-- /recherche -->

                  
          <div id="menuHead">
	        <?php if (!empty($menuDyn)): ?>
			   <?php print $menuDyn; ?>
            <?php endif; ?>

          </div><!-- /menuHead -->
		 
		  
		</div><!-- /headBas -->
          
        

     
      
      
	  </div> <!-- /header-inner -->
   </div> <!-- /header -->
