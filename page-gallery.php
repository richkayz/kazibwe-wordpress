
<?php
get_header();

$gallery_images = array(
    array('primary.jpg', 'Primary school learners in class', 'Classroom Learning'),
    array('babyclass.jpg', 'Young children enjoying baby class activities', 'Baby Class'),
    array('nursary.jpg', 'Nursery learners taking part in classroom activities', 'Happy Learners'),
    array('nusary2Top.png', 'Nursery children learning and exploring', 'Nursery Learning'),
    array('discovery-and-exploration.png', 'Children discovering and exploring through learning', 'Discovery and Exploration'),
    array('early-literacy.jpg', 'Children developing early reading skills', 'Early Literacy'),
    array('building-knowledge.jpg', 'Learners developing knowledge and understanding', 'Building Knowledge'),
    array('learningskills.jpg', 'Children practising learning skills', 'Learning Skills'),
    array('learning-together.jpg', 'Children learning together and sharing ideas', 'Learning Together'),
    array('createive-learning1.jpg', 'Children engaged in creative learning', 'Creative Learning'),
    array('class-computer.jpg', 'Learners practising computer skills', 'Computer Classes'),
    array('debate.jpg', 'Learners participating in a debate', 'Debate and Communication'),
    array('Singing.jpg', 'Learners participating in singing and music', 'Music and Singing'),
    array('sportsDay.jpg', 'Children participating in school sports day', 'School Sports Day'),
    array('soccer-football.jpg', 'Children playing football', 'Football'),
    array('school.png', 'Kazibwe Foundation School environment', 'Our School'),
    array('61UlyCYoyPL.png', 'Educational resources for young learners', 'Learning Resources'),
    array('f3b71e82-f0ac-498c-ae2a-34e9c0d8ca07.png', 'School learning and activities', 'School Activities'),
    array('logo.png', 'Kazibwe Foundation School logo', 'Our Identity'),
    array('Logo1.png', 'Kazibwe Foundation School branding', 'Our School Logo'),
    array('favicon.png', 'Kazibwe Foundation School icon', 'School Emblem')
);
?>

<main class="page-content gallery-page">

    <h1>Our School Gallery</h1>

    <p class="gallery-intro">
        A glimpse into learning, creativity, participation and
        activities at Kazibwe Foundation School.
    </p>

    <section class="gallery-grid" aria-label="Kazibwe Foundation School gallery">

        <?php foreach ($gallery_images as $index => $item) : ?>
            <?php
            $image_url = get_template_directory_uri() . '/images/' . $item[0];
            ?>

            <article class="gallery-item">
                <img
                    src="<?php echo esc_url($image_url); ?>"
                    alt="<?php echo esc_attr($item[1]); ?>"
                    loading="lazy"
                    data-gallery-index="<?php echo esc_attr($index); ?>"
                >

                <h2><?php echo esc_html($item[2]); ?></h2>
            </article>

        <?php endforeach; ?>

    </section>

    <section class="gallery-actions">

        <h2>Be Part of Our School Community</h2>

        <p>
            Learn more about our programmes or contact us
            for information about joining the school.
        </p>

        <div class="gallery-buttons">

            <a href="<?php echo esc_url(home_url('/enroll/')); ?>" class="button">
                Enroll Now
            </a>

            <a href="<?php echo esc_url(home_url('/contact/')); ?>"
               class="button gallery-contact-button">
                Contact Us
            </a>

        </div>

    </section>

</main>

<!-- Gallery Lightbox -->
<div class="gallery-lightbox" id="galleryLightbox" hidden>

    <button class="gallery-lightbox-close"
            id="galleryClose"
            aria-label="Close image">&times;</button>

    <button class="gallery-lightbox-arrow"
            id="galleryPrevious"
            aria-label="Previous image">&#10094;</button>

    <img id="galleryLargeImage" src="" alt="">

    <button class="gallery-lightbox-arrow"
            id="galleryNext"
            aria-label="Next image">&#10095;</button>

    <div class="gallery-lightbox-caption" id="galleryCaption"></div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const galleryImages = Array.from(
        document.querySelectorAll('.gallery-item img')
    );

    const lightbox = document.getElementById('galleryLightbox');
    const largeImage = document.getElementById('galleryLargeImage');
    const caption = document.getElementById('galleryCaption');

    let currentIndex = 0;

    function showGalleryImage(index) {
        currentIndex = (index + galleryImages.length) % galleryImages.length;

        const image = galleryImages[currentIndex];
        const galleryItem = image.closest('.gallery-item');

        largeImage.src = image.src;
        largeImage.alt = image.alt;

        caption.textContent =
            galleryItem.querySelector('h2').textContent;
    }

    galleryImages.forEach(function (image, index) {
        image.addEventListener('click', function () {
            showGalleryImage(index);
            lightbox.hidden = false;
            document.body.style.overflow = 'hidden';
        });
    });

    function closeGallery() {
        lightbox.hidden = true;
        document.body.style.overflow = '';
    }

    document.getElementById('galleryClose')
        .addEventListener('click', closeGallery);

    document.getElementById('galleryPrevious')
        .addEventListener('click', function () {
            showGalleryImage(currentIndex - 1);
        });

    document.getElementById('galleryNext')
        .addEventListener('click', function () {
            showGalleryImage(currentIndex + 1);
        });

    lightbox.addEventListener('click', function (event) {
        if (event.target === lightbox) {
            closeGallery();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (lightbox.hidden) return;

        if (event.key === 'Escape') closeGallery();
        if (event.key === 'ArrowRight') showGalleryImage(currentIndex + 1);
        if (event.key === 'ArrowLeft') showGalleryImage(currentIndex - 1);
    });

});
</script>

<?php get_footer(); ?>
