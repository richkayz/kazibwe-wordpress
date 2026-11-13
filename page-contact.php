
<?php
get_header();
?>

<main class="page-content contact-page">

    <section class="contact-heading">
        <h1>Contact Us</h1>
        <p>We would love to hear from you!</p>
        <p>
            Have a question about admissions, our academic programmes
            or school activities? Get in touch with us.
        </p>
    </section>

    <section class="contact-layout">

        <div class="contact-information">
            <h2>Our Contact Information</h2>

            <p class="contact-info-intro">
                Contact our school for enquiries, admissions information
                or assistance.
            </p>

            <div class="contact-info-item">
                <div class="contact-icon" aria-hidden="true">⌖</div>
                <div>
                    <h3>Our Address</h3>
                    <p>Kazibwe Foundation School</p>
                    <p>P.O. Box 128, Entebbe, Uganda</p>
                </div>
            </div>

            <div class="contact-info-item">
                <div class="contact-icon" aria-hidden="true">☎</div>
                <div>
                    <h3>Phone Numbers</h3>
                    <p><a href="tel:+256772023461">+256 772 023 461</a></p>
                    <p><a href="tel:+256752331775">+256 752 331 775</a></p>
                </div>
            </div>

            <div class="contact-info-item">
                <div class="contact-icon" aria-hidden="true">✉</div>
                <div>
                    <h3>Email Address</h3>
                    <p>
                        <a href="mailto:info@kazibwefs.com">
                            info@kazibwefs.com
                        </a>
                    </p>
                </div>
            </div>

            <div class="contact-info-item">
                <div class="contact-icon" aria-hidden="true">◷</div>
                <div>
                    <h3>Working Hours</h3>
                    <p>Monday – Saturday</p>
                    <p>8:00 AM – 5:00 PM</p>
                </div>
            </div>

            <a class="contact-whatsapp"
               href="https://wa.me/256772023461"
               target="_blank"
               rel="noopener noreferrer">
                Chat with Us on WhatsApp
            </a>
        </div>

        <div class="contact-form-panel">
            <h2>Send Us a Message</h2>

            <p class="contact-form-intro">
                Complete the form below and let us know how we can help.
            </p>

            <form class="school-contact-form"
                  action="https://formsubmit.co/rc.kazibwe@unik.ac.ug"
                  method="POST">

                <input type="hidden" name="_next"
                       value="<?php echo esc_url(home_url('/thank-you/')); ?>">

                <input type="hidden" name="_subject"
                       value="New enquiry - Kazibwe Foundation School">

                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_captcha" value="true">

                <div class="contact-form-group">
                    <label for="contact-name">Your Name *</label>
                    <input type="text"
                           id="contact-name"
                           name="name"
                           placeholder="Enter your full name"
                           autocomplete="name"
                           required>
                </div>

                <div class="contact-form-row">

                    <div class="contact-form-group">
                        <label for="contact-email">Your Email *</label>
                        <input type="email"
                               id="contact-email"
                               name="email"
                               placeholder="you@example.com"
                               autocomplete="email"
                               required>
                    </div>

                    <div class="contact-form-group">
                        <label for="contact-phone">Phone Number</label>
                        <input type="tel"
                               id="contact-phone"
                               name="phone"
                               placeholder="+256..."
                               autocomplete="tel">
                    </div>

                </div>

                <div class="contact-form-group">
                    <label for="contact-subject">Subject *</label>

                    <select id="contact-subject"
                            name="subject"
                            required>

                        <option value="">Select a subject</option>
                        <option value="Admissions">Admissions</option>
                        <option value="Nursery Programme">Nursery Programme</option>
                        <option value="Primary Education">Primary Education</option>
                        <option value="School Activities">School Activities</option>
                        <option value="General Enquiry">General Enquiry</option>
                        <option value="Other">Other</option>

                    </select>
                </div>

                <div class="contact-form-group">
                    <label for="contact-message">Your Message *</label>

                    <textarea id="contact-message"
                              name="message"
                              rows="5"
                              placeholder="How can we help you?"
                              required></textarea>
                </div>

                <button type="submit" class="contact-submit-button">
                    Send Message →
                </button>

                <p class="contact-privacy-note">
                    Your information will be used to respond to your enquiry.
                </p>

            </form>
        </div>

    </section>

    <section class="contact-location">

        <div class="contact-location-heading">
            <h2>Our Location</h2>
            <p>Find Kazibwe Foundation School in Entebbe, Uganda.</p>
        </div>

        <div class="contact-map">
            <iframe
                src="https://maps.google.com/maps?q=Entebbe%2C%20Uganda&z=12&output=embed"
                title="Map of Entebbe, Uganda"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
            </iframe>
        </div>

        <p class="contact-map-note">
            <a href="https://www.google.com/maps/search/?api=1&query=Kazibwe+Foundation+School+Entebbe+Uganda"
               target="_blank"
               rel="noopener noreferrer">
                Open in Google Maps ↗
            </a>
        </p>

    </section>

    <section class="contact-bottom-cta">
        <h2>We Look Forward to Hearing from You</h2>

        <p>
            Let us help you take the next step in your child's education.
        </p>

        <a href="<?php echo esc_url(home_url('/enroll/')); ?>"
           class="contact-enroll-button">
            Explore Enrolment
        </a>
    </section>

</main>

<?php get_footer(); ?>
