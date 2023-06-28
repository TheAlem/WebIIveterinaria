<?php

class Usuario extends Controller
{
    function __construct()
    {
        // Llama al constructor de la clase padre
        parent::__construct();
        $this->view->render("usuario/index");
        //echo"Llamaste al controlador producto";
    }
}

?>