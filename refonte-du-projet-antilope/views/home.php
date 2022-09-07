<?php
/**
 * Template Name: Home Antilope
 */
?>
<?php get_header(); ?>
<div class="video">
	<section id="sect1" class="layout">
        <div class="flex_about">
            <div class="flex_colonne">
                <h2 class="main__title"><?= get_field('maintitle'); ?></h2>
                <p>Pour un air <span>plus sain</span></p>
                <div class="paragraph">
                    <p>La pollution de l'air, un danger qui nous atteint tous&nbsp;! <br>Des capteurs pour surveiller la pollution
                        atmosphérique: Un enjeu de santé publique</p>
            </div>

        </div>
            <img class="home_antilope" src="/wp-content/themes/refonte-du-projet-antilope/img/home_antilope.jpg" alt="Image d'antilope">

		</div>
	</section>
</div>
<section class="reveal1" id="sect2">
	<h2 class="title__numbers"><?= get_field('titlechiffres'); ?></h2>
    <div class="flex__sect2">
        <div class="number1">
            <span class="info__sect2">
                <?= get_field('number'); ?>
            </span>
            <p class="paragraph__info"><?= get_field('infonumber'); ?></p>
        </div>
        <div class="number2">
            <span class="info__sect2">
                <?= get_field('number'); ?>
            </span>
            <p class="paragraph__info"><?= get_field('infonumber'); ?></p>
        </div>
        <div class="number3">
            <span class="info__sect2">
                <?= get_field('number'); ?>
            </span>
            <p class="paragraph__info"><?= get_field('infonumber'); ?></p>
        </div>

    </div>

</section>
<section class="reveal2" id="sect3">
	<h2 class="sect3__title"> <?= get_field('titlecollab'); ?></h2>
    <div class="flex">
        <div class="collab__flex">

            <?php
$image = get_field('heplimg');
$size = 'medium';  // (thumbnail, medium, large, full or custom size)
if( $image ) {
    echo wp_get_attachment_image( $image, $size );
}?>
            <div class="info__sect3">
                <h3 class="hepl">
	                <?= get_field('hepltitle'); ?>
                </h3>
                <p class="description__hepl"><?= get_field('heplinfo'); ?></p>
	            <?php
	            $link = get_field('hepllink');
	            if( $link ): ?>
                    <a class="seemore" href="<?php echo esc_url( $link ); ?>">En savoir plus</a>
	            <?php endif; ?>
            </div>

        </div>
        <div class="collab__flex reverse">
	        <?php
	        $image = get_field('issepimg');
	        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
	        if( $image ) {
		        echo wp_get_attachment_image( $image, $size );
	        }?>            <div class="info__sect3">
                <h3 class="ISSEP">
	                <?= get_field('isseptitle'); ?>
                </h3>
                <p class="description__issep"><?= get_field('issepinfo'); ?></p>
	            <?php
	            $link = get_field('isseplink');
	            if( $link ): ?>
                    <a class="seemore" href="<?php echo esc_url( $link ); ?>">En savoir plus</a>
	            <?php endif; ?>
            </div>

        </div>
    </div>

</section>
<section class="reveal3" id="sect4">
	<h2 class="title__sect4">
		<?= get_field('titlemodules'); ?>
	</h2>
	<div class="grid">
		<div class="grid__project">
			<?php
			$posts = get_posts(array(
				'post_type' => 'module',
				'posts_per_page' => 3
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
	<div class="center_link">
		<?php
		$link = get_field('allprojects');
		if( $link ): ?>
            <a class="more_projet" href="<?php echo esc_url( $link ); ?>">Voir tous les modules</a>
		<?php endif; ?>	</div>
</section>
<section class="reveal4" id="sect5">
	<h2 class="title__sect5"><?= get_field('titlepubli'); ?></h2>
	<div class="grid">
		<div class="grid__project grid__publications">
			<article class="module publi">
				<a class="oui" href="https://www.rtbf.be/article/l-issep-cherche-des-volontaires-pour-tester-des-capteurs-qui-calculent-le-taux-de-pollution-10177450?id=10177450">
					<?php
					$image = get_field('img__art');
					$size = 'full';  // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}?>
                    <div class="info_art">
						<h3 class="title_art"><?= get_field('title__art'); ?></h3>
						<p class="descr_actu"><?= get_field('descr__art'); ?></p>
						<span class="seemore"><?= get_field('seemore'); ?></span>
					</div>
				</a>
			</article>
			<article class="module publi">
				<a class="oui" href="#">
					<?php
					$image = get_field('img__art');
					$size = 'full';  // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}?>
                    <div class="info_art">
                        <h3 class="title_art"><?= get_field('title__art_copie'); ?></h3>
                        <p class="descr_actu"><?= get_field('descr__art_copie'); ?></p>
                        <span class="seemore"><?= get_field('seemore'); ?></span>
					</div>
				</a>
			</article>
		</div>
	</div>
	<div class="center_link">
		<?php
		$link = get_field('allpubli');
		if( $link ): ?>
            <a class="more_projet" href="<?php echo esc_url( $link ); ?>">Voir toutes les publications</a>
		<?php endif; ?>	</div>	</div>
</section>
<section class="reveal5" id="sect6">
	<h2 class="title_sect6">
		<?= get_field('titlecontact'); ?>
	</h2>
    <div class="contactForm">
        <form class="form__contact-contact" action="https://formsubmit.co/your@email.com" method="POST">
            <div class="inputGroup inputGroup1">
                <input class="inputGroup__textfield" type="text" name="" value="" placeholder="Prénom*" required data-value-missing="Remplissez ce champs.">
            </div>

            <div class="inputGroup inputGroup2">
                <input class="inputGroup__textfield" type="text" name="" value="" placeholder="Nom*" required data-value-missing="Remplissez ce champs.">
            </div>

            <div class="inputGroup inputGroup3">
                <input class="inputGroup__textfield" type="text" name="" value="" placeholder="Email*" required data-value-missing="Remplissez ce champs.">
            </div>

            <div class="inputGroup inputGroup4">
                <input class="inputGroup__textfield" type="text" name="" value="" placeholder="N° de téléphone">
            </div>

            <div class="inputGroup inputGroup5">
                <input class="inputGroup__textfield" type="text" name="" value="" placeholder="Entreprise">
            </div>

            <div class="inputGroup inputGroup6">
                <textarea class="inputGroup__textfield" name="name" rows="8" placeholder="Que pouvous-nous faire pour vous?*" required data-value-missing="Please fill out this field."></textarea>
            </div>

            <div class="inputGroup inputGroup7">
                <button type="submit" name="button">Send</button>
            </div>
        </form>
    </div>
</section>
<script src="/wp-content/themes/refonte-du-projet-antilope/main.js"></script>
<?php get_footer(); ?>


