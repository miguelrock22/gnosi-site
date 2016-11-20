<?php
get_header();
?>
<div class="container">
    <div class="row text-xs-center">
        <h1><?php echo strtoupper(get_the_title()); ?></h1>
    </div>
    <div class="row">
        <?php 
            $loop = new WP_Query( 'cat 2' );
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="card-news col-md-12">
                <p><?php the_title(); ?></p>
                <p><?php the_content(); ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</div>