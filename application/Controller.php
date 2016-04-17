<?php

abstract class Controller
{
    protected $_view;
    protected $pedir;
    public function __construct() {
        $this->_view = new View(new Request);
        $this->pedir = new Request();
    }

    abstract public function index();

     protected function loadModel($modelo)
    {
        $modelo = $modelo . 'Model';
        $rutaModelo = ROOT . 'models' . DS . $modelo . '.php';
        
        if(is_readable($rutaModelo)){
            require_once $rutaModelo;
            $modelo = new $modelo;
            return $modelo;
        }
        else {
            throw new Exception('no se encontro el modelo');
        }
    }

    public function arg()
    {

        return $this->pedir->getArgs();

    }

  
}

?>
