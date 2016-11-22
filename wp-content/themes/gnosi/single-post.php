<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<div class="container" <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <h1 class="h1"><?php the_title(); ?></h1>
    <div class="row">
        <div class="col-md-8">
            <div><?php the_content(); ?></div>
            <small><?php the_date() ?> <!-- by <?php the_author() ?> --></small>
        </div>
    </div>
</div>
<?php endwhile; endif; ?>