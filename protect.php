<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die(header("location: pagina_de_login.php"));
}

?>