<?php
/**
 * Template Name: publications Antilope
 */
?>
<?php get_header(); ?>
<h1 class="title__module-module bandeau">Publications</h1>
<div class="grid__project grid__publications">
    <article class="module">
        <a class="oui" href="https://www.rtbf.be/article/l-issep-cherche-des-volontaires-pour-tester-des-capteurs-qui-calculent-le-taux-de-pollution-10177450?id=10177450">
	        <?php
	        $image = get_field('art_image');
	        $size = 'full';  // (thumbnail, medium, large, full or custom size)
	        if( $image ) {
		        echo wp_get_attachment_image( $image, $size );
	        }?>
            <div class="info_art">
                <h3 class="title_art"><?= get_field('art_title'); ?></h3>
                <p class="descr_actu"><?= get_field('art_descr'); ?></p>
                <span class="seemore"><?= get_field('seemore'); ?></span>
            </div>
        </a>
    </article>
    <article class="module">
        <a class="oui" href="#">
	        <?php
	        $image = get_field('art_image');
	        $size = 'full';  // (thumbnail, medium, large, full or custom size)
	        if( $image ) {
		        echo wp_get_attachment_image( $image, $size );
	        }?>            <div class="info_art">
                <h3 class="title_art"><?= get_field('art_title_copie'); ?></h3>
                <p class="descr_actu"><?= get_field('art_descr_copie'); ?></p>
                <span class="seemore"><?= get_field('seemore'); ?></span>
            </div>
        </a>
    </article>
    <article class="module">
        <a class="oui" href="https://www.rtbf.be/article/l-issep-cherche-des-volontaires-pour-tester-des-capteurs-qui-calculent-le-taux-de-pollution-10177450?id=10177450">
	        <?php
	        $image = get_field('art_image');
	        $size = 'full';  // (thumbnail, medium, large, full or custom size)
	        if( $image ) {
		        echo wp_get_attachment_image( $image, $size );
	        }?>
            <div class="info_art">
                <h3 class="title_art"><?= get_field('art_title'); ?></h3>
                <p class="descr_actu"><?= get_field('art_descr'); ?></p>
                <span class="seemore"><?= get_field('seemore'); ?></span>
            </div>
        </a>
    </article>
    <article class="module">
        <a class="oui" href="#">
	        <?php
	        $image = get_field('art_image');
	        $size = 'full';  // (thumbnail, medium, large, full or custom size)
	        if( $image ) {
		        echo wp_get_attachment_image( $image, $size );
	        }?>            <div class="info_art">
                <h3 class="title_art"><?= get_field('art_title_copie'); ?></h3>
                <p class="descr_actu"><?= get_field('art_descr_copie'); ?></p>
                <span class="seemore"><?= get_field('seemore'); ?></span>
            </div>
        </a>
    </article>

</div>




<?php get_footer(); ?>
