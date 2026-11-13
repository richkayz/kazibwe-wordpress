
<?php
/**
 * Kazibwe Foundation School - Homepage
 */

get_header();

$theme_images = get_template_directory_uri() . '/images/';
?>

<main id="primary" class="site-main homepage">

    <!-- HERO SECTION -->
    <section class="hero">

        <div class="hero-content">

            <h1>
                Quality Education<br>
                For A Better Tomorrow
            </h1>

            <p>
                At Kazibwe Foundation School we nurture young minds,
                build strong values and prepare leaders for a better tomorrow.
            </p>

            <a href="<?php echo esc_url(home_url('/about-us/')); ?>"
               class="button">
                Learn More
            </a>

        </div>

    </section>


    <!-- WELCOME SECTION -->
    <section class="welcome" id="about">

        <div class="welcome-text">

            <h2>Welcome to Kazibwe Foundation School</h2>

            <p>
                We provide a supportive learning environment where children
                can learn, grow and develop confidence. Our school focuses on
                good education, discipline, talents and positive values.
            </p>

            <p>
                We work together with parents and the community to help every
                learner build a strong foundation for the future.
            </p>

        </div>

    </section>


    <!-- SCHOOL FEATURES -->
    <section class="features">

        <div class="feature">

            <div class="icon">🎓</div>

            <h2>Academic Excellence</h2>

            <p>Strong foundation for future success</p>

        </div>


        <div class="feature">

            <div class="icon">👨‍👩‍👧‍👦</div>

            <h2>Caring Environment</h2>

            <p>Every child matters</p>

        </div>


        <div class="feature">

            <div class="icon">★</div>

            <h2>Holistic Development</h2>

            <p>Academics, talents and values</p>

        </div>

    </section>


    <!-- LEARNING AND DEVELOPMENT -->
    <section class="academics" id="academics">

        <h2>Learning and Development</h2>

        <p>
            Our learners are encouraged to develop knowledge, creativity,
            discipline and practical skills that prepare them for the future.
        </p>

        <div class="academic-boxes">

            <div class="academic-box">

                <h3>Quality Learning</h3>

                <p>
                    Lessons that build knowledge and understanding.
                </p>

            </div>


            <div class="academic-box">

                <h3>Creative Skills</h3>

                <p>
                    Encouraging learners to discover and use their talents.
                </p>

            </div>


            <div class="academic-box">

                <h3>Good Values</h3>

                <p>
                    Building responsible, respectful and confident citizens.
                </p>

            </div>

        </div>

    </section>


    <!-- SCHOOL LIFE AND ACTIVITIES -->
    <section class="activities" id="activities">

        <h2>School Life</h2>

        <p>
            Learning goes beyond the classroom. We encourage learners to
            participate in activities that support teamwork, creativity
            and confidence.
        </p>

        <div class="activity-list">

            <div>⚽ Sports</div>

            <div>🎨 Creative Activities</div>

            <div>📚 Reading</div>

            <div>🌱 Community Values</div>

        </div>

    </section>


    <!-- ENROLLMENT CALL TO ACTION -->
    <section class="join-school" id="enroll">

        <h2>Give Your Child a Strong Foundation</h2>

        <p>
            Join Kazibwe Foundation School and give your child an opportunity
            to learn, grow and become a better citizen.
        </p>

        <a href="<?php echo esc_url(home_url('/enroll/')); ?>"
           class="button">
            Enquire About Enrollment
        </a>

    </section>

</main>

<?php get_footer(); ?>
