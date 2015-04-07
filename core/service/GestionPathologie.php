<?php

require_once(_CORE_.'beans/Pathologie.php');
require_once(_CORE_.'beans/Symptome.php');
require_once(_CORE_.'beans/Meridien.php');
require_once(_CORE_.'dao/PathologieDAO.php');
require_once(_CORE_.'dao/MeridienDAO.php');
require_once(_CORE_.'util/Database.php');

/**
 * Classe service permettant d'inscrire un utlisateur
 *
 * @author Jonathan Play & Baptiste BOULAY 
 */

class GestionPathologie {
    
   /**
	* Récupère la liste des pathologies existantes (identifiant, description, etc.) avec des filtres optionnels
    * @param String|null $typePatho filtre du type de pathologie
    * @param String|null $meridien filtre du type de pathologie
    * @param String|null $caracPatho filtre du type de pathologie
    * @param String|null $motCle filtre du type de pathologie
	* @return Pathologie[] $listePatho liste de pathologies
	*/
    public static function recupererListePathologies($typePatho, $meridien, $caracPatho, $motCle){
        
        $bdd = new Database();
        $daoPathologie = new PathologieDAO($bdd);

        //Renvoie de la liste de toutes les pathologies trouvées	 
        return $daoPathologie->recupererListe($typePatho, $meridien, $caracPatho, $motCle);
    }
    
    /**
	* Récupère la liste des pathologies existantes (identifiant, description, etc.) sans filtres
	* @return Meridien[] $listeMeridiens liste de pathologies
	*/
    public static function recupererListeMeridiens(){
        
        $bdd = new Database();
        $daoMeridien = new MeridienDAO($bdd);

        //Renvoie de la liste de toutes les méridiens trouvées	    
        return $daoMeridien->recupererListe();
    }
    
    /**
	* Récupère la pathologie
    * @param idPathologie id de la pathologie
	* @return Pathologie la pathologie
	*/
    public static function recupererPathologie($idPathologie){
        
        $bdd = new Database();
        $daoPathologie = new PathologieDAO($bdd);

        //Renvoie la pathologie	    
        return $daoPathologie->recupererPatho($idPathologie);
    }
    
    
    
}
	
?>