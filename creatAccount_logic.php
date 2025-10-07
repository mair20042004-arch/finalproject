<?php
include "connectiOnDataBase.php";

function validateData($data){
    trim($data);
    $data = htmlspecialchars($data);

}

if($connection->error == false){

    if(isset($_POST["Create_Account"])){
        $name = validateData($_POST["name"]);
        $email = validateData($_POST["email"]);
        $password = password_hash (validateData($_POST["password"]),PASSWORD_BCRYPT);  


        $sql = "INSERT INTO users(name,email,password)
                    VALUES ('$name','$email','$password')";

        $result = $connection->query($sql);
        if($result==true){
            header("location:login_page.php?statusCode=201");
            //echo "insertion done";
        }else{
            echo "fail";
        }

    }
}

?>