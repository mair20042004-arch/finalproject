<?php
session_start();

include "connectiOnDataBase.php";
if ($connection->error == false){
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password =$_POST["password"];
        $sql = "SELECT * FROM users WHERE email ='$email' and password ='$password'";
        $result = $connection->query($sql);
        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            if(password_verify($password,$data["password"])){
                $_SESSION["authUser"] = $data;
                header("location:DashboardUi.php");
                //echo "login done";
            }else{
                echo "login faile";
            }
        }else{
            echo "login faile"; 
        }
    }
}
?>
