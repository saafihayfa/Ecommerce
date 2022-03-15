
<?php
function creationPanier(){
   if (!isset($_SESSION['panier'])){            // panier n'existe pas 
      $_SESSION['panier']=array();
      $_SESSION['panier']['Produit'] = array();
      $_SESSION['panier']['prix'] = array();
      $_SESSION['panier']['quantité'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}

?>