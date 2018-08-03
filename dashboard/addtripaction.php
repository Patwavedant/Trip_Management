<?php
// keep this code everywhere after the login page // all pages//

if (!isset($_SESSION)) 
{
    session_start();
}
$loggedUser = isset($_SESSION['loggedUser']) ? $_SESSION['loggedUser'] : array();
//print_r($loggedUser);
//exit();
?>
    <?php
if(!isset($_SESSION['loggedUser'])) 
{
    header('Location:../index.php');
    exit;
}
?>

<?php
 include('../dbconnect.php');
 
 $tname = $_POST['trname'];
 $tsdate=$_POST['sdate'];
 $tedate=$_POST['edate']; 
 @$trimage=$_POST['trimage'];
 $isActive=$_POST['isActive'];
 
 $response = array();
 $query = "SELECT U_id FROM user WHERE U_name= '$tname'";
 $result = mysqli_query($connection,$query);
 $rows = mysqli_fetch_array($result);
 $id = $rows['U_id'];

 $query1 = "INSERT INTO trip(t_name, t_sdate,t_edate,t_image, t_isActive) 
  			  VALUES('$tname', '$tsdate', '$tedate', '$trimage', '$isActive')";

			 if(mysqli_query($connection, $query1)){
                 
				$response['status']=1;
                $response['message']="Registartion Successful";
                echo json_encode($response);

                $query = "SELECT t_id FROM trip WHERE t_name= '$tname'";
                $result = mysqli_query($connection,$query);
                $rows = mysqli_fetch_array($result);
                $id = $rows['t_id'];

                if(isset($_POST["framework"])){
                    $framework = '';
                    foreach($_POST["framework"] as $row){
                        $framework = $row;  
                        $query = "INSERT INTO traveler(t_id,U_id) VALUES('$id','$framework')";
                        if(mysqli_query($connection, $query)){
                            header('Location: dashboard.php');
                        }
                                
                    }
							
                }
			 }
			 else{
                 $response['status']=0;
                 $response['message']="Registartion not Successful";
                 echo json_encode($response);	
             }	
?>