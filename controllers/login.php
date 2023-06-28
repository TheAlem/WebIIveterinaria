<?php
class Login extends Controller
{
    protected $registroModel;

    function __construct($db)
    {
        parent::__construct();
        $this->registroModel = new RegistroModel($db);
        $this->view->render("login/index");
    }


    function registro()
    {
        $this->registroModel->registrarUsuario();

        // Redireccionar a la página de inicio de sesión después del registro exitoso
        header("Location: /login");
        exit();
    }
}

?>
