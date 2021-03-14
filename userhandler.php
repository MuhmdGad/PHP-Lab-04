<?php

    if(isset($_POST["login"])){


        try {

            $conn = new PDO('mysql:host=localhost;dbname=student', "root", "");

            if($conn){
               
                $email= $_POST['email'];
                $pass= $_POST['password'];

                $sth = $conn->prepare("SELECT email, password FROM students WHERE email = '{$email}' AND password = '{$pass}'  LIMIT 1");
                $sth->execute();

                $result = $sth->fetchAll();    

                if($result[0]['email'] == $email && $result[0]['password'] == $pass){
                    header('Location: allusers.php');
                }else{
                    header('Location: loginform.php?error=true');
                }

                
            }else{
                echo " Something went Wrong ...";
            }
           
        } catch(PDOException $e) {
                 echo "Connection failed: " . $e->getMessage();
     }

}
       
    
    if(isset($_POST["signup"])){
          
            try {

                $conn = new PDO('mysql:host=localhost;dbname=student', "root", "");

                if($conn){
                    $first_name = $_POST["first_name"];
                    $last_name = $_POST["last_name"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $phone = $_POST["phone"];
                    $address = $_POST["address"];
                    $gender = $_POST["gender"];
                    

                    var_dump($password);

                    $statement = "INSERT INTO students (first_name, last_name, email, password, phone,address,gender)
                                  VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$password}','{$phone}', '{$address}', '{$gender}')";
                    $conn -> exec($statement);

                    header('Location: allusers.php');
                }else{
                    echo " Something went Wrong ...";
                }
               

            } catch(PDOException $e) {
                     echo "Connection failed: " . $e->getMessage();
         }

    }

?>