<?php include 'index.php';


    class MenuRestaurat 
    {
        public $Nombre = "Nombre del Producto";
        public $Precio = 0;

        public function GetNombre(){
            return $this-> Nombre;
        }
        public function GetPrecio(){
            return $this-> Precio;
        }
        
    }

    $Bebia =  new MenuRestaurat();
    $Bebia -> Nombre = "Jugo de Naranja";
    $Bebia -> Precio = 30;
    echo $Bebia -> GetNombre()."<br>";
    echo $Bebia -> GetPrecio()."<br>";
    
    $Postre =  new MenuRestaurat();
    $Postre -> Nombre="Carlota";
    $Postre -> Precio = 15 ;
    echo $Postre -> GetNombre()."<br>";
    echo $Postre -> GetPrecio()."<br>";

    

   