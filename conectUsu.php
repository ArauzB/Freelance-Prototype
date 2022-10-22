<?php
include'db.php';
session_start();

$_SESSION['primero'] = null;
$_SESSION['segundo'] = null;

if(isset($_POST['regis'])){

        try {

        $usuari = $_POST['Usuario'];
        $emaill = $_POST['Email'];
        $contraa = $_POST['Contra'];

            do {
                $num = rand(1000,9999);
                $query = mysqli_query($conect, "SELECT * FROM registrar WHERE Codigo ='".$num."'");
                $nr = mysqli_num_rows($query);
                $numdos = $num;
            } while ($nr > 0);
            
            
    
            mysqli_query($conect, "INSERT INTO registrar VALUES('" .$numdos. "', '" .$usuari. "', '" .$emaill. "', '" .$contraa. "')");
            mysqli_query($conect, "INSERT INTO datos VALUES('" .$numdos. "', '', '', '', '', '', '', '', '', '".$usuari."')");
            mysqli_close($conect);
    
            $_SESSION['primero'] = $usuari;
            $_SESSION['segundo'] = $contraa;
    
            header("Location: index.php");
        } catch (Exception $ex) {
            echo $ex = 1;
        }
    }

if(isset($_POST['ingre'])){

    try {

        $vusuario=$_POST['Usuariod'];
    $vcontra=$_POST['Contrad'];
    
    $query = mysqli_query($conect, "SELECT * FROM registrar WHERE Usuario ='".$vusuario."' and Pass ='".$vcontra."'");
    $nr = mysqli_num_rows($query);
    
    if($nr == 1){

        $_SESSION['primero'] = $vusuario;
        $_SESSION['segundo'] = $vcontra;
        header("Location: index.php");

    }else if($nr == 0)
    {
        header("Location: index.php");
    }

    } catch (Exception $ex) {
        echo $ex = 1;
    }

    
}

?>