<!DOCTYPE html>
<html>
    <head>
        <title>TpCommerce - Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="../style/css/bootstrap.css" />
    </head>
    <body>
        <!--Menu -->
        <?php include("menu.php"); ?>

        <div class='container'>
            <!--BreadCrumb-->
            <ol class="breadcrumb">
                <li><a href="accueil.php">Accueil</a></li>
                <li class="active">Connexion</li>
            </ol>

            <!--Formulaire d'incription -->
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label" name="mail">Adresse email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label" name="mdp">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <p><input type="checkbox"> Se rappeler de moi </P>
                                <a href="forget.php">Mot de passe oublié</a> 
                            </label> 
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Connexion</button>
                        <button type="submit" class="btn btn-primary" href="inscription.php">Inscription</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>


