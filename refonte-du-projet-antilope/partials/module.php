<article class="module">
	<a class="antilope" href="<?= get_field('url')?>">
		<?php
		$image = get_field('module-antilope-img');
		$size = 'full';  // (thumbnail, medium, large, full or custom size)
		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}?>
		<div class="info_sect4">
			<h3 class="title_info"><?= get_field('module-antilope-title'); ?></h3>
			<p class="descr"><?= get_field('module-antilope-descr'); ?></p>
		</div>
	</a>
</article>
