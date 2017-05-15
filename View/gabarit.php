<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Restaurant Le Gourmand, le restaurant idéal pour tous les gourmands !">
        <meta name="keywords" content="restaurant, gourmand">
        <title><?php echo $titre; ?></title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="View/css/style.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php include ('View/menu.php');?>
        <div class="container">
            <?php echo $contenu; ?>
            <footer>
                <div class="flexbox">
                    <div class="col-lg-4">
                        <!-- image ici --> <p>In mauris justo, euismod ut malesuadur adipiscing elit ur adipiscing elit. Ris justo, euismod ut malesuadu.</p>
                    </div>
                    <div class="col-lg-3">
                        <p>Place Saint Roch</p>
                        <p>34000 MONTPELLIER</p>
                    </div>
                    <div class="col-lg-3">
                        <p><a href="#noussituer">Contact</a></p>
                        <p><a href="#">Mentions légales</a></p>
                        <p><a href="#">Crédits photos</a></p>
                    </div>
                    <div class="col-lg-2">
                        <div class="logo_rs"><span class="logo_fb"></span></div>
                        <div class="logo_rs"><span class="logo_twitter"></span></div>
                        <div class="logo_rs"><span class="logo_ap"></span></div>
                        <p><span class="logo_tel">04 67 00 62 52</span></p>
                    </div>
                </div>
                <div>
                    <p>Tous droits réservés - Restaurant Le Gourmand</p>
                </div>
            </footer>
        </div>
    </body>
</html>