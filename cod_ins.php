<?php 



if (isset ($_POST['submit'])) 
{
    $Nom       = htmlentities(trim($_POST['Nom']));
    $Prenom    = htmlentities(trim($_POST['Prenom']));
    $Pseudo    = htmlentities(trim($_POST['Pseudo']));
    $Mdp       = htmlentities(trim($_POST['Mdp']));
    $Retap_Mdp = htmlentities(trim($_POST['Retap_Mdp']));

    if ($Nom&&$Prenom&&$Pseudo&&$Mdp&&$Retap_Mdp) 
    {
        if($Mdp==$Retap_Mdp)
        {    
            $Mdp=md5($Mdp);  // crypter le mot de passe dans la base de données 
            $db = new PDO ('mysql:host=localhost;dbname=ecommerce','root','') ; // connexion à la db ecommerce 
            
            
            $reg = $db->query("SELECT * FROM utilisateur WHERE Pseudo='$Pseudo'");  
             $rows = $reg->rowCount ($reg);                                            

            if($rows==0)          // Pour ne pas donner la mm Pseudo à l'inscription
            {
           

             $pdoStat = $db->query("INSERT INTO utilisateur VALUES ('','$Nom','$Prenom','$Pseudo','$Mdp')") ;
              die  ("Connexion etablie <a href = 'Liste_Produits.php'> Connectez Vous </a> ");
            
             } else echo "Ce Pseudo n'est pas disponible" ;

         
        } else echo "mots de passe non identiques" ;

       
    } else 
        echo "veuillez remplir tous les champs" ;
    
}

?>