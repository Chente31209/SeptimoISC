<?php include 'includes/header.php';

interface RestaurantInterface{
    public function getNombre();
    public function getPrecio():int;
    public function setPrecio($precio);
}
class MenuRestaurant implements RestaurantInterface {
    public $nombre; 
    protected $precio;

    public function __construct($nombre,$precio)  {
        $this->nombre=$nombre;
        $this->precio=$precio;
    }
    public function getNombre() 
    {
        return $this->nombre;
    }
    public function getPrecio():int //Comentarizar y descomentar con /*
    {
        return $this->precio;
    }    //Comentarizar y descomentarizar */
    public function SetPrecio(){
        $this->precio=$precio;
    } 

}
$menu=new MenuRestaurant('Platillo',100);
var_dump($menu);