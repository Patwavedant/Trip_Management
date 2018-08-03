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
    header('Location:index.php');
    exit;
}
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>

            <title>Dashboard</title>
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
                           <li><a class="treeview-item" href="searchtrip.php"><i class="icon fa fa-circle-o"></i>Search Trip</a></li>
                            <li><a class="treeview-item" href="addtrip.php"><i class="icon fa fa-circle-o"></i>Add Trip</a></li>
                            

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
                <div class="app-title">
                    <div>
                        <h1><i class="fa fa-dashboard"></i> Dashboard</h1>

                    </div>
                    <ul class="app-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                            <div class="info">
                                <h4>Trips</h4>
                                <p><b>5</b></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                            <div class="info">
                                <h4>Uploades</h4>
                                <p><b>10</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                            <div class="info">
                                <h4>Stars</h4>
                                <p><b>500</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="tile">
                            <h3 class="tile-title">Monthly Sales</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tile">
                            <h3 class="tile-title">Support Requests</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                                <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
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
            <script type="text/javascript" src="../js/plugins/chart.js"></script>
            <script type="text/javascript">
                var data = {
                    labels: ["January", "February", "March", "April", "May"],
                    datasets: [{
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86]
                        }
                    ]
                };
                var pdata = [{
                        value: 300,
                        color: "#46BFBD",
                        highlight: "#5AD3D1",
                        label: "Complete"
                    },
                    {
                        value: 50,
                        color: "#F7464A",
                        highlight: "#FF5A5E",
                        label: "In-Progress"
                    }
                ]

                var ctxl = $("#lineChartDemo").get(0).getContext("2d");
                var lineChart = new Chart(ctxl).Line(data);

                var ctxp = $("#pieChartDemo").get(0).getContext("2d");
                var pieChart = new Chart(ctxp).Pie(pdata);

            </script>
            <!-- Google analytics script-->
            <script type="text/javascript">
                if (document.location.hostname == 'pratikborsadiya.in') {
                    (function(i, s, o, g, r, a, m) {
                        i['GoogleAnalyticsObject'] = r;
                        i[r] = i[r] || function() {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                        a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                        a.async = 1;
                        a.src = g;
                        m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                    ga('create', 'UA-72504830-1', 'auto');
                    ga('send', 'pageview');
                }

            </script>
        </body>

        </html>
