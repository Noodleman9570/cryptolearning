<?php
session_start();

if (!empty($_POST)) {

    if(!empty($_POST['mail']) && !empty($_POST['password'])){

        $mail = $_POST['mail'];
        $pss = $_POST['password'];
        
        include "conection.php";
        $Conexion = new Conexion;
        $Connect = $Conexion->getConnect();
        
        $sql = "SELECT * FROM login WHERE CORREO = '$mail' && CONTRASENA = '$pss' LIMIT 1";

        $res = $Connect->query($sql);

        if ($res->rowCount() > 0) {

            $rows = $Connect->query($sql, PDO::FETCH_ASSOC);
            $_SESSION['id'] = $row['id'];
            $_SESSION['correo'] = $row['CORREO'];
            $_SESSION['pais'] = $row['PAIS'];
            
            header("Location: ../views/SIM-HOME.php");
        } else {
            echo "<script>alert('datos incorrecto'); window.location = '../views/SIM-LOGIN.php';</script>";
        }
    } else {
        if (!empty($_POST['mail'])) {
            echo "<script>alert('debe ingresar un correo electronico') window.location = '../views/SIM-LOGIN.php';</script>";
        } else {
            echo "<script>alert('debe ingresar una contraseña') window.location = '../views/SIM-LOGIN.php';</script>";
        }
    }

} 
?>