<?php 
 $lastname = "";
 $firstname = "";
 $sql = "";
 $email = "";

 if (isset($_POST['searchlastname']))
 {
     $lastname =  $_POST['searchlastname'];
     $sql = "Delete from userinfo where lastname='" .$lastname . "';";
 }
 else if (isset($_POST['searchfirstname']))
 {
     $firstname = $_POST['searchfirstname'];
     $sql = "Delete from userinfo where firstname='" .$firstname . "';";
 }
 else if (isset($_POST['searchemail']))
 {
     $email = $_POST['searchemail'];
     $sql = "Delete from userinfo where email='" .$email . "';";
 }

 echo $sql;
 $server =  'localhost' ;
 $username = 'francis';
 $password = 'zxscxs';
 $dbname = 'signup';

 $connection = mysqli_connect($server,$username,$password,$dbname);

 if (!$connection){
     echo "problem connecting";
 } 
 else {
     //echo "connected successfully, ";
 }
 $query = mysqli_query($connection, $sql);

 if ($query){
     echo "Record Deleted: " . mysqli_affected_rows($connection);
    
     mysqli_close($connection);
 
    } else {
    echo "mysql_query error - couldn't delete row from signup table";
    mysqli_close($connection);
}



?>