<?php
while (have_posts()) :
     the_post();
    the_content(); // カスタム投稿の内容を表示

endwhile; // End of the loop.
