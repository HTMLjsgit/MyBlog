<?php get_header(); ?>
<?php include("blogs-template.php"); ?>
    <div class="article-show-box">
        <h5 class="the_time_text"><?php the_time('Y年n月j日'); ?></h5>
        <h2 class="article-show-title-text"><?php the_title(); ?></h2>
        <?php if(has_post_thumbnail()): ?>
            <img src="<?php echo the_post_thumbnail_url('thumbnail') ?>" class="thumbnail-image-blog show">
        <?php else: ?>
            <img src="<?php echo bloginfo('template_url') ?>/img/BLOGアイコン.png" class="thumbnail-image-blog show">
        <?php endif; ?>
        <div class="article-show-description-box">
            <?php the_content(); ?>
        </div>
    </div>
<?php get_sidebar(); ?>
<?php include("blogs-template-end.php"); ?>
<?php get_footer(); ?>
