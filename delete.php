<?php
    $id = $_GET["student_id"];

    try {

        $conn = new PDO('mysql:host=localhost;dbname=student', "root", "");

        if($conn){
           
            $sth = $conn->prepare("DELETE FROM students WHERE student_id = $id");
            $sth->execute();


            header('Location: allusers.php');


           
        }else{
            echo " Something went Wrong ...";
        }
       

    } catch(PDOException $e) {
             echo "Connection failed: " . $e->getMessage();
 }
?>