<?php
include("conexion.php");

if(isset($_POST['send'])) {
    
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1
    ) {
       
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']); 
        $email = trim($_POST['email']); 
        $message = trim($_POST['message']); 
        
        
        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje)
        VALUES ('$name', '$phone', '$email', '$message')";
        
        
        $resultado = mysqli_query($conex, $consulta);
        
        if ($resultado) {
            echo "Datos insertados correctamente.";
        } else {
            echo "Error al insertar datos: " . mysqli_error($conex);
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}

?>