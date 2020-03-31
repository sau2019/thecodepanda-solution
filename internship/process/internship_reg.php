

<?php


echo var_dump($_SERVER);


if(($_POST["mobile"]=="" || $_POST["mobile"]==null) && ($_POST["email"]=="" || $_POST["email"]==null))
{
   
?>
<center>

<h2 style="color:royalblue; padding:10px; font-size:25px;">Sorry, TreePassing is not Allowed.</h2>
</center>



<?php

}
else{
 
    
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$dob=$_POST["dob"];
$stream=$_POST["stream"];
$branch=$_POST["branch"];
$yop=$_POST["yop"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$c_address=$_POST["c_address"];
$h_address=$_POST["h_address"];
$position=$_POST["position"];

include 'connection.php';

if($conn){
    echo 'connected to database successfully.';
    $sql="INSERT INTO internform(Firstname, Middlename, Lastname, Email, Mobile, Dob, Branch, Stream, Yop, Home_add, Current_add, Position) VALUES('$fname','$mname','$lname','$email','$mobile', '$dob', '$branch', '$stream', '$yop', '$h_address','$c_address','$position')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo ' <br><h3>Thank you for applying internship with us<h3>';
    }
    else{
        echo ' <br>
        <h3>You have already submitted application.</h3>';
    }

   

}
else{

    echo 'Connection error due to ';

}



}

?>