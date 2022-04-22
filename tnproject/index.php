<?php
get_header();

$args = [ 
    // 'posts_per_page'=> '2',
    'order_by' => 'ASC'
];
$qurey = new WP_Query($args);
if ($qurey->have_posts()) :
     while ($qurey->have_posts() ) : $qurey->the_post();?>
   <section>
            <div class="content">
                <h3><?php the_title(); ?></h3>
                <h1><?php the_title(); ?></h1>
                <p><?php the_excerpt(); ?></p>
                <button type="button" class="btn btn-outline-danger">Submit</button>
            </div>
            <div class="img">
                <p><?php the_post_thumbnail('large'); ?></p>
            </div>
    </section>

    <?php endwhile; else : ?>
    <p>
        <?php esc_html_e('Sorry, There is no post'); ?>
    </p>
    <?php endif;
    ?>
 





    <?php if (is_active_sidebar('my-widget')):?>
   
    <?php dynamic_sidebar('my-widget');?>
   
    <?php endif;
