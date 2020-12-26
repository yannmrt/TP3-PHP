<?php

class Personnage {

    private $_pseudo;
    private $_vie;

    // Dans la fonction suivante on construit l'objet et on rentre les valeurs suivantes :
    // pseudo : String
    // vie : Nombre
    public function __construct($pseudo, $vie) {
        $this->_pseudo = $pseudo;
        $this->_vie = $vie;
    }

    // Dans la fonction suivante nous affichons les informations du personnage sur la page web
    public function personnage() {
        echo "Bonjour je m'appel ".$this->_pseudo;
        echo ", j'ai " . $this->_vie . " vie(s)</br>";
    }

    // Dans la fonction suivante nous créeons une attaque
    public function attaquer() {

    }

    // Dans la fonction suivante nous allons défendre, on rentre les valeurs suivantes :
    // vAttaque = Nombre
    public function defense($vAttaque) {

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
$personnage2 = new personnage("Julien", 100); 
$personnage2->personnage();

?>


</body>
</html>

<?php 
// code source de la page 
highlight_file(__FILE__); 
?>