<?php

class Personnage {

    private $_pseudo = "Inconnu";
    private $_vie = 0;

    public function __construct($pseudo, $vie) {
        $this->_pseudo = $pseudo;
        $this->_vie = $vie;
    }

    public function personnage() {
        echo "Bonjour je m'appel ".$this->_pseudo;
        echo ", j'ai " . $this->_vie . " vie(s)</br>";
    }

    public function attaquer() {
        
    }

}


?>
<!DOCTYPE html>
<html>
<head> 
   <title>Exercices 4</title>
</head>
<body>

<?php 

$personnage = new personnage("Vincent", 100); 
$personnage->personnage();

?>


</body>
</html>

<?php 
// code source de la page 
highlight_file(__FILE__); 
?>