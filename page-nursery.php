
<?php
get_header();
?>

<main class="page-content programme-page">

    <h1>Nursery School</h1>

    <p class="programme-intro">Baby Class – Top Class</p>

    <section class="programme-hero">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/images/nursary.jpg'); ?>"
            alt="School learning environment"
        >

        <div class="programme-hero-text">
            <h2>A Happy Start to Learning</h2>
            <p>
                A fun and caring environment where children learn
                through play, discovery and creativity. Our aim is
                to help young learners develop confidence, curiosity
                and a positive attitude towards learning.
            </p>
        </div>
    </section>

    <section class="programme-section">
        <h2>Building a Strong Foundation</h2>

        <p>
            Early childhood is an important stage in a child's
            development. Learning experiences at this stage can help
            children build communication, thinking, social and
            practical skills.
        </p>

        <div class="programme-image-grid">

            <article class="programme-image-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/nusary2Top.png'); ?>"
                    alt="Learning resource for young learners"
                    loading="lazy"
                >

                <div class="programme-card-content">
                    <h3>Discovery and Exploration</h3>
                    <p>
                        Encouraging children to ask questions,
                        explore and discover new things.
                    </p>
                </div>
            </article>

            <article class="programme-image-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/early-literacy.jpg'); ?>"
                    alt="Illustration of an open book"
                    loading="lazy"
                >

                <div class="programme-card-content">
                    <h3>Early Literacy</h3>
                    <p>
                        Building an interest in stories, language,
                        books and communication.
                    </p>
                </div>
            </article>

            <article class="programme-image-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/createive-learning1.jpg'); ?>"
                    alt="Educational image"
                    loading="lazy"
                >

                <div class="programme-card-content">
                    <h3>Creative Learning</h3>
                    <p>
                        Supporting imagination, creativity and
                        learning through guided activities.
                    </p>
                </div>
            </article>

        </div>
    </section>

    <section class="programme-section programme-learning">
        <h2>What Children Develop</h2>

        <ul class="programme-list">
            <li>Early language and communication skills</li>
            <li>Number recognition and basic counting</li>
            <li>Social skills, sharing and cooperation</li>
            <li>Creativity and problem-solving</li>
            <li>Confidence and growing independence</li>
        </ul>
    </section>

    <section class="programme-actions">
        <h2>Give Your Child a Great Start</h2>

        <p>Contact us to learn more about nursery enrollment.</p>

        <div class="programme-buttons">
            <a href="<?php echo esc_url(home_url('/enroll/')); ?>" class="button">
                Enroll Now
            </a>

            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button programme-secondary">
                Contact Us
            </a>
        </div>

        <p>
            <a href="<?php echo esc_url(home_url('/academics/')); ?>">
                ← Back to Academics
            </a>
        </p>
    </section>

</main>

<?php get_footer(); ?>
