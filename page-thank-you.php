
<?php
get_header();
?>

<main class="page-content thank-you-page">

    <section class="thank-you-container">

        <div class="thank-you-icon" aria-hidden="true">
            &#10003;
        </div>

        <p class="thank-you-label">MESSAGE RECEIVED</p>

        <h1>Thank You for Contacting Us!</h1>

        <p class="thank-you-message">
            Your message has been successfully submitted.
            We appreciate your interest in Kazibwe Foundation School.
        </p>

        <p class="thank-you-followup">
            Our team will review your enquiry and get back to you
            using the contact details you provided.
        </p>

        <div class="thank-you-actions">

            <a href="<?php echo esc_url(home_url('/')); ?>"
               class="thank-you-home-button">
                Back to Home
            </a>

            <a href="<?php echo esc_url(home_url('/academics/')); ?>"
               class="thank-you-secondary-button">
                Explore Academics
            </a>

        </div>

        <div class="thank-you-contact">
            <p>Need further assistance?</p>
            <p>
                <a href="tel:+256772023461">+256 772 023 461</a>
                |
                <a href="mailto:info@kazibwefs.com">info@kazibwefs.com</a>
            </p>
        </div>

        <p class="thank-you-slogan">
            Great Learners. Better Citizens.
        </p>

    </section>

</main>

<?php get_footer(); ?>
