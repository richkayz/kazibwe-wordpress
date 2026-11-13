
<?php
get_header();
?>

<main class="page-content programme-page">

    <h1>Primary School</h1>

    <p class="programme-intro">Primary One to Primary Seven (P1–P7)</p>

    <section class="programme-hero">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/images/primary.jpg'); ?>"
            alt="School learning environment"
        >

        <div class="programme-hero-text">
            <h2>Building a Strong Academic Foundation</h2>

            <p>
                Our primary programme focuses on academic learning,
                character development and essential life skills.
                We aim to help learners build confidence, develop
                good learning habits and prepare for their next
                stage of education.
            </p>
        </div>
    </section>

    <section class="programme-section">
        <h2>Learning and Development</h2>

        <p>
            Primary education helps learners develop knowledge,
            practical skills and the ability to understand and
            respond to the world around them.
        </p>

        <div class="programme-image-grid">

            <article class="programme-image-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/building-knowledge.jpg'); ?>"
                    alt="Educational learning resource"
                    loading="lazy"
                >

                <div class="programme-card-content">
                    <h3>Building Knowledge</h3>
                    <p>
                        Developing understanding and strengthening
                        learning skills across school subjects.
                    </p>
                </div>
            </article>

            <article class="programme-image-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/class-computer.jpg'); ?>"
                    alt="Computer learning for children"
                    loading="lazy"
                >

                <div class="programme-card-content">
                    <h3>Computer Skills for Young Learners</h3>
                    <p>
                        Introducing children to computers through fun,
                        interactive activities that develop digital skills
                        and literacy.
                    </p>
                </div>
            </article>

            <article class="programme-image-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/images/learning-together.jpg'); ?>"
                    alt="Learners developing skills together"
                    loading="lazy"
                >

                <div class="programme-card-content">
                    <h3>Learning Together</h3>
                    <p>
                        Supporting cooperation, discussion,
                        creativity and problem-solving.
                    </p>
                </div>
            </article>

        </div>
    </section>

    <section class="programme-section programme-learning">
        <h2>Our Learning Priorities</h2>

        <ul class="programme-list">
            <li>Reading, writing and communication</li>
            <li>Mathematics and problem-solving</li>
            <li>Science and understanding the world</li>
            <li>Computer Skills for Young Learners</li>
            <li>Social studies and responsible citizenship</li>
            <li>Discipline, respect and personal responsibility</li>
            <li>Creativity, teamwork and independent learning</li>
        </ul>
    </section>

    <section class="programme-actions">
        <h2>Prepare for the Next Stage</h2>

        <p>
            Contact us for information about primary school enrollment.
        </p>

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
