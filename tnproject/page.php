<?php

 if (have_posts()) : while (have_posts()) : the_post(); ?>

 <div class="post">
     <div class ="post-content">
        <h4>
            <?php the_title(); ?>
        </h4>
        
        <p>
            <?php the_content(); ?>
        </p>
        <p><?php the_post_thumbnail(); ?></p> 
        <p><?php get_sidebar(); ?></p>
     </div>
 </div>

 
 <?php
 // title,content,excerpt,tags,category,author,date,permalink,author_bio
endwhile;
endif;