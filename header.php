<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stephen_white
 */

$logo = get_field( 'logo', 'option' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<header class="site-header fixed z-20 w-full py-[18px] bg-black xl:bg-transparent xl:py-[39px]">
    <div class="container flex items-center justify-between">

        <!-- Logo -->
        <div class="site-branding shrink-0">
            <a href="<?php echo esc_url( home_url( '/' ) );?>" rel="home">
                <img src="<?php echo esc_url( $logo );?>" alt="Site Logo" class="max-h-[26px] xl:max-h-[38px]" />
            </a>
        </div>

        <!-- Spacer between logo and menu -->
        <div class="hidden md:block flex-[165]" aria-hidden="true"></div>

        <!-- Navigation -->
        <nav id="site-navigation" class="main-navigation hidden xl:block">
            <?php
            wp_nav_menu(
                array(
                'theme_location' => 'header',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'main-menu xl:flex xl:items-center xl:gap-x-[36px]',
                'container'      => false,
                )
            );
            ?>
        </nav>

        <!-- Spacer between menu and button -->
        <div class="hidden md:block flex-[246]" aria-hidden="true"></div>

        <!-- Button -->
        <div class="shrink-0 hidden xl:block">
            <a href="/#contacts" class="button-small">
                <?php esc_html_e( 'Get in Touch', 'stephen_white' ); ?>
            </a>
        </div>

        <button class="shrink-0 w-[24px] h-[24px] cursor-pointer xl:hidden" type="button" title="<?php esc_attr_e( 'Open menu', 'stephen_white' ); ?>">
            <svg class="menu" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21 17C21.5523 17 22 17.4477 22 18C22 18.5523 21.5523 19 21 19H3C2.44772 19 2 18.5523 2 18C2 17.4477 2.44772 17 3 17H21ZM21 11C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12C2 11.4477 2.44772 11 3 11H21ZM21 5C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H3C2.44772 7 2 6.55228 2 6C2 5.44772 2.44772 5 3 5H21Z" fill="white"/>
            </svg>

            <svg class="hidden" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.435 0.707305C13.8256 0.316781 14.4587 0.316781 14.8492 0.707305C15.2398 1.09783 15.2398 1.73099 14.8492 2.12152L2.12132 14.8494C1.7308 15.24 1.09763 15.24 0.707107 14.8494C0.316583 14.4589 0.316582 13.8258 0.707107 13.4352L13.435 0.707305Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.435 14.8493C13.8256 15.2399 14.4587 15.2399 14.8492 14.8493C15.2398 14.4588 15.2398 13.8256 14.8492 13.4351L2.12132 0.7072C1.7308 0.316676 1.09763 0.316676 0.707107 0.7072C0.316583 1.09772 0.316582 1.73089 0.707107 2.12141L13.435 14.8493Z" fill="white"/>
            </svg>
        </button>
    </div>
</header>
