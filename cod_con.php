<?php 

session_start();
                           if (isset ($_POST['submit'])) 
                         {
                                    $Pseudo = htmlentities(trim($_POST['Pseudo']));
                                    $Mdp    = htmlentities(trim($_POST['Mdp']));

                                    if ($Pseudo&&$Mdp) {

                                        $Mdp=md5($Mdp);
                                        $db = new PDO ('mysql:host=localhost;dbname=ecommerce','root','') ;
                                        //echo "connexion etablie " ;
                                        $pdostat = $db->query ("SELECT * FROM utilisateur WHERE Pseudo ='$Pseudo' && Mdp ='$Mdp'") ;
                                        
                                        $rows = $pdostat->rowCount ($pdostat);
                                        //echo $rows ;

                                        if ($rows==1) // Pseudo trouvé 
                                       {   //die ("Connexion etablie <a href = 'Liste_Produits.html'> Connectez Vous </a> ") ;
                                            $_SESSION ['Pseudo']= $Pseudo ;  
                                            header('location:Details_produits.php') ;
                                               
                                        } else echo "Pseudo ou Mot de passe Incorrect" ;

                                    }else echo "Veuiller remplir tous les champs";


                         } 
                                        ?>


 












