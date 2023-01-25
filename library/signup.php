<?php

session_start();

if (!empty($_POST)) {
    
    if(!empty($_POST['mail']) && !empty($_POST['password'])){

        $mail = $_POST['mail'];
        $pss = $_POST['password'];
        $pais = $_POST['pais'];
        
        include "conection.php";
        $Conexion = new Conexion;
        $Connect = $Conexion->getConnect();

        $sqlI = "INSERT INTO login(CORREO, CONTRASENA, PAIS) VALUES('$mail', '$pss', '$pais')";
        $sqlS = "SELECT * FROM login WHERE CORREO = '$mail' && CONTRASENA = '$pss' LIMIT 1";
        

        $res = $Connect->prepare($sqlI);

        
        if ($res->execute()) {

            $rows = $Connect->query($sqlS, PDO::FETCH_ASSOC);
            $_SESSION['id'] = $row['id'];
            $_SESSION['correo'] = $row['CORREO'];
            $_SESSION['pais'] = $row['PAIS'];
            $_SESSION['noob'] = true;
            
            header("Location: ../views/SIM-SIGN2.php");
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