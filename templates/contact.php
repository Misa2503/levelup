<?php
/* Template Name: Contact Page Template */
get_header();
?>
<h1><?php the_title(); ?></h1>
<?php echo do_shortcode("[contact-form-7 id='15' title='Contact form 1']");?>


<?php get_footer(); ?>