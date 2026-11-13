
<?php
get_header();
?>

<main class="page-content programme-page">

    <h1>Co-Curricular Activities</h1>

    <p class="programme-intro">
        Developing talents, teamwork and confidence beyond the classroom.
    </p>

    <section class="programme-hero">

        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/images/soccer-football.jpg'); ?>"
            alt="Football representing school sports"
        >

        <div class="programme-hero-text">
            <h2>Learning Beyond the Classroom</h2>

            <p>
                Co-curricular activities give learners opportunities
                to explore interests, express themselves, work with
                others and develop skills beyond academic lessons.
            </p>
        </div>

    </section>

    <section class="programme-section">

        <h2>Explore Activities</h2>

        <p>
            Sports, creative expression and group activities can
            help learners build confidence, responsibility and
            positive relationships.
        </p>

        <div class="programme-image-grid">

            <article class="programme-image-card">

                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/sportsDay.jpg'); ?>"
                    alt="Football representing sports and games"
                    loading="lazy"
                >

                <div class="programme-card-content">
                    <h3>Sports and Games</h3>

                    <p>
                        Physical activities can promote fitness,
                        teamwork, discipline and fair play.
                    </p>
                </div>

            </article>

            <article class="programme-image-card">

                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/singing.jpg'); ?>"
                    alt="Music and creative activities"
                    loading="lazy"
                >

                <div class="programme-card-content">
                    <h3>Music and Drama</h3>

                    <p>
                        Creative activities can help learners
                        express ideas and build confidence.
                    </p>
                </div>

            </article>

            <article class="programme-image-card">

                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/debate.jpg'); ?>"
                    alt="Learners participating in debate"
                    loading="lazy"
                >

                <div class="programme-card-content">
                    <h3>Debate and Clubs</h3>

                    <p>
                        Group activities can encourage communication,
                        critical thinking and cooperation.
                    </p>
                </div>

            </article>

        </div>

    </section>

    <section class="programme-section programme-learning">

        <h2>What Learners Can Develop</h2>

        <ul class="programme-list">
            <li>Teamwork and cooperation</li>
            <li>Confidence and self-expression</li>
            <li>Communication and leadership skills</li>
            <li>Creativity and problem-solving</li>
            <li>Discipline and respect for others</li>
        </ul>

    </section>

    <section class="programme-actions">

        <h2>Discover More</h2>

        <p>
            Contact us to learn more about school programmes
            and activities.
        </p>

        <div class="programme-buttons">

            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button">
                Contact Us
            </a>

            <a href="<?php echo esc_url(home_url('/enroll/')); ?>" class="button programme-secondary">
                Enroll Now
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
