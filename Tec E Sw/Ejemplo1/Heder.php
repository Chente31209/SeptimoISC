<?php include 'index.php';
class MenuRestaurat  
{
    public $nombre, $precio;
    protected $Categoria;
    
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
    public function GetCategoria(){
        return $this-> Categoria;
    }
    public function setCategoria($categoria)
    {
        $this->Categoria=$categoria;
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
           
        }
        
        public function GetPeso(){
            return $this-> peso;
        }
    }

$Pos = new  Postre("Patel",300,1);

echo $Pos-> $nombre;
echo $Pos-> $precio;
$Pos->setCategoria("Get");
echo $Pos->GetCategoria();;
