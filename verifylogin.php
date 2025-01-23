<?php
session_start();
include "connect.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
}

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if(isset($_POST["login"])){
    //Verifica se todos os espaços estão preenchidos
    if(!empty($_POST["email"]) && !empty($_POST["password"])){
        //Verifica se a conta existe através do email
        if($result->num_rows > 0){ 
            $user = $result->fetch_assoc();
            //Verifica se a palavra passe está certa
            if(password_verify($password,$user['password'])){ 
                header("Location: index.php");
            }
            else{
                echo "Palavra passe incorreta!";
            }
        }
        else{
            echo "Esse email não existe, crie a sua conta primeiro";
        }
    }
    else{
        echo "Preenche os espaços vazios!"; 
    }
}
$_SESSION["id"] = $id;
?>