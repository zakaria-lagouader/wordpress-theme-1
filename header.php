<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


    <!-- CSS Plugins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Work+Sans:wght@500;600&display=swap" rel="stylesheet" />


    <?php wp_head(); ?>
</head>

<body class="<?php body_class(); ?>">
    <div class="header-height-fix"></div>
    <header class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <!-- logo -->
                        <a class="navbar-brand font-weight-bold mb-0" href="<?php bloginfo('url'); ?>" title="Qurno">
                            <?php if (has_custom_logo()) : ?>
                                <img class="img-fluid" width="110" height="35" src="<?= get_custom_logo_url() ?>" alt="<?php bloginfo('name'); ?>" />
                            <?php else : ?>
                                <img class="img-fluid" width="110" height="35" src="<?php asset("assets/images/logo.png") ?>" alt="Qurno" />
                            <?php endif ?>
                        </a>

                        <button class="search-toggle d-inline-block d-lg-none ms-auto me-1 me-sm-3" data-toggle="search" aria-label="Search Toggle">
                            <span>Search</span>
                            <svg width="22" height="22" stroke-width="1.5" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5 15.5L19 19" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M5 11C5 14.3137 7.68629 17 11 17C12.6597 17 14.1621 16.3261 15.2483 15.237C16.3308 14.1517 17 12.654 17 11C17 7.68629 14.3137 5 11 5C7.68629 5 5 7.68629 5 11Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navHeader" aria-controls="navHeader" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ti ti-menu-2 menu-open"></i>
                            <i class="ti ti-x menu-close"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navHeader">

                            <?php wp_nav_menu(array(
                                'theme_location'  => 'header',
                                'container' => '',
                                'menu_class'  => 'navbar-nav mx-auto',
                                'walker' => new Header_Menu_Walker()
                            )); ?>

                            <div class="navbar-right d-none d-lg-inline-block">
                                <ul class="social-links list-unstyled list-inline">
                                    <li class="list-inline-item ms-4 d-none d-lg-inline-block">
                                        <button class="search-toggle" data-toggle="search" aria-label="Search Toggle">
                                            <span>Search</span>
                                            <svg width="22" height="22" stroke-width="1.5" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.5 15.5L19 19" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M5 11C5 14.3137 7.68629 17 11 17C12.6597 17 14.1621 16.3261 15.2483 15.237C16.3308 14.1517 17 12.654 17 11C17 7.68629 14.3137 5 11 5C7.68629 5 5 7.68629 5 11Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?php get_search_form() ?>