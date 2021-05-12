<?php get_header(); ?>
<?php include("blogs-template.php"); ?>
<div class="articles-box">
    <?php 
        $myposts = get_posts();
        foreach( $myposts as $post ):
            setup_postdata($post);
    ?>
        <div class="article-box">
            <a href="<?php the_permalink(); ?>" class="article-link-box">
                <div class="article-into-box">
                    <h5 class="blog-date-text"><?php the_time('Y年n月j日'); ?></h5>
                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php echo the_post_thumbnail_url('thumbnail') ?>" class="thumbnail-image-blog">
                        <?php else: ?>
                            <img src="<?php echo bloginfo('template_url') ?>/img/BLOGアイコン.png" class="thumbnail-image-blog">
                        <?php endif; ?>
                        <h2 class="title_blog"><?php the_title(); ?></h2>
                        <div class="blog_content_box">
                            <?php the_excerpt(); ?>
                        </div>
                </div>
            </a>
        </div>
    <?php endforeach;
        wp_reset_postdata();
    ?>
</div>
<?php get_sidebar(); ?>
<?php include("blogs-template-end.php"); ?>
<?php get_footer(); ?>