<?php
  
  class Persona {
    
    public $nombre;
    public $apellido;


    public function hablar (){
      
	    echo "soy" .$this->nombre .
		     "y estoy hablando";
	  
	}
    

}




$p= new Persona();
$p->nombre = "Micaela";
$p->apellido= " ";

$p1= new Persona();
$p1->nombre = "Juan";
$p1->apellido = "Perez";

echo $p->nombre;

echo  "hola" . $p->nombre . "<br>";
echo  "hola" . $p1->nombre ."<br>";

echo "hola" . $p->nombre . ",hola" . $p1->nombre;

echo $p->nombre . "<br>"; 

echo "<br>";
$p->hablar();
$p1->hablar();

?>