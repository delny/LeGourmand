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
    <div class="carte_plats_conteneur">
        <section class="carte_plats">
            <div class="titrep3">
                <h2>La carte des plats</h2>
            </div>
            <table>
                <thead>
                <tr class="bordertab">
                    <th colspan="3">Les <?php echo $productType->getLibelle(); ?>s</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="col-lg-10"></td>
                    <td class="col-lg-1 choice_assiette">Grande assiette</td>
                    <td class="col-lg-1 choice_assiette">Petite assiette</td>
                </tr>
                <?php
                foreach ($products as $product)
                {
                    ?>
                    <tr class="bordertab">
                        <td class="col-lg-10">
                            <p><?php echo $product->getNom(); ?></p>
                            <p><?php echo $product->getDescription(); ?></p>
                        </td>
                        <td class="bg_gris col-lg-1"><?php echo $product->getPrixMax(); ?>€</td>
                        <td class="col-lg-1"><?php echo $product->getPrixMin(); ?>€</td>
                    </tr>
                    <?php
                }
                ?>
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
