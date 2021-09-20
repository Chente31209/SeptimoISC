<?php include 'index.php';
class MenuRestaurat  
{
    public $nombre;
    protected $precio;
    private $Categoria;
    
    public function __construct($nombre,$precio)
    {
        $this-> nombre = $nombre ;
        $this-> precio = $precio ;
    }
    
    public function GetNombre(){
        return $this-> Nombre;
    }
    public function GetPrecio(){
        return $this-> Precio;
    }
}

class Bebida extends MenuRestaurat
{
    
    public $medida;

    public function __construct($nombre,$precio,$medida)
    {
       parent:: __construct($nombre,$precio);
        $this->medida = $medida;

    }

    public function GetMedida()
    {
        return $this->medida ;
    }
}
    class Postre  extends MenuRestaurat  
    {
       
        public $peso=0;
       

        public function __construct($nombre,$precio, $peso)
        {
            parent::__construct($nombre,$precio);
            $this->peso=$peso;
            echo"Hi";
        }
        
        public function GetPeso(){
            return $this-> peso;
        }
    }

$Pos = new  Postre("Patel",300,1);

echo $Pos-> $nombre;
echo $Pos-> $precio;
echo $Pos-> $Categoria;
