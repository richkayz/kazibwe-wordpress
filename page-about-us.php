
<?php
get_header();
?>

<main class="page-content about-page">

    <h1>About Us</h1>

    <section class="about-intro">
        <div class="about-intro-text">
            <h2>Building a Better Future Together</h2>

            <p>
                Kazibwe Foundation School is a community-driven
                school committed to providing quality education,
                strong moral values and a safe learning environment
                for every child.
            </p>
        </div>

        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/images/school.png'); ?>"
            alt="Kazibwe Foundation School"
            class="about-school-image"
        >
    </section>

    <section class="about-purpose">

        <article class="purpose-card">
            <h2>Our Mission</h2>

            <p>
                To provide quality education that nurtures talent,
                builds character and empowers learners to positively
                contribute to society.
            </p>
        </article>

        <article class="purpose-card">
            <h2>Our Vision</h2>

            <p>
                To be a leading school producing knowledgeable,
                disciplined and confident citizens for a brighter future.
            </p>
        </article>

    </section>

    <section class="about-values">
        <h2>Our Values</h2>

        <ul>
            <li>Integrity</li>
            <li>Excellence</li>
            <li>Respect</li>
            <li>Teamwork</li>
            <li>Discipline</li>
            <li>Service to the community</li>
        </ul>
    </section>

    <section class="about-extra">

        <h2>Our Commitment to Every Child</h2>

        <p>
            At Kazibwe Foundation School, we believe every child has the
            potential to learn, grow and succeed. We are committed to
            providing a supportive learning environment where learners
            are encouraged to develop their abilities, build confidence
            and work towards their goals.
        </p>

        <h2>Building Character Through Education</h2>

        <p>
            Education is more than academic achievement. We believe that
            honesty, respect, discipline and teamwork are important parts
            of a child's development. Through learning and positive
            guidance, we aim to nurture responsible learners who respect
            others and contribute positively to their communities.
        </p>

        <h2>Preparing Learners for the Future</h2>

        <p>
            Our goal is to help learners develop the knowledge, skills
            and values they need for the next stage of their education
            and for life beyond the classroom. We encourage curiosity,
            creativity, responsibility and a positive attitude towards
            learning.
        </p>

        <p>
            At Kazibwe Foundation School, our guiding belief remains:
            <strong>Great Learners, Better Citizens.</strong>
        </p>

        <p>
            <a href="<?php echo esc_url(home_url('/academics/')); ?>">
                Explore Our Academic Programmes
            </a>
            or
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                Contact Us
            </a>
            to learn more.
        </p>

    </section>

</main>

<?php get_footer(); ?>
