<?php
/**
 * Template Name: modules Antilope
 */
?>
<?php get_header(); ?>
<h1 class="title__module-module bandeau">Modules</h1>
<div class="grid reveal6">
    <div class="grid__project">
	    <?php
	    $posts = get_posts(array(
		    'post_type' => 'module',
		    'posts_per_page' => 6
	    ));
	    if ($posts):

		    foreach ($posts as $post):
			    setup_postdata($post);


			    dw_include('module');
		    endforeach;
		    wp_reset_postdata();

	    endif;
	    ?>

    </div>
</div>
<script src="/wp-content/themes/refonte-du-projet-antilope/main.js"></script>


<?php get_footer(); ?>
