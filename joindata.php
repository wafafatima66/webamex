<?php
        $con = new mysqli('localhost', 'root', '', 'join');

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $university=$_POST['university'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $programme=$_POST['programme'];
    $skill=$_POST['skill'];


    $sql="INSERT INTO `join_t`(`fname`, `lname`,`email`,`address`,`university`,`city`,`zip`,`programme`,`skill`) VALUES ('$fname','$lname','$email','$address','$university','$city','$zip','$programme','$skill')";
   
     if($con->query($sql)){
            
            echo "successful submit your request";
              }  
            else{
                echo "error in connection";
            }
header("refresh:6; url=index.php");

?>
