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
    <section class="paraph1">
        <div class="col-lg-4">
            <div class="logo_fa"><p><span class="logo1"></span></p></div>
            <div><h3>Produits frais</h3><p>locaux</p></div>
        </div>
        <div class="col-lg-4">
            <div class="logo_fa"><p><span class="logo2"></span></p></div>
            <div><h3>Nouvelles cartes</h3><p>à chaque saison</p></div>
        </div>
        <div class="col-lg-4">
            <div class="logo_fa"><p><span class="logo3"></span></p></div>
            <div><h3>Concept convivial</h3><p>innovant</p></div>
        </div>
    </section>
    <section class="paraph2 container">
        <div class="titrep2">
            <h2>A propos</h2>
        </div>
        <div class="col-lg-12 flexbox">
            <div class="col-lg-6 presentation">
                <p>Sed posuere nibh eu urna mollis molestie.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mauris justo, euismod ut malesuada fames ac ante ipsum primis in faucibus. Sed id justo quis neque viverra consectetur sit amet sed mi. Sed sem neque, placerat at nulla ut, cursus sodales ante. Cras sodales malesuada magna a lacinia. Maecenas porta leo neque, sit amet suscipit turpis consectetur eget.</p>
                <div class="knowmore"><a href="#"><h3>En savoir plus</h3></a></div>
            </div>
            <div class="col-lg-3 img_extract">
                <figure><img src="View/img/boeuf-small.jpg" alt="boeuf" title="Boeuf" /></figure>
                <a href="img/pexels-photo-295286.jpeg" target="_blank">
                    <span class="logo_loupe"></span></a>
            </div>
            <div class="col-lg-3 img_extract">
                <figure><img src="View/img/Saumon-small.jpg" alt="saumon" title="Saumon" /></figure>
                <a href="View/img/salmon-dish-food-meal-46239.jpeg" target="_blank">
                    <span class="logo_loupe"></span></a>
            </div>
        </div>
    </section>
    <div class="carte_plats_conteneur">
        <section class="carte_plats">
            <div class="titrep3">
                <h2>La carte des plats</h2>
            </div>
            <table>
                <thead>
                <tr class="bordertab">
                    <th colspan="3">Les plats d’Hiver</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="col-lg-10"></td>
                    <td class="col-lg-1 choice_assiette">Grande assiette</td>
                    <td class="col-lg-1 choice_assiette">Petite assiette</td>
                </tr>
                <tr class="bordertab">
                    <td class="col-lg-10">
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Consectetur adipiscing elit. In mauris justo, euismod ut malesuada</p>
                    </td>
                    <td class="bg_gris col-lg-1">18.00€</td>
                    <td class="col-lg-1">11.00€</td>
                </tr>
                <tr class="bordertab">
                    <td class="col-lg-10">
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Consectetur adipiscing elit. In mauris justo, euismod ut malesuada</p>
                    </td>
                    <td class="bg_gris col-lg-1">18.00€</td>
                    <td class="col-lg-1">11.00€</td>
                </tr>
                <tr class="bordertab">
                    <td class="col-lg-10">
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Consectetur adipiscing elit. In mauris justo, euismod ut malesuada</p>
                    </td>
                    <td class="bg_gris col-lg-1">18.00€</td>
                    <td class="col-lg-1">11.00€</td>
                </tr>
                <tr class="bordertab">
                    <td class="col-lg-10">
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Consectetur adipiscing elit. In mauris justo, euismod ut malesuada</p>
                    </td>
                    <td class="bg_gris col-lg-1">18.00€</td>
                    <td class="col-lg-1">11.00€</td>
                </tr>
                </tbody>
            </table>
            <div class="liens_after_carte">
                <a href="tmp/Carte_complete.pdf"><span class="logo_download"></span>Télécharger la carte</a>
                <a href="#">Voir toutes les cartes</a>
            </div>
        </section>
    </div>
    <section class="formandplan" id="noussituer">
        <div class="titrep2">
            <h2>Pensez à réserver</h2>
        </div>
        <div class="flexbox">
            <div class="col-lg-4">
                <form method="post" action="index.html" class="formulaire">
                    <label for="nom">Nom</label><input type="text" name="nom" id="nom" />
                    <label for="nom">Prénom</label><input type="text" name="prenom" id="prenom" />
                    <label for="nom">Tél.</label><input type="tel" name="tel" id="tel" />
                    <label for="message">Message</label><textarea id="message" name="message" placeholder="Pour combien de personne ? etc."></textarea>
                    <input type="submit" value="Réservez" />
                </form>
            </div>
            <div class="col-lg-8">
                <div style="width: 100%; overflow: hidden; height: 400px;">
                    <iframe style="border:0; margin-top: -46px;" src="https://www.google.com/maps/d/embed?mid=1sGQP4UNOgN_O4w5oMrdeJocpHy4" width="640" height="480"></iframe>
                </div>
            </div>
        </div>
    </section>

<?php $contenu = ob_get_clean(); ?>

<?php
$donnees_vue = [
    "titre" => $titre,
    "contenu" => $contenu,
];
