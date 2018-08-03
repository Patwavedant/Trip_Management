<?php 

include('../dbconnect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$active = 1;

$querycheck = "select * from user where U_email = '$email'";

$result = mysqli_query($connection, $querycheck);

$rows = mysqli_fetch_assoc($result);

$existemail = $rows['U_email'];

if($existemail != '')
{
    $message1 = "User Already Exists";
    header('Location: registration.php?Message1='.$message1);
}
else
{
$query = "insert into user(U_name,U_email,U_mobile,U_password,U_active) 
                  values ('$name',
                         '$email',
                         '$mobile',
                         '$password',
                         '$active')";

/*echo $query;
exit();*/
$result = mysqli_query($connection, $query);
/*print_r($result);
exit();*/
if ($result == 1) 
{
    header('Location: login.php');
}
else
{
    $message = "Something Went Wrong";
    header('Location: registeration.php?Message='.$message);
}

}