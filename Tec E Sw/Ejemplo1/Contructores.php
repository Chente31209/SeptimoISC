<?php include 'index.php';


    class MenuRestaurat 
    {
        
        public $Nombre = "1";
        public $Precio = 0;
        public $Categoria="1";

public function __construst($nombre,$precio,$categoria )
        {
            $this-> nombre = $Nombre ;
            $this-> precio = $Precio ;
            $this->categoria ;$Categoria;

        }
        
        public function GetNombre(){
            return $this-> Nombre;
        }
        public function GetPrecio(){
            return $this-> Precio;
        }
        public function GetCategoria(){
            return $this-> Categoria;
        }
    }

    $Bebia =  new MenuRestaurat("Jugo De Naraja",30,"Bebida");
    echo $Bebia->GetNombre();
    //echo $Bebia->GetPrecio();
    //echo $Bebia->GetCategoria();