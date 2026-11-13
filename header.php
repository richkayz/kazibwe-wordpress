
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>

    <div class="header-content">

        <div class="logo">

            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/Logo1.png'); ?>"
                    alt="Kazibwe Foundation School Logo">
            </a>

            <div class="school-quote">
                <p>Great Learners<br>Better Citizens</p>
            </div>

        </div>

       
<nav>
    <a href="<?php echo esc_url(home_url('/')); ?>"
       class="<?php echo is_front_page() ? 'active' : ''; ?>">
        Home
    </a>

    <a href="<?php echo esc_url(home_url('/about-us/')); ?>"
       class="<?php echo is_page('about-us') ? 'active' : ''; ?>">
        About Us
    </a>

    <a href="<?php echo esc_url(home_url('/academics/')); ?>"
       class="<?php echo is_page('academics') || is_page('nursery') || is_page('primary') || is_page('co-curricular') ? 'active' : ''; ?>">
        Academics
    </a>

    <a href="<?php echo esc_url(home_url('/gallery/')); ?>"
       class="<?php echo is_page('gallery') ? 'active' : ''; ?>">
        Gallery
    </a>

    <a href="<?php echo esc_url(home_url('/contact/')); ?>"
       class="<?php echo is_page('contact') ? 'active' : ''; ?>">
        Contact Us
    </a>

    <a href="<?php echo esc_url(home_url('/enroll/')); ?>"
       class="enroll <?php echo is_page('enroll') ? 'active' : ''; ?>">
        Enroll Now
    </a>
</nav>


    </div>

</header>
