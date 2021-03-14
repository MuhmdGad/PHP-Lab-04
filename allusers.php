<!DOCTYPE html>
<html>

<head>
  <style>
    #students {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #students td,
    #students th {
      border: 1px solid #ddd;
      padding: 10px;

    }

    #students tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #students tr:hover {
      background-color: #ddd;
    }

    #students th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4c6caf;
      color: white;
    }

    #operation {
      text-decoration: none;
      text-align: center;
    }
  </style>

</head>

<body>

  <table id="students">
    <thead>
      <tr class="row-head">
        <th class="student-id">ID</th>
        <th class="first-name">First Name</th>
        <th class="last-name">Last Name</th>
        <th class="full-name">Full Name</th>
        <th class="gender">Gender</th>
        <th class="email">Email</th>
        <th class="phone">Phone</th>
        <th class="address">Address</th>
        <th class="password">Password</th>
        <th colspan=2 id="operation">Operations</th>
      </tr>
    </thead>

    <?php
         try {

            $conn = new PDO('mysql:host=localhost;dbname=student', "root", "");

            if($conn){
               
                $sth = $conn->prepare("SELECT * FROM students");
                $sth->execute();

                $result = $sth->fetchAll();
                $arrayLength = count($result);
                
                $i = 0;
                while ($i < $arrayLength){
                    $full_name = $result[$i]['first_name'] . ' ' . $result[$i]['last_name'];
                    echo "</tr>";
                    echo "<td>{$result[$i]['student_id']}</td>";
                    echo "<td>{$result[$i]['first_name']}</td>";
                    echo "<td>{$result[$i]['last_name']}</td>";
                    echo "<td>$full_name</td>";
                    echo "<td>{$result[$i]['gender']}</td>";
                    echo "<td>{$result[$i]['email']}</td>";
                    echo "<td>{$result[$i]['phone']}</td>";
                    echo "<td>{$result[$i]['address']}</td>";
                    echo "<td>{$result[$i]['password']}</td>";
                    echo "<td><a id='operation' href='./delete.php?student_id={$result[$i]['student_id']}'>Delete</a></td>";
                    echo "<td><a id='operation' href='./update.php?student_id={$result[$i]['student_id']}'>Update</a></td>";
                    echo "</tr>";
                    $i++;
                }

            }else{
                echo " Something went Wrong ...";
            }
           

        } catch(PDOException $e) {
                 echo "Connection failed: " . $e->getMessage();
     }


    ?>

  </table>

</body>

</html>