<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <?php if (get_theme_mod('logo_image')) : ?>
                    <img src="<?php echo esc_url(get_theme_mod('logo_image')); ?>" alt="<?php bloginfo('name'); ?>" class="logo-img">
                <?php else : ?>
                    <img src="https://via.placeholder.com/150x50/3B82F6/FFFFFF?text=<?php echo urlencode(get_bloginfo('name')); ?>" alt="<?php bloginfo('name'); ?>" class="logo-img">
                <?php endif; ?>
            </div>
            <ul class="nav-menu">
                <li><a href="#home"><?php echo get_theme_mod('nav_home', 'Home'); ?></a></li>
                <li><a href="#services"><?php echo get_theme_mod('nav_services', 'Services'); ?></a></li>
                <li><a href="#technologies"><?php echo get_theme_mod('nav_technologies', 'Technologies'); ?></a></li>
                <li><a href="#about"><?php echo get_theme_mod('nav_about', 'About'); ?></a></li>
                <li><a href="#contact"><?php echo get_theme_mod('nav_contact', 'Contact'); ?></a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
</header> 