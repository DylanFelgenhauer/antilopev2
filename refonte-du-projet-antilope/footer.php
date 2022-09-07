<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Antilope2
 */

?>


<footer>
    <h2 class="hidden">Pied de page</h2>
    <section class="footer-section">
        <div>
            <h3 class="title__footer"><?= get_field('footer-title-nav'); ?></h3>
            <ul>
                <li class="item__nav--footer">
                    <?php
	                $link = get_field('link-accueil');
	                if( $link ): ?>
                        <a href="<?php echo esc_url( $link ); ?>">Accueil</a>
	                <?php endif; ?>
                </li>
                <li class="item__nav--footer">
	                <?php
	                $link = get_field('link-about');
	                if( $link ): ?>
                        <a href="<?php echo esc_url( $link ); ?>">A propos</a>
	                <?php endif; ?>
                </li>
                <li class="item__nav--footer">
                    <?php
	                $link = get_field('allprojects');
	                if( $link ): ?>
                        <a class="" href="<?php echo esc_url( $link ); ?>">Modules</a>
	                <?php endif; ?>
                </li>
                <li class="item__nav--footer">
                    <?php
	                $link = get_field('allpubli');
	                if( $link ): ?>
                        <a href="<?php echo esc_url( $link ); ?>">Publications</a>
	                <?php endif; ?>
                </li>
                <li class="item__nav--footer">
		                <?php
		                $link = get_field('link-contact');
		                if( $link ): ?>
                            <a href="<?php echo esc_url( $link ); ?>">Contact</a>
		                <?php endif; ?>
                    </a></li>
            </ul>
        </div>
        <div>
            <h3 class="title__footer">
	            <?= get_field('footer-title-hepl'); ?>
            </h3>
            <ul>
	            <?php
	            $link = get_field('hepllink');
	            if( $link ): ?>
                    <a class="item__nav--footer" href="<?php echo esc_url( $link ); ?>">Site</a>
	            <?php endif; ?>
                <li class="item__nav--footer mt1"><?= get_field('hepl-number'); ?></li>
                <li class="item__nav--footer"><?= get_field('hepl-mail'); ?></li>
            </ul>
        </div>
        <div>
            <h3 class="title__footer">
	            <?= get_field('footer-title-issep'); ?>
            </h3>
            <ul>
	            <?php
	            $link = get_field('isseplink');
	            if( $link ): ?>
                    <a class="item__nav--footer" href="<?php echo esc_url( $link ); ?>">Site</a>
	            <?php endif; ?>
                    <li class="item__nav--footer mt1"><?= get_field('issep-number'); ?></li>
                <li class="item__nav--footer"><?= get_field('issep-mail'); ?></li>
            </ul>
        </div>

    </section>
</footer>
</html>
