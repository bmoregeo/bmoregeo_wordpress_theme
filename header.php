<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if (novalite_setting('wip_custom_favicon')) : ?>
	<link rel="shortcut icon" href="<?php echo novalite_setting('wip_custom_favicon'); ?>"/>
<?php endif; ?>

<link href='http://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'>
<link href="//api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<!--[if IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/html5.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->

<script src="//api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.js"></script>
<script src="scripts/BmoreGeo.js"></script>

<?php 

	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	wp_head(); 
	
?>

</head>

<body <?php body_class('custombody'); ?>>
<div id="map"></div>

<header id="header">

    <div class="container">
        <div class="row">
            
            <div class="col-xs-8 col-md-4" >
               
                <div id="logo">
                        
                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name') ?>">
                            
                        <?php 

                            if ( novalite_setting('wip_custom_logo') ):
                                echo "<img src='".novalite_setting('wip_custom_logo')."' alt='logo'>";
                            else:
                                bloginfo('name');
                            endif;
                            
                        ?>
                                
                    </a>
                            
                </div>
    		</div>

            <div class="col-xs-16 col-md-8" >
              
                <nav id="mainmenu">
                    <?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'false','depth' => 3  )); ?>
                </nav> 
                               
            </div>
            
        </div>
    </div>

</header>