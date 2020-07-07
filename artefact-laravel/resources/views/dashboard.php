
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Test Gryon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="icon-menu" type="image/png" href="../src/icomoonSVG/PNG/menu.png">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="nav.js"></script>
   

</head>
<body>
    <header>
      <img  class="btlogo" src="img/BikeTestLogo.svg">
      <div class="nav-modal">
        <div class="blob"></div>
        <nav class="nav justify-content-center">
          <ul>
            <li><a href="#allProducts">Catalogue</a> </li>
            <li><a href="#allTests">Historique des tests</a> </li>
            <li><a href="#profile">Mon compte</a> </li>
            <li><a href="/">Logout</a></li>
        </nav>
      </div>
      <div class="head">
         <div class="tile burger">
          <div class="meat">
            <div class="line one"></div>
            <div class="line two"></div>
            <div class="line three"></div>
          </div>
        </div>
      </div>
    </header>
    
    <main>
      <div id="container">

        <!--PAGE CATALOGUE-->
        <div class="page" name="allProducts">
            <h1>Catalogue</h1>
            
            <!--Barre de recherche du catalogue-->
            <div id="products-list" class="row"></div>
                <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                </form>
            </div>
        
        <!--PAGE HISTORIQUE DES TESTS-->
        <div class="page" name="allTests">
            <h1>Historique des tests</h1>

            <!--Barre de recherche de l'historique des tests-->
            <div id="tests-list" class="row"></div>
                <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                </form>
            </div>

            <!--Présentation des tests-->
            <div class="container">
              <div class="row">
                <div class="well">
                <div class="list-group">
                  <a href="" class="list-group-item active">
                        <div class="media col-md-3">
                            <figure class="pull-left">
                                <img class="media-object img-rounded img-responsive"  src="http://placehold.it/350x250" alt="placehold.it/350x250" >
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4 class="list-group-item-heading"> Modèle </h4>
                            <p class="list-group-item-text"> Marque </p>
                            <p class="list-group-item-text"> Type </p>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="stars">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                            <p> date du test </p>
                        </div>
                  </a> 
                </div>
                </div>
              </div>
            </div>

        <!--PAGE MON COMPTE-->
        <div class="page" name="profile">
            <h1>Mon compte</h1>

            <!--Formulaire modification-->
            <div id="profile-list" class="row"></div>
            <div class="container">
                <legend>Modifier les informations du compte</legend>

                <form>
                  <div class="form-group">
                    <label for="inputName">Nom *</label>
                    <input type="name" class="form-control" id="inputName" placeholder="Mon nom" required="">
                  </div>
                  <div class="form-group">
                    <label for="inputFirstname">Prénom *</label>
                    <input type="firstname" class="form-control" id="inputFirstname" placeholder="Mon prénom" required="">
                  </div>
                  <div class="form-group">
                    <label for="inputEmail">Adresse Email *</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Mon adresse email" required="">
                  </div>
                  <div class="form-group">
                    <label for="inputPhonenumber">Numéro de téléphone</label>
                    <input type="phonenumber" class="form-control" id="inputPhonenumber" placeholder="Mon numéro de téléphone">
                  </div>
                  <div class="form-group">
                    <label for="inputAdress">Adresse</label>
                    <input type="adress" class="form-control" id="inputAdress" placeholder="Mon adresse">
                  </div>
                  <div class="form-group">
                    <label for="inputRoadnumber">Numéro de rue</label>
                    <input type="roadnumber" class="form-control" id="inputRoadnumber" placeholder="Mon numéro de rue">
                  </div>
                  <div class="form-group">
                    <label for="inputNPA">NPA</label>
                    <input type="NPA" class="form-control" id="inputNPA" placeholder="Mon npa">
                  </div>
                  <div class="form-group">
                    <label for="inputCity">Ville</label>
                    <input type="city" class="form-control" id="inputCity" placeholder="Ma ville">
                  </div>
                  <div class="form-group">
                    <label for="inputCanton">Canton</label>
                    <input type="canton" class="form-control" id="inputCanton" placeholder="Mon canton">
                  </div><div class="form-group">
                    <label for="inputCountry">Pays</label>
                    <input type="country" class="form-control" id="inputCountry" placeholder="Mon pays">
                  </div>
                  <p>* Champs obligatoires</p>
                  <button type="submit" class="btn btn-default">Valider</button>
                </form>

                
            </div>

        <!--PAGE ACCUEIL-->
        <div class="container">
          <legend>Bienvenue !</legend>

          <!--Formulaire-->
          <form>
            <div class="form-group">
              <label for="inputEmail">Adresse Email</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="Email" required="">
            </div>
            <div class="form-group">
              <label for="inputPassword">Mot de passe</label>
              <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" required="">
            </div>
            
            <button type="submit" class="btn btn-default">Se connecter</button>
            <button type="submit" class="btn btn-default">Créer un compte</button>
          </form>
        </div>
    </main>
</body>
  <script src="bundle.js"></script>
  <script src="js/nav.js"></script>
</html>