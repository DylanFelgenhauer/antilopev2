
<?php get_header(); ?>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
<h1 class="title__module-module bandeau"><?= get_field('module-antilope-title')?></h1>
<div class="flex_about center_flex">
	<div class="flex_colonne no_centered">
		<h2 class="main__title title__module--single">Qu'est ce que c'est?</h2>
		<div class="paragraph">
			<p>Le module Antiope est le premier module de sa gamme à avoir été créé. Ce petit appareil portatif permet de mesurer plusieurs types de polluants dans l’air et peut aussi mesurer certaines données environnementales. Il est conçu pour être utilisé dans des villes ou dans d’autres environnements.</p>
		</div>
        <h2 class="main__title title__module--single">Pourquoi celui-la?</h2>
		<div class="paragraph">
			<p>Pratique pour déterminer les causes ainsi qu'identifier les endroits et leur taux de pollution.</p>
		</div>
        <h2 class="main__title title__module--single">Ses avantages?</h2>
		<div class="paragraph">
			<p>Portable et facile d'accès. <br>
                Est équipé d’un capteur environnemental permettant de mesurer la température, la pression et l’humidité.
                <br>
            Dispose également d'un GPS ainsi que d'une card SD, ce qui permets un gros stockage de données!</p>
		</div>

	</div>
	<img class="home_antilope single__img" src="/wp-content/themes/refonte-du-projet-antilope/img/antilope.JPG" alt="Image d'antilope">
</div>
<div class="interested">
    <p>Interessé par ce module? Alors <a class="interested__link" href="http://dwwordpress2022/contact/">Contactez-nous&nbsp;!</a></p>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

