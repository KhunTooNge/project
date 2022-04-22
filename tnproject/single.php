<?php

if (have_posts()) : while (have_posts() ) : the_post();?>

 <div class="post">
  
    <h2>
        <?php the_title(); ?>
    </h2>
    <p>
        <?php the_content(); ?>
    </p>
    <p>
        <?php the_post_thumbnail('large'); ?>
    </p>
 </div>

<?php 
endwhile;  
endif;