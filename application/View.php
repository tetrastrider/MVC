<?php
class View
{
    private $_controlador;
  
  public function __construct(Request $peticion) {
    $this->_controlador = $peticion->getControlador();
  }
  
    public function renderizar($vista,$pelao= false)
    {
            $cabeza=ROOT .'maqueta/cabeza.php';
            $rutaView = ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.php';
            $pie=ROOT .'maqueta/pie.php';
        if(is_readable($rutaView)){

            if($pelao==false){
            include($cabeza);
            }
            include_once $rutaView;
            if($pelao==false){
            include($pie);
            }
            $output = ob_get_contents();
            echo $output;
        } 
        else {
            throw new Exception('Error de vista');
        }
    }
 

} ?>
