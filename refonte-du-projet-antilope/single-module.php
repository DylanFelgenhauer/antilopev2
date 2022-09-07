<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Antilope2
 */

?>

<div>
	<h1 class="title__module-module bandeau"><?= get_field('module-antilope-title')?></h1>
	<div class="flex_about center_flex">
		<div class="flex_colonne no_centered">
			<h2 class="main__title title__module--single"><?= get_field('module-title-what')?></h2>
			<div class="paragraph">
				<p><?= get_field('module-descr-what')?></p>
			</div>
			<h2 class="main__title title__module--single"><?= get_field('module-title-why')?></h2>
			<div class="paragraph">
				<p><?= get_field('module-descr-why')?></p>
			</div>
			<h2 class="main__title title__module--single"><?= get_field('module-title-avantages')?></h2>
			<div class="paragraph">
				<p><?= get_field('module-descr-avantages')?></p>
			</div>

		</div>
		<?php
		$image = get_field('module-antilope-img');
		$size = 'large';  // (thumbnail, medium, large, full or custom size)
		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}?>        </div>
	<div class="interested">
		<p>Interessé par ce module? Alors <a class="interested__link" href="http://dwwordpress2022/contact/">Contactez-nous&nbsp;!</a></p>
	</div>
</div>

<?php get_footer(); ?>
