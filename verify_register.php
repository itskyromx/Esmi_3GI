<?php
include "connect.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    //Verifica se o email está na database
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if($result->num_rows > 0){
        echo "Esse email já existe";
    }
    else{
        //Criação da conta
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$hashed_password')";
        if($conn->query($sql) === TRUE){
            echo "Conta criada com sucesso!";
        }
        else{
            echo "Erro!".$sql.$conn->error;
        }
        
    }
}
?>