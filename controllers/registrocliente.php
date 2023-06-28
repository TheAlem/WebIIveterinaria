<?php

class Registrocliente extends Controller{
    function __construct()
    {
        // Llama al constructor de la clase padre
        parent::__construct();
        $this->view->render("registrocliente/index");
        //echo"Llamaste al controlador producto";
    }
}

?>
