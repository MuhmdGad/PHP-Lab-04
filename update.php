<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #00000036;
    }

    * {
      box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
      padding: 16px;
      background-color: white;
    }

    .container {
      width: 40%;
      margin: auto;
      margin-top: 150px;
      border-radius: 10px;
      border-color: #red;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .registerbtn:hover {
      opacity: 1;
    }

    /* Add a blue text color to links */
    a {
      color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
      background-color: #f1f1f1;
      text-align: center;
    }

    .login {
      float: right;
      width: 10%;
    }
  </style>
</head>

<body>

  <?php

    try {

        $conn = new PDO('mysql:host=localhost;dbname=student', "root", "");

        if($conn){
            $id = $_GET["student_id"];

            $sth = $conn->prepare("SELECT * FROM students WHERE student_id = ${id}");
            $sth->execute();

            $result = $sth->fetchAll();

           
        }else{
            echo " Something went Wrong ...";
        }
       

    } catch(PDOException $e) {
             echo "Connection failed: " . $e->getMessage();
 }
?>

  <form action="handleupdate.php" method="POST">
    <div class="container">
      <h1>Update Your Info</h1>
      <p>Please Update your Info in this form.</p>

      <hr>

      <label for="first_name"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="first_name" id="first_name" value="<?= $result[0]["first_name"]?>" required>

      <label for="last_name"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="last_name" id="last_name" value="<?= $result[0]["last_name"]?>" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter your new Email" name="email" id="email" value="<?= $result[0]["email"]?>" required>

      <label for="phone"><b>Phone</b></label>
      <input type="text" placeholder="Enter your new phone" name="phone" id="phone" value="<?= $result[0]["phone"]?>" required>

      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter your new Address" name="address" id="address" value="<?= $result[0]["address"]?>" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" value="<?= $result[0]["password"]?>" required>

      <input type="hidden"  name="id" id="id" value="<?= $result[0]["student_id"]?>">

      <hr>

       <input type="submit" name="signup" class="registerbtn" value="Update">

    </div>

  </form>

</body>

</html>