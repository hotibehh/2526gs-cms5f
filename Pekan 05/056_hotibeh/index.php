<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-meta">
                    <span>By <?php the_author(); ?> on <?php the_time('F j, Y'); ?></span>
                </div>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>
        
        <div class="pagination">
            <?php posts_nav_link(); ?>
        </div>
    <?php else : ?>
        <h2>Tidak ada postingan</h2>
        <p>Silakan tambahkan konten.</p>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
