<?php

    echo $_POST['first_name'];


try {

    $conn = new PDO('mysql:host=localhost;dbname=student', "root", "");

    if($conn){
       
        $stat = $conn->prepare("UPDATE students SET first_name = '{$_POST['first_name']}',
                                                    last_name  = '{$_POST['last_name']}',
                                                    email      = '{$_POST['email']}',
                                                    phone      = '{$_POST['phone']}'
                                                    address   = '{$_POST['address']}'
                                                    password   = '{$_POST['password']}'

                                WHERE student_id = {$_POST['student_id']}");

        // $stat->execute([$first_name, $last_name, $gender, $student_id]);
        $stat->execute([$first_name, $last_name, $email, $phone,$address,$password]);

        header('Location: allusers.php');


       
    }else{
        echo " Something went Wrong ...";
    }
   

} catch(PDOException $e) {
         echo "Connection failed: " . $e->getMessage();
}


?>