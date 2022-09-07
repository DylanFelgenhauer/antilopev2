<?php
/**
 * Template Name: about Antilope
 */
?>
<?php get_header(); ?>
<h1 class="title__module-module bandeau">A propos</h1>
<div class="flex_content-about ">
    <div class="about_explain">
        <h2 class="title_content-about"><?= get_field('first_title'); ?></h2>
        <p class="paragraph_content-about" ><?= get_field('first_paragraph'); ?></p>
    </div>
	<?php
	$image = get_field('first_img');
	$size = 'full';  // (thumbnail, medium, large, full or custom size)
	if( $image ) {
		echo wp_get_attachment_image( $image, $size );
	}?></div>
<div class="flex_content-about reverseAbout">
    <div class="about_explain">
        <h2 class="title_content-about"><?= get_field('second_title'); ?></h2>
        <p class="paragraph_content-about" ><?= get_field('second_paragraph'); ?></p
        </p>
    </div>
	<?php
	$image = get_field('second_img');
	$size = 'full';  // (thumbnail, medium, large, full or custom size)
	if( $image ) {
		echo wp_get_attachment_image( $image, $size );
	}?></div>
<div class="flex_content-about">
    <div class="about_explain">
        <h2 class="title_content-about"><?= get_field('third_title'); ?></h2>
        <p class="paragraph_content-about" ><?= get_field('third_paragraph'); ?></p>
    </div>
	<?php
	$image = get_field('third_img');
	$size = 'full';  // (thumbnail, medium, large, full or custom size)
	if( $image ) {
		echo wp_get_attachment_image( $image, $size );
	}?></div>


<script src="/wp-content/themes/refonte-du-projet-antilope/main.js"></script>




<?php get_footer(); ?>
