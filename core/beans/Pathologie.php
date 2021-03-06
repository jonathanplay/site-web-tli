<?php

/**
 * Objet contenant les informations sur une pathologie
 *
 * @author BOULAY Baptiste & Jonathan PLAY
 */
class Pathologie {
    
    // Attributs
    private $_id;
    private $_type;
	private $_desc;
    private $_meridien;
    private $_listeSymptomes;

    // Constructeur
	public function __construct($id, $desc, $type, $meridien, $listeSymptomes)
	{
		$this->_id = $id;
		$this->_desc = $desc; 
        $this->_type = $type;
        $this->_meridien = $meridien;
        $this->_listeSymptomes = $listeSymptomes;
        
    }
    
    
    // Getter general
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    //Setter general
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
		
}
	
?>