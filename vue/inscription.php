<!DOCTYPE html>
<html>
    <head>
        <title>TpCommerce - Inscription</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="../style/css/bootstrap.css" />
    </head>
    <body>
        <!-- Menu -->
        <?php include("menu.php"); ?>

        <div class='container'>
            <!--BreadCrumb-->
            <ol class="breadcrumb">
                <li><a href="accueil.php">Accueil</a></li>
                <li class="active">Inscription</li>
            </ol>
            <!-- Formulaire d'inscription-->

            <form>
                <h2> Informations personnelles </h2>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Prenom">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse" placeholder="Adresse">
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" placeholder="Ville">
                </div>
                <div class="form-group">
                    <label for="codePostal">Code Postal</label>
                    <input type="text" class="form-control" id="codePostal" placeholder="CodePostal">
                </div>

                <h2> Identifiants </h2>

                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirmer votre mot de passe</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmer votre mot de passe">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>
                
            </form>
        </div>
    </body>
</html>


