<?php include 'index.php';
    class Bebida 
    {
        
        public $Nombre = "1";
        public $Precio = 0;
        public $Medida=0;

        public function __construst($nombre,$precio,$medida )
        {
            $this-> nombre = $Nombre ;
            $this-> precio = $Precio ;
            $this->Medida = $medida;

        }
        
        public function GetNombre(){
            return $this-> Nombre;
        }
        public function GetPrecio(){
            return $this-> Precio;
        }
        public function GetMedida(){
            return $this->Medida ;
        }
    }

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

    class Postre  
    {
        
        public $Nombre = "1";
        public $Precio = 0;
        public $Peso;
       

        public function __construst($nombre,$precio, $peso)
        {
            $this-> Nombre = $Nombre ;
            $this-> Precio = $Precio ;
            $this->Peso=$peso;
           

        }
        
        public function GetNombre(){
            return $this-> Nombre;
        }
        public function GetPrecio(){
            return $this-> Precio;
        }
        public function GetCategoria(){
            return $this-> Peso;
        }
    }

$Pos = new  Postre("Patel",300,1);
var_dump($Pos);
echo "<br/>";
$bebida =  new Bebida("Jugo de naraja ",30,300);
var_dump($bebida);