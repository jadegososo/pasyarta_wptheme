<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php
        wp_head();
    ?>
</head>
<body>
    <!-- Header -->
    <header class="navbar">
        <div class="nav-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="logo">
            <h2>Pasyar Ta</h2>
        </div>
        <div class="nav-items">
            <ul>
                <li>
                    <a href="<?php echo home_url(); ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo site_url('/destinations'); ?>">Destinations</a>
                </li>
                <li>
                    <a href="<?php echo site_url('/about-us'); ?>">About Us</a>
                </li>
            </ul>
            <button>
                <a href="<?php echo site_url('/travel-guide'); ?>">
                    Travel Guide
                </a>
            </button>
        </div>
        <i class="fa-solid fa-bars burger-menu" onclick="toggleMenu()"></i>
        <div class="menu-items">
    <div class="close-div">
        <i class="fa-solid fa-xmark" onclick="toggleMenu()"></i>
    </div>
    <a href="<?php echo home_url(); ?>">Home</a>
    <a href="<?php echo site_url('/destinations'); ?>">Destinations</a>
    <a href="<?php echo site_url('/about-us'); ?>">About Us</a>
    <a href="<?php echo site_url('/travel-guide'); ?>">Travel Guide</a>
    </div>   
    </header>
