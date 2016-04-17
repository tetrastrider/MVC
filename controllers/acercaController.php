<?php

class acercaController extends Controller
{
	private $acerca;
    public function __construct() {
        parent::__construct();
        $this->acerca = $this->loadModel('acerca');
    }
    
    public function index()
    {    
        $this->_view->renderizar('index');

        
    }
}
?>
