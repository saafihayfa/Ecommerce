
<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Produits</title>
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
                            <a href="Liste_Produits.php" class="nav-item nav-link active">Produits</a>
                            <a href="Details_Produits.php" class="nav-item nav-link">Details Produits</a>
                            <a href="Panier.php" class="nav-item nav-link">Panier</a>
                            <a href="Mon_compte.html" class="nav-item nav-link">Mon compte </a>
                            
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
                            <a href="Liste_produits.php">
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
                            <a href="panier.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->  
        
        
        
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="Details_Produits.php">Robe</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="Details_Produits.php">
                                            <img src="img/product-2.jpg" alt="Product Image">
                                        </a>
                                       
                                    </div>
                                    <div class="product-price">
                                        <h3><span></span></h3>
                                        <a class="btn" href="?action=add"><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="Details_Produits.php">Robe longue</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="Details_Produits.php">
                                            <img src="img/product-3.jpg" alt="Product Image">
                                        </a>
                                       
                                    </div>
                                    <div class="product-price">
                                        <h3><span></span></h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Robe courte</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="Details_Produits.php">
                                            <img src="img/product-10.jpg" alt="Product Image">
                                        </a>
                                       
                                    </div>
                                    <div class="product-price">
                                        <h3><span></span></h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Pantalon</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="Details_Produits.php">
                                            <img src="img/product-6.jpg" alt="Product Image">
                                        </a>
                                        
                                    </div>
                                    <div class="product-price">
                                        <h3><span></span></h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Manteau</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="Details_Produits.php">
                                            <img src="img/product-7.jpg" alt="Product Image">
                                        </a>
                                        
                                    </div>
                                    <div class="product-price">
                                        <h3><span></span></h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Chemise</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="Details_Produits.php">
                                            <img src="img/product-8.jpg" alt="Product Image">
                                        </a>
                                       
                                    </div>
                                    <div class="product-price">
                                        <h3><span></span></h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Pull</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="Details_Produits.php">
                                            <img src="img/product-9.jpg" alt="Product Image">
                                        </a>
                                       
                                    </div>
                                    <div class="product-price">
                                        <h3><span></span></h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pagination Start -->
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                   
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Start -->
                    </div>           
                    
                    <!-- Side Bar Start -->
                    <div class="col-lg-4 sidebar">
                        <div class="sidebar-widget category">
                            <h2 class="title">Catégories</h2>
                            <nav class="navbar bg-light">
                                <ul class="navbar-nav">
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-child"></i>vetements Enfants & Bébés</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>vetements Hommes & Femmes</a>
                                    </li>
                                    
                                   
                                </ul>
                            </nav>
                        </div>
                       
                        
                       
                        
                        
                    </div>
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product List End -->  
        
        
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Contact</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i> E Store, Tunisie, TN</p>
                                <p><i class="fa fa-envelope"></i>email@exemple.com</p>
                                <p><i class="fa fa-phone"></i>Telephone</p>
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
                        <p>Copyright &copy; Site E-Commerce-Store 2021 </p>
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
