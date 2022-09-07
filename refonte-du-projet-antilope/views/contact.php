<?php
/**
 * Template Name: contact Antilope
 */
?>
<?php get_header(); ?>
<h1 class="title__module-module bandeau">Contact</h1>
<p class="info">Contactez-nous pour tout ce qui concerne notre entreprise ou nos services. <br>
    Nous ferons de notre mieux pour vous répondre dans les plus brefs délais.</p>
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




<?php get_footer(); ?>
