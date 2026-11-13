
<?php
get_header();
?>

<main class="page-content academics-page">

    <h1>Our Academic Programs</h1>

    <p class="academics-intro">
        We offer a well-rounded education that prepares learners for life.
        Our programmes nurture academic ability, build good character and
        help every child develop the skills and confidence needed for the future.
    </p>

    <section class="program-list" aria-label="School programmes">

        <article class="program-row">
            <div class="program-image">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/nursary.jpg'); ?>"
                    alt="Learning resources for young learners"
                    loading="lazy">
            </div>

            <div class="program-details">
                <h2>Nursery (Baby Class – Top Class)</h2>
                <p>
                    We provide a fun, safe and caring environment where
                    young children learn through play, discovery and creativity.
                    Our nursery programme encourages curiosity, communication,
                    early learning and positive relationships.
                </p>
                <a href="<?php echo esc_url(home_url('/nursery/')); ?>" class="program-link">
                    Explore Nursery →
                </a>
            </div>
        </article>

        <article class="program-row">
            <div class="program-image">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/school.png'); ?>"
                    alt="School learning environment"
                    loading="lazy">
            </div>

            <div class="program-details">
                <h2>Primary School (P1–P7)</h2>
                <p>
                    Our primary programme builds a strong academic foundation
                    while promoting discipline, responsibility and good character.
                    Learners develop essential knowledge, practical skills
                    and confidence to prepare them for the next stage of education.
                </p>
                <a href="<?php echo esc_url(home_url('/primary/')); ?>" class="program-link">
                    Explore Primary School →
                </a>
            </div>
        </article>

        <article class="program-row">
            <div class="program-image">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/soccer-football.jpg'); ?>"
                    alt="Sports and physical activities"
                    loading="lazy">
            </div>

            <div class="program-details">
                <h2>Co-Curricular Activities</h2>
                <p>
                    Learning extends beyond the classroom through sports,
                    music, drama, debate clubs and other activities.
                    These opportunities help learners discover their talents,
                    develop teamwork and leadership, and grow in confidence.
                </p>
                <a href="<?php echo esc_url(home_url('/co-curricular/')); ?>" class="program-link">
                    Explore Activities →
                </a>
            </div>
        </article>

    </section>

    <section class="academics-actions">
        <h2>Take the Next Step</h2>
        <p>
            Find the right learning programme for your child or contact
            our school for more information about admissions.
        </p>

        <div class="academics-action-buttons">
            <a href="<?php echo esc_url(home_url('/enroll/')); ?>" class="button">
                Enroll Now
            </a>

            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button academics-contact-button">
                Contact Us
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
