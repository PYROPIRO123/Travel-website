
<?php
   $insert = false;
   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "notrip";

   // Create a database connection
   $con = mysqli_connect($server, $username, $password, $database);
   echo "Success connecting to the db";

   // Check for connection success
   if(!$con){
       die("connection to this database failed due to" . mysqli_connect_error());
   }
   if(isset($_POST['name'])){
       // Set connection variables
   
       // Collect post variables
       $name = $_POST['name'];
       $gender = $_POST['gender'];
       $age = $_POST['age'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $desc = $_POST['desc'];
       $sql = "INSERT INTO notrip  (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
       if($con->query($sql) == true){
        echo "Successfully inserted";}
        echo "Successfully inserted";}
        ?>