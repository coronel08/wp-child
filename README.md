# wp-child
A child theme of twentytwentyone to practice making my own theme(child theme kinsta tutorial)[https://kinsta.com/blog/twenty-twenty-one-theme/#how-to-build-a-child-theme-on-twenty-twentyone]
<br>

[How to add new block patterns or template](#https://kinsta.com/blog/twenty-twenty-one-theme/#how-to-build-a-child-theme-on-twenty-twentyone)

[Reddit good free starter themes](https://www.reddit.com/r/Wordpress/comments/mxq8cb/i_see_a_lot_of_requests_for_good_free_themes_so_i/)
* picostrap
* GeneratePress
* astra

[Add bootstrap](https://www.greengeeks.com/blog/bootstrap-wordpress/)

### Wordpress Themes I Enjoy
* Calliope (lobosecurity)
* colibri wp
* neve
* consulting
* vantage
* hestia
* architect design
* artistic blog

<b>Veerotech themes</b>
* decor
* management
* pharmacy
* dentalcare


### Wordpress React

[Wordpress React Tutorial](https://www.iamtimsmith.com/blog/using-wordpress-with-react) Doesnt work followed it.

## ToDO
* [x] header.php overwrites the header in original theme 
* [x] style.css create styles that overwrite original file
  * [x] import google fonts
  * [x] set a background image in header
* [x] functions.php
  * [x] call function that reads old style and reads new styles
* [ ] Finish creating Picostrap child theme


#### copy picostrap site
/picostrap/headers.php
```
<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// USEFUL LINKS for hackers
// https://medium.com/wdstack/bootstrap-4-custom-navbar-1f6a2da5ed3c
// https://medium.com/coder-grrl/the-guide-to-customising-the-bootstrap-4-navbar-i-wish-id-had-6-months-ago-7bc6ce0e3c71

?><!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Import fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Pacifico&display=swap" rel="stylesheet">


    <!-- wp_head begin -->
    <?php wp_head(); ?>
    <!-- wp_head end -->
  </head>
  <body <?php body_class(); ?> >
  <?php wp_body_open(); ?>

  <?php if(function_exists('lc_custom_header')) lc_custom_header(); else {
    //STANDARD NAV
    ?>
  
  <?php if (get_theme_mod("enable_topbar") ) : ?>
	<!-- ******************* The Topbar Area ******************* -->
	<div id="wrapper-topbar" class="py-2 <?php echo get_theme_mod('topbar_bg_color_choice','bg-light') ?> <?php echo get_theme_mod('topbar_text_color_choice','text-dark') ?>">
		<div class="container">
			<div class="row">
				<div id="topbar-content" class="col-md-12 text-left text-center text-md-left small"> <?php echo do_shortcode(get_theme_mod('topbar_content')) ?>	</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
  

  <!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

    <a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'picostrap' ); ?></a>

    <nav class="navbar navbar-expand-lg <?php echo get_theme_mod('picostrap_header_navbar_position')." ". get_theme_mod('picostrap_header_navbar_color_scheme','navbar-dark').' '. get_theme_mod('picostrap_header_navbar_color_choice','bg-dark'); ?>">

     
      <div class="container" >
  
          <div id="logo-tagline-wrap">
            <!-- Your site title as branding in the menu -->
            <?php if ( ! has_custom_logo() ) { ?>

              <?php if ( is_front_page() && is_home() ) : ?>

                <div class="navbar-brand mb-0 h3"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></div>

              <?php else : ?>

                <a class="navbar-brand h3" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

              <?php endif; ?>


            <?php } else {
              the_custom_logo();
            } ?><!-- end custom logo -->

          
            <?php if (!get_theme_mod('header_disable_tagline')): ?><small id="top-description" class="text-muted d-none d-md-inline-block"><?php bloginfo("description") ?></small><?php endif ?>
          </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'picostrap' ); ?>">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- The WordPress Menu goes here -->
        <?php  wp_nav_menu( array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'navbarNavDropdown',
              'menu_class'        => 'navbar-nav ml-auto',
              'menu_id'         => 'main-menu',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
          ) ); ?>
      
      </div><!-- .container -->
     

    </nav><!-- .site-navigation -->

    </div><!-- #wrapper-navbar end -->

    <!-- Section for logo or photo -->
    <section class="text-light bg-dark h-50 w-100">
    <div class="jumbotron bg-transparent text-center w-100">
        <div class="picostrap-logo">
            <span id="logo-blue">Fidel</span><span>Mar</span>
        </div>
        <div class="logo-text pt-3">
            <p>Testing out some font</p>
        </div>
        <div class="row-mt-4">
            <div class="col-12 text-center mb-3 mb-md-0 col-md6 ">
                <div class="btn-group" role="group">
                    <button class="btn btn-lg btn-outline-secondary dropdown-toggle" type="button"
                        data-toggle="dropdown">
                        Dropdown Button
                    </button>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Test 1</a>
                        <a href="#" class="dropdown-item">Test 2</a>
                    </div>
                    <div class="col-12 text-center col-md-6 text-md-left">
                        <a href="#" role="button" class="btn btn-lg btn-secondary">
                            Free Palestine
                        </a>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <section class="w-100" style="height:100vh;">
        <div class="">
            <p>Testing</p>
        </div>
    </section> 

    <section class="bg-secondary w-100" style="height:100vh;">
        <div class="">
            <p>Testing</p>
        </div>
    </section> 

<?php } ?>

<main id='theme-main'>
```

/picostrap/sass/main.scss
```
@import "theme_variables"; 
@import "bootstrap4/bootstrap";     
@import "wp_basic_styles";      
@import "picostrap";  
@import "woocommerce";          

.picostrap-logo{
    font-family: 'Pacifico', cursive;
    color: #e9548d;
    font-size: 3rem;
}

#logo-blue{
    color: #43c6da;
}

@include media-breakpoint-up(md){
    .picostrap-logo{
        font-size: 8rem;
    }
}

@include media-breakpoint-up(lg){
    .picostrap-logo{
        font-size: 11rem;
    }
}
.logo-text{
    font-family: 'Courier New', Courier, monospace;
    font-size: 1.5rem;
}
```
