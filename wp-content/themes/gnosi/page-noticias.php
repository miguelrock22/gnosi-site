<?php
get_header();
?>
<div class="container">
    <div class="row text-xs-center">
        <h1><?php echo strtoupper(get_the_title()); ?></h1>
    </div>
    <div class="row">
        <?php
            $cont = 1;
            $loop = new WP_Query( array('cat' => 2) );
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php if($cont <= 3 ) : ?>
                <div class="card-news col-md-4 col-sm-4">
                    <div class="card card-block">
                        <h4 class="card-title"><?php the_title(); ?></h4>
                        <p class="card-text"><?php echo get_field("short_desc"); ?></p>
                        <a href="javascript:void(0)" class="card-link"><?php echo get_the_date(); ?></a>
                        <a href="<?php the_permalink(); ?>" class="card-link">Ver más.</a>
                    </div>
                    <?php $cont++; ?>
                </div>
            <?php else:?>
                <div class="card-news col-md-3">
                    <div class="card card-block">
                        <h4 class="card-title"><?php the_title(); ?></h4>
                        <p class="card-text"><?php echo get_field("short_desc"); ?></p>
                        <a href="javascript:void(0)" class="card-link"><?php echo get_the_date(); ?></a>
                        <a href="<?php the_permalink(); ?>" class="card-link">Ver más.</a>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
</div>