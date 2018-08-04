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

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Add Trip</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu--><a class="app-header__logo" href="http://www.learnatrise.in/">Rise | RSPL</a>
        <ul class="app-nav">
            <li class="app-search">
                <input class="app-search__input" type="search" placeholder="Search">
                <button class="app-search__button"><i class="fa fa-search"></i></button>
            </li>
            <!--Notification Menu-->

            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                    <li><a class="dropdown-item" href="myprofile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="../registration/login.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">

        <ul class="app-menu">
            <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Trip Manager</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="addtrip.php"><i class="icon fa fa-circle-o"></i> Add Trip</a></li>
                    <li><a class="treeview-item" href="searchtrip.php"><i class="icon fa fa-circle-o"></i> Search Trip</a></li>

                </ul>
            </li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">

                    <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
                </ul>
            </li>
        </ul>
    </aside>
    <main class="app-content">

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="addtripaction.php" method="post">
                                <div class="form-group">
                                    <label for="trname">Trip Name</label>
                                    <input type="text" class="form-control" name="trname" id="trname" placeholder="Enter trip name" required>
                                </div>
                                <div class="form-group">
                                    Start date:
                                    <input type="date" name="sdate">
                                    End date:
                                    <input type="date" name="edate">
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelect2">Select Travellers</label>

                                    <?php include('../dbconnect.php');

                                        $query="select U_id,U_name from user";
                                        
                                        $result=mysqli_query($connection, $query);
                                        //$row=mysqli_fetch_array($result);
                                    ?>
                                    <select id="framework" name="framework[]" multiple class="form-control">
                                    
                                      <?php                                            
                                                while($row=mysqli_fetch_array($result))
                                                {
                                    ?>
                                               <option value="<?php echo $row['U_id']; ?>"> <?php echo $row['U_name']; ?></option>           
                                       <?php
                                        
                                            }
                                        
                                        ?>
                                    
                                     </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputFile">Trip Image</label>
                                    <input class="form-control-file" id="trimage" type="file" name="trimage" aria-describedby="fileHelp">
                                </div>
    

                                <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input"  name="isActive" />Check</label>
                                </div>

                                <div class="tile-footer">
                                    <button type="submit" class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->

</body>

</html>
