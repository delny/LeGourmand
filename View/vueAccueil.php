<?php
$titre = 'Restaurant Le Gourmand';
?>

<?php ob_start(); ?>

    <section class="img_accueil">
        <div class="col-lg-12">
            <p class="title1">RESTAURANT</p>
            <h1 class="title2">Le Gourmand</h1>
            <h3 class="title3">Cuisine conviviale</h3>
            <p><a href="#noussituer" class="btn_reserve"><span>Réservez</span></a></p>
        </div>
    </section>

<?php $contenu = ob_get_clean(); ?>

<?php
$donnees_vue = [
    "titre" => $titre,
    "contenu" => $contenu,
];
