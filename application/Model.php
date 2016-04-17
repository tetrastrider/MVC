<?php

class Model
{
    protected $conectar;
    
    public function __construct() {
        $this->conectar = new sdb();
    }
}

?>
