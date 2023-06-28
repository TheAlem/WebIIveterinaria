<?php

class Registro extends Controller
{
    function __construct()
    {
        // Llama al constructor de la clase padre
        parent::__construct();
        $this->view->render("registro/index");
        //echo"Llamaste al controlador producto";
    }
}

?>