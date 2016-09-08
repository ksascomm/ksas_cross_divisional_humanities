<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');
require_once(get_template_directory().'/assets/functions/theme-options.php'); 
require_once(get_template_directory().'/assets/functions/theme-options-init.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 
require_once(get_template_directory().'/assets/functions/menu-walkers.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 
require_once(get_template_directory().'/assets/functions/block-comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

// Adds breadcrumbs
require_once(get_template_directory().'/assets/functions/breadcrumbs.php'); 

// Adds page metabox
require_once(get_template_directory().'/assets/functions/page-metabox.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
 require_once(get_template_directory().'/assets/functions/admin.php'); 