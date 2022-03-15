<!DOCTYPE html>

<?php 
session_start() ; 
  
//if (isset ($_session['Pseudo'])) {
   
     //if ($_GET['action']== 'add'  ) {
         if(isset($_POST['submit'])) {
           
            $produit   = htmlentities(trim($_POST['produit']));
            $quant     = htmlentities(trim($_POST['quant']));
            $taille    = htmlentities(trim($_POST['taille']));
            $couleur   = htmlentities(trim($_POST['couleur']));

            if ($produit&&$quant&&$taille&&$couleur)  {
                
                

                $db = new PDO ('mysql:host=localhost;dbname=ecommerce','root','') ;
                echo "connexion etablie" ;
                $pdostat = $db->query("INSERT INTO produit VALUES ('','$produit','$quant','$taille','$couleur')") ;
                die() ;
                

            }else echo "veuillez remplir tous les champs" ;


             
        } 

     


    
      //else if ($_GET['action']== 'modify'){






  //}else if ($_GET['action']== 'delete') {






  //}else {
     
      //die ("erreur") ;
  
//}

//} else {
    // header ("location:index.php") ;
//}

?>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Details produits</title>
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
                            <a href="Details_Produits.php" class="nav-item nav-link active">Details Produits</a>
                            <a href="Panier.php" class="nav-item nav-link">Panier</a>
                            <a href="Mon_compte.html" class="nav-item nav-link">Mon compte</a>
                            
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Compte utilisateur</a>
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
                            <a href="Details_Produits.html">
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
        
        
        
        <!-- Product Detail Start -->
        <div class="product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="product-detail-top">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="product-slider-single normal-slider">
                                        <img src="img/product-8.jpg" alt="Product Image">
                                        <img src="img/product-2.jpg" alt="Product Image">
                                        <img src="img/product-3.jpg" alt="Product Image">
                                        <img src="img/product-10.jpg" alt="Product Image">
                                        <img src="img/product-7.jpg" alt="Product Image">
                                        <img src="img/product-6.jpg" alt="Product Image">
                                        <img src="img/product-1.jpg" alt="Product Image">
                                        <img src="img/product-9.jpg" alt="Product Image">
                                        <img src="img/product-4.jpg" alt="Product Image">
                                    </div>
                                    <div class="product-slider-single-nav normal-slider">
                                        
                                        <div class="slider-nav-img"><img src="img/product-8.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-2.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-3.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-10.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-7.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-6.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-1.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-9.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/product-4.jpg" alt="Product Image"></div>

                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="product-content">
                                    <div class="product-slider-single normal-slider">
                                        <div class="slider-nav-text"><h2>Chemise</h2></div>
                                        <div class="slider-nav-text"><h2>Robe </h2></div>
                                        <div class="slider-nav-text"><h2>Robe longue</h2></div>
                                        <div class="slider-nav-text"><h2>Robe courte</h2></div>
                                        <div class="slider-nav-text"><h2>Manteau</h2></div>
                                        <div class="slider-nav-text"><h2>Pantalon</h2></div>
                                        <div class="slider-nav-text"><h2>Robe courte</h2></div>
                                        <div class="slider-nav-text"><h2>Pull</h2></div>
                                        <div class="slider-nav-text"><h2>Chemise</h2></div>
                                    </div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    
                                        <div class="price">
                                            <h4>Prix :</h4>
                                            <p>-- <span>--</span></p>
                                        </div>
                                        <form method="POST" action="Details_Produits.php"> 
                                        <div class="name">  
                                           <h4>Produit</h4>
                                          <input class="form-control" type="text" name ="produit" placeholder="Produit choisi(e)">
                                         </div>

                                        <div class="">
                                            <h4>Quantité:</h4>
                                            <input class="form-control" type="text" name ="quant" placeholder="Quantité">   
                                        </div>
                                        <div class="champ">
                                        <p >  
                                            <h4>Taille:</h4>
                                           
                                            <select name ="taille" >
                                               <option> -------------- </option>
                                                <option> S </option>
                                                <option> M</option>
                                                <option> L </option>
                                                <option> XL </option>
                                                 
                                            </select> <br> </br>
                                            </p>  
                                        </div>
                                        <div class="">
                                            <h4>Couleur:</h4>
                                             <input class="form-control" type="text" name ="couleur" placeholder="Couleur">
                                        </div> 
                                            
                                        
                                        <div class="submit">
                                            <input type ="submit" class="btn" value="Commander" name="submit" >
                                            <a class="btn" href="#"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                        </div>
                                       </form>
                                        
                                    </div>
                                </div>     
                            </div>
                        </div>
                                       
                        
                        
                        <div class="product">
                            <div class="section-header">
                                <h1>PRODUITS DISPONIBLES</h1>
                            </div>

                            <div class="row align-items-center product-slider product-slider-3">
                                <div class="col-lg-3">
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
                                            <a href="product-detail.html">
                                                <img src="img/product-10.jpg" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <h3><span></span></h3>
                                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                            <a href="product-detail.html">
                                                <img src="img/product-8.jpg" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <h3><span></span></h3>
                                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                            <a href="product-detail.html">
                                                <img src="img/product-6.jpg" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <h3><span></span></h3>
                                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                            <a href="product-detail.html">
                                                <img src="img/product-4.jpg" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <h3><span></span></h3>
                                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="product-item">
                                        <div class="product-title">
                                            <a href="#">Robe</a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="img/product-2.jpg" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <h3><span></span></h3>
                                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Ajouter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                       
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product Detail End -->
        
       
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Contact</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>  E Store, Tunisie, TN </p>
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
