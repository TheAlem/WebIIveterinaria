<?php
class Controller
{
    protected $view;
    function __construct()
    {
        //echo "<p>Controlador Base</p>";
        $this->view = new View(); //Objecto Vista
    }
}

?>