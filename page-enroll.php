
<?php
get_header();
?>

<main class="page-content enrollment-page">

    <section class="enrollment-hero">
        <p class="enrollment-eyebrow">ADMISSIONS</p>

        <h1>Give Your Child a Great Start</h1>

        <p>
            Welcome to Kazibwe Foundation School. Complete the form below
            to enquire about admission for your child. Our team will contact
            you with further information.
        </p>
    </section>

    <section class="enrollment-content">

        <div class="enrollment-sidebar">

            <h2>Begin Your Child's Journey</h2>

            <p>
                We are committed to helping learners develop knowledge,
                confidence, practical skills and good character.
            </p>

            <div class="enrollment-benefit">
                <span>01</span>
                <div>
                    <h3>Choose a Programme</h3>
                    <p>Tell us whether you are interested in Nursery or Primary.</p>
                </div>
            </div>

            <div class="enrollment-benefit">
                <span>02</span>
                <div>
                    <h3>Share Your Details</h3>
                    <p>Provide your child's details and your contact information.</p>
                </div>
            </div>

            <div class="enrollment-benefit">
                <span>03</span>
                <div>
                    <h3>Hear from Our Team</h3>
                    <p>We will use your contact details to respond to your enquiry.</p>
                </div>
            </div>

            <div class="enrollment-contact">
                <h3>Need Assistance?</h3>
                <p>Call us for admission enquiries.</p>
                <p><a href="tel:+256772023461">+256 772 023 461</a></p>
                <p><a href="tel:+256752331775">+256 752 331 775</a></p>
                <p><a href="mailto:info@kazibwefs.com">info@kazibwefs.com</a></p>
            </div>

        </div>

        <div class="enrollment-form-panel">

            <h2>Admission Enquiry Form</h2>

            <p class="enrollment-form-intro">
                Fields marked with * are required.
            </p>

            <form class="enrollment-form"
                  action="https://formsubmit.co/rc.kazibwe@unik.ac.ug"
                  method="POST">

                <input type="hidden" name="_subject"
                       value="New Admission Enquiry - Kazibwe Foundation School">

                <input type="hidden" name="_template" value="table">

                <input type="hidden" name="_captcha" value="true">

                <input type="hidden" name="_next"
                       value="<?php echo esc_url(home_url('/thank-you/')); ?>">

                <h3 class="enrollment-section-title">Child's Information</h3>

                <div class="enrollment-field">
                    <label for="child-name">Child's Full Name *</label>

                    <input type="text"
                           id="child-name"
                           name="Child's Full Name"
                           placeholder="Enter the child's full name"
                           required>
                </div>

                <div class="enrollment-form-row">

                    <div class="enrollment-field">
                        <label for="child-dob">Date of Birth</label>

                        <input type="date"
                               id="child-dob"
                               name="Child's Date of Birth">
                    </div>

                    <div class="enrollment-field">
                        <label for="child-gender">Gender</label>

                        <select id="child-gender" name="Child's Gender">
                            <option value="">Select gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                </div>

                <div class="enrollment-form-row">

                    <div class="enrollment-field">
                        <label for="programme">Programme *</label>

                        <select id="programme"
                                name="Programme of Interest"
                                required>

                            <option value="">Choose programme</option>
                            <option value="Nursery">Nursery</option>
                            <option value="Primary">Primary</option>

                        </select>
                    </div>

                    <div class="enrollment-field">
                        <label for="class-level">Class Applying For *</label>

                        <select id="class-level"
                                name="Class Applying For"
                                required>

                            <option value="">Select class</option>

                            <option value="Baby Class">Baby Class</option>
                            <option value="Middle Class">Middle Class</option>
                            <option value="Top Class">Top Class</option>

                            <option value="Primary One">Primary One (P1)</option>
                            <option value="Primary Two">Primary Two (P2)</option>
                            <option value="Primary Three">Primary Three (P3)</option>
                            <option value="Primary Four">Primary Four (P4)</option>
                            <option value="Primary Five">Primary Five (P5)</option>
                            <option value="Primary Six">Primary Six (P6)</option>
                            <option value="Primary Seven">Primary Seven (P7)</option>

                        </select>
                    </div>

                </div>

                <h3 class="enrollment-section-title">
                    Parent or Guardian Details
                </h3>

                <div class="enrollment-field">
                    <label for="guardian-name">Parent/Guardian Full Name *</label>

                    <input type="text"
                           id="guardian-name"
                           name="Parent or Guardian Name"
                           placeholder="Enter your full name"
                           autocomplete="name"
                           required>
                </div>

                <div class="enrollment-form-row">

                    <div class="enrollment-field">
                        <label for="guardian-phone">Phone Number *</label>

                        <input type="tel"
                               id="guardian-phone"
                               name="Parent or Guardian Phone"
                               placeholder="+256..."
                               autocomplete="tel"
                               required>
                    </div>

                    <div class="enrollment-field">
                        <label for="guardian-email">Email Address</label>

                        <input type="email"
                               id="guardian-email"
                               name="Parent or Guardian Email"
                               placeholder="you@example.com"
                               autocomplete="email">
                    </div>

                </div>

                <div class="enrollment-field">
                    <label for="home-location">Home Area / Location *</label>

                    <input type="text"
                           id="home-location"
                           name="Home Area"
                           placeholder="e.g. Entebbe, Kawuku"
                           autocomplete="address-level2"
                           required>
                </div>

                <div class="enrollment-field">
                    <label for="additional-information">
                        Additional Information
                    </label>

                    <textarea id="additional-information"
                              name="Additional Information"
                              rows="4"
                              placeholder="Any questions or information you would like to share?"></textarea>
                </div>

                <div class="enrollment-consent">

                    <input type="checkbox"
                           id="enrollment-consent"
                           name="Contact Consent"
                           value="I agree to be contacted about this admission enquiry"
                           required>

                    <label for="enrollment-consent">
                        I agree that the school may contact me about this
                        admission enquiry. *
                    </label>

                </div>

                <button type="submit" class="enrollment-submit-button">
                    Submit Admission Enquiry →
                </button>

                <p class="enrollment-privacy">
                    Your information will be used to respond to your admission
                    enquiry. Submitting this form is an enquiry, not a
                    confirmed admission.
                </p>

            </form>

        </div>

    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const programmeSelect = document.getElementById('programme');
    const classSelect = document.getElementById('class-level');

    const nurseryClasses = [
        ['Baby Class', 'Baby Class'],
        ['Middle Class', 'Middle Class'],
        ['Top Class', 'Top Class']
    ];

    const primaryClasses = [
        ['Primary One', 'Primary One (P1)'],
        ['Primary Two', 'Primary Two (P2)'],
        ['Primary Three', 'Primary Three (P3)'],
        ['Primary Four', 'Primary Four (P4)'],
        ['Primary Five', 'Primary Five (P5)'],
        ['Primary Six', 'Primary Six (P6)'],
        ['Primary Seven', 'Primary Seven (P7)']
    ];

    programmeSelect.addEventListener('change', function () {

        const selectedProgramme = this.value;

        classSelect.innerHTML =
            '<option value="">Select class</option>';

        let classes = [];

        if (selectedProgramme === 'Nursery') {
            classes = nurseryClasses;
        } else if (selectedProgramme === 'Primary') {
            classes = primaryClasses;
        }

        classes.forEach(function (item) {

            const option = document.createElement('option');

            option.value = item[0];
            option.textContent = item[1];

            classSelect.appendChild(option);

        });

    });

});
</script>

<?php get_footer(); ?>
