<?php

	require_once('_/inc/setups.php');
    require_once('_/inc/wp_bootstrap_navwalker.php');
	wp_enqueue_script('jquery');

        
    
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.

// This is where you add menu support.
function register_theme_menus(){
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}

add_action( 'init', 'register_theme_menus' );

//call to access navigation in theme. $menuName is name from above (eg. 'header-menu')
// add 'header-menu.php' to _/nav folder.
function get_navigation($menuName)
        {
            
			$path = get_template_directory_uri()."/_/nav/".$menuName.".php";
            $filePath = strstr($path,"wp-content");
           
			if(file_exists($filePath)) {
              
                require($filePath);
            
            }
            else
            {
                echo "<!--Navigation menu ".$menuName." not found. Please check nav name and/or add menu file to _/nav/'menu-name'.php-->";
            }

            
    
        }

function load_styles()
{?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php
	$basePath = get_template_directory_uri()."/_/";
	
	$theStyleSheets = array(
		"bootstrap" => "bootstrap/css/bootstrap.css",
		'font-awesome' => 'font-awesome/css/font-awesome.min.css',
		'theme-styles' => 'css/theme-styles.css',
		'theme-colors' => 'css/theme-colors.css'
	
	);
	
	
	foreach($theStyleSheets as $x => $x_value){?>
    <link rel="stylesheet" href="<?php echo $basePath.$x_value ?>">
	<?php
		
		
		
		
			
	}
	
	
}

function load_apple_touch_icons()
{
	$basePath = get_template_directory_uri()."/_/img/apple-icons/";
	
	$theIcons = array(
		'76X76' => 'touch-icon-76X76.png',
		'120X120' => 'touch-icon-120X120.png',
		'152X152' => 'touch-icon-152X152.png',
		'180X180' => 'touch-icon-180X180.png'
	
	);
	
	
	foreach($theIcons as $x => $x_value){?>
    <link rel="apple-touch-icon" sizes="<?php echo $x; ?>" href="<?php echo $basePath.$x_value ?>">
	<?php
		
		
		
		
			
	}
	
	
}




?>