<?php
if(!isset($_SESSION)) 
{
    session_start();
}

include('../dbconnect.php');

$email = $_POST['email'];
$password = $_POST['password'];

$query = "select * from user where U_email = '$email' and U_password = '$password'";

/*echo $query;
exit();*/

$result  = mysqli_query($connection, $query);
$rows = mysqli_num_rows($result);

if($rows == 1)
{
    while($row = mysqli_fetch_array($result))
    {

        $loggedUser = array('Name' => $row['U_name'],
                            'Email' => $row['U_email']);
    }
    $_SESSION ['loggedUser'] = $loggedUser;   

    header('Location: ../dashboard/dashboard.php');   
}
else
{
    $message = "Please Enter Valid details";
    header('Location: login.php?Message='.$message); 
}



