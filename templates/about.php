<?php
    /* Template Name: About Page Template */
    get_header();
?>
<h1><?php the_title();?></h1>

<input type="text" name="input_name" class="input" placeholder="Unesi broj"><br>
<button class="submit-btn">Submit</button>

<div class="ajax_result"></div>

<?php get_footer();?>