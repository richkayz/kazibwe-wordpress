
<?php
/**
 * Main fallback template.
 *
 * @package KazibweFoundation
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>"
                     <?php post_class('page-content'); ?>>

                <?php if (is_singular()) : ?>

                    <?php the_content(); ?>

                <?php else : ?>

                    <header class="entry-header">
                        <h2 class="entry-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </header>

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>

                <?php endif; ?>

            </article>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

    <?php else : ?>

        <section class="no-content">
            <h1>Welcome to Kazibwe Foundation School</h1>
            <p>Great Learners. Better Citizens.</p>
        </section>

    <?php endif; ?>

</main>

<?php
get_footer();
?>
