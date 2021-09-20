<?php include 'index.php';

    interface IMenuRestaurat{
        public function GetProdutoYNombre();
    }

    class MenuRestaurat implements IMenuRestaurat	 
    {
        public $Nombre = "Nombre del Producto";
        public $Precio = 0;

        public function GetProdutoYNombre()
        {
            echo  "el Producto ".$this->Nombre." Tiene un precio ".$this->Precio."<br/>";
             
        }
    }

    $Bebia =  new MenuRestaurat();
    $Postre =  new MenuRestaurat();
    $Corte =  new MenuRestaurat();
    
    $Bebia -> Nombre = "Jugo de Naranja";
    $Bebia -> Precio = 30;
    
    $Postre -> Nombre="Carlota";
    $Postre -> Precio = 15 ;

    $Corte -> Nombre="Ribay ";
    $Corte -> Precio = 1500 ;


    $Bebia -> GetProdutoYNombre();
    $Postre -> GetProdutoYNombre(); 
    $Corte -> GetProdutoYNombre(); 

   