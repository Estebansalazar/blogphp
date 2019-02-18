<?php
session_start();

//si me llegan los datos del formulario isset($_POST['submit']
if (isset($_POST)) {

    //?recogemos valores del formulario

    //!ifset comprueba si una variable existe
    //!operadores ternarios, se explica asi "isset($_POST['nombre'])" si esta variable existe
    //! pasale lo que recibimos por post $_POST['nombre']  si no ponlo asignale el false

    $nombre= isset($_POST['nombre'])? $_POST['nombre'] : false ;
    $apellidos=isset($_POST['apellidos'])? $_POST['apellidos'] : false ;
    $email=isset($_POST['email'])? $_POST['email'] : false ;
    $password=isset($_POST['password'])? $_POST['password'] : false ;

    //!array de errores
    $errores=array();



    //!validación de datos
    //!si la variable nombre no está vacía y no es numérica
    if (!empty ($nombre) && !is_numeric($nombre)) {
        $nombre_validate=true;
    }else {
        $nombre_validate=false;
        $errores['nombre']="el nombre no es valido";
    }

    if (!empty ($apellidos) && !is_numeric($apellidos)) {
        $apellidos_validate=true;
    }else {
        $apellidos_validate=false;
        $errores['apellidos']="el apellido no es valido";
    }
    
    //Si el email no está vacío y el filtro es verdadero almacena la variable como true
    if (!empty ($email) && filter_var($email,FILTER_VALIDATE_EMAIL) !== false)
    {
        $email_validate=true;
    }else {
        $email_validate=false;
        $errores['email']="el email no es valido";
    }

    if (!empty ($password))
    {
        $password_validate=true;
    }else {
        $password_validate=false;
        $errores['password']="Contraseña vacía";
    }

    //?solo ingresamos datos en la db cuando no haya errores
    $guardar_usuario=false;
    if (count($errores)==0) {
        //si no hay errores ingresamos datos a la db
        $guardar_usuario=true;
    }else {
        //alamaceno todos los errores, con el array de errores
        $_SESSION['errores']=$errores;
        header('Location: index.php');
    }
    

    
}

echo "<pre>";
var_dump($errores);
echo "</pre>";

?>