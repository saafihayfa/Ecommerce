<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Page de connexion </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link">Accueil</a>
                            <a href="Liste_Produits.php" class="nav-item nav-link">Produits</a>
                            <a href="Details_Produits.php" class="nav-item nav-link">Details Produits</a>
                            
                            
                            
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">compte utilisateur</a>
                                <div class="dropdown-menu">
                                    <a href="connexion.php" class="dropdown-item">Se connecter</a>
                                    <a href="connexion.php" class="dropdown-item">S'inscrire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="connexion.php">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="rechercher">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
   
        
        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6"> 
                          <h2>Inscription</h2>  
                         <form method="POST" action="cod_ins.php"> 
                          <div class="register-form">
                            <div class="row">
                                <div class="col-md-6">  
                                    <label>Nom</label>
                                    <input class="form-control" type="text" name ="Nom" placeholder="Nom">
                                </div>
                                <div class="col-md-6">
                                    <label>Prénom</label>
                                    <input class="form-control" type="text" name ="Prenom" placeholder="Prénom">
                                </div>
                                <div class="col-md-6">
                                    <label>Pseudo</label>
                                    <input class="form-control" type="text" name ="Pseudo" placeholder="Pseudo">
                                </div>
                                
                                <div class="col-md-6">
                                    <label>Mot de passe</label>
                                    <input class="form-control" type="text" name ="Mdp" placeholder="Mot de passe">
                                </div>
                                <div class="col-md-6">
                                    <label>Retaper le Mot de passe</label>
                                    <input class="form-control" type="text" name ="Retap_Mdp" placeholder="Mot de passe">
                                </div>
                                <div class="col-md-12">
                                    <input type ="submit" class="btn" value="S'inscrire" name="submit" >
                                </div>
                          </div>
                        </form>
                        
                        </div>
                    </div>
                            
                    <div class="col-lg-6">
                    <h2>Connexion</h2> 
                    <form method="POST" action="cod_con.php">
                        <div class="login-form"> 
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Pseudo</label>
                                    <input class="form-control" type="text" name ="Pseudo" placeholder="Pseudo">
                                </div>
                                <div class="col-md-6">
                                    <label>Mot de passe</label>
                                    <input class="form-control" type="text" name ="Mdp" placeholder="Mot de passe">
                                </div>
                               
                                <div class="col-md-12">
                                    
                                    <input type ="submit" class="btn" value="Se connecter" name="submit" >
                                </div>
                            </div>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Contact </h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i> E Store, Tunisie, TN</p>
                                <p><i class="fa fa-envelope"></i>email@exemple.com</p>
                                <p><i class="fa fa-phone"></i>telephone</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Suivez Nous</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
                
               
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; Site E-Commerce-Store 2021</p>
                    </div>

                    
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
