<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
$owner = $_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">
    <head><style type="text/css">             #firstname{                 font-family: "Bauhaus 93";                 font-size: 40px;             }         </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.6.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>  
        <script type="text/javascript" src="js/Vegur_300.font.js"></script>
        <script type="text/javascript" src="js/PT_Sans_700.font.js"></script>
        <script type="text/javascript" src="js/PT_Sans_400.font.js"></script>
        <script type="text/javascript" src="js/atooltip.jquery.js"></script>
        <style type="text/css">
          table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}

            .aa input[type="text"]{
                width: 255px;
                height: 35px;
                border-radius: 5px;
                padding-left: 5px;
                background-color: transparent;
                border:1;


            }
            .aa input[type="password"]{
                width: 255px;
                height: 35px;
                border-radius: 5px;
                padding-left: 5px;
                background-color: transparent;	
                border:1;

            }
            .aa input[type="email"]{
                width: 255px;
                height: 35px;
                border-radius: 5px;
                padding-left: 5px;
                background-color: transparent;	
                border:1;

            }
            .aa input[type="submit"]{
                width: 190px;
                height: 35px;
                border-radius: 5px;
                background-color: transparent;
                border:1;

                font-weight: bolder;
            }
            .aa input[type="button"]{
                width: 190px;
                height: 35px;
                border-radius: 5px;
                background-color: transparent;
                border:1;

                font-weight: bolder;
            }
            .aa input[type="submit"]:hover{
                mouse:pointer;
            }
        </style>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>DROP IN</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!-- Slick slider -->
        <link href="assets/css/slick.css" rel="stylesheet">
        <!-- Gallery Lightbox -->
        <link href="assets/css/magnific-popup.css" rel="stylesheet">
        <!-- Skills Circle CSS  -->
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">


        <!-- Main Style -->
        <link href="style.css" rel="stylesheet">

        <!-- Fonts -->

        <!-- Google Fonts Raleway -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
        <!-- Google Fonts Open sans -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">


    </head>
    
    <body id="page5">


        <!--START SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- END SCROLL TOP BUTTON -->

        <!-- Start Header -->
        <header id="mu-hero">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light mu-navbar">
                    <!-- Text based logo -->
                  <a class="navbar-brand mu-logo" href="index.php"><p id="firstname"><span><i>DROP IN</i></span></p></a>
                    <!-- image based logo -->
                    <!-- <a class="navbar-brand mu-logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span><br/></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto mu-navbar-nav">

                        <?php
if ($owner != "")
{
?>
                            <li class="nav-item"><a href="home.php">Home</a></li>
                            <li class="nav-item"><a href="upload.php">Upload</a></li>
                            <li class="nav-item"><a href="managefiles.php">Manage Files</a></li>
                            <li class="nav-item"><a href="filerequest.php">File Requests</a></li>
                            <li class="nav-item"><a href="logout.php">LOGOUT</a></li>
                                <?php
}
else{
    ?>
    <li class="nav-item"><a href="index.php">Home</a></li>
    <li class="nav-item"><a href="register.php">Register</a></li>
    
<?php
}
?>
                            <li class="nav-item active"><a href="files.php">Download</a></li>
                            
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- End Header -->

        <!-- Start Page Header area -->
        <div id="mu-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-page-header-area">

                            <div class="aa">

                           <?php
include 'dbconnection1.php';
$hash = $_GET['hash'];
$query170 = "select * from blocklistserver where hash='{$hash}'";
$result70 = $conn->query($query170);
$row201 = mysqli_fetch_array($result70, MYSQLI_ASSOC);
$filestatus = $row201['status'];

$query175 = "select * from files where hash='{$hash}'"; // Allow user to download as file is open and user is registered
$result175 = $conn->query($query175);
$num175 = mysqli_num_rows($result175);

if($num175<1){?>
    <center><h2>Invalid download url</h2><center>
    <?php
}
else{

if ($owner != "")
{
    if ($filestatus == "open") //if file is blocked and user is registered
    
    {



?>
                <table align='center'>
                                <thead>
                                    <th>Name</th>
                                    <th>File Type</th>
                                    <th>Size</th>
                                </thead>
                                
                                <?php
            include 'dbconnection1.php';
            $query = "select * from files where hash='{$hash}'";
            $result = $conn->query($query);

?>

                                <tbody>
                                <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
?>
                                                                    <tr><td align="center"><?php echo $row['name'] ?></td>"
                                                                        <td align="center"><?php echo $row['type'] ?></td>
                                                                        <td align="right"><?php echo $row['size'] ?></td>
                                                                    <?php
            }
            echo " </tbody></table>";
        ?>
        <br><br>
                            <form action="" method="post" enctype="multipart/form-data">

                            <center><input type="submit" value="Download" name="submit177"></center>

                            </form>
                            <?php
                    if (isset($_REQUEST['submit177']))
                    {

                    $query201 = "select * from files where hash='{$hash}'";
                    $result201 = $conn->query($query201);
                    $row201 = mysqli_fetch_array($result201, MYSQLI_ASSOC);
                    $file201 = file_put_contents($row201['name'], $row201['data']);
                    $filename = $row201['name'];
                    $nametosend = $row201['name'];
                    echo "<script>window.location.href='generatelink.php?filename=$nametosend&hash=$hash'</script>";
}
    }
    else
    {
        $query197 = "select * from requests where hash='{$hash}' and  ip='{$owner}' and status='open'";
        $result197 = $conn->query($query197);

        $num197 = mysqli_num_rows($result197);
        if ($num197 > 0)
        { 
            
                                $query277 = "select * from files where hash='{$hash}'"; // Allow user to download as file is blocked but user has permission and user is registered
                                $result277 = $conn->query($query277);
                                $num277 = mysqli_num_rows($result277);

                        ?>
                                        <table align='center'>
                                                        <thead>
                                                            <th>Name</th>
                                                            <th>File Type</th>
                                                            <th>Size</th>
                                                        </thead>
                                                        
                                                        <?php
                                    include 'dbconnection1.php';
                                    $query = "select * from files where hash='{$hash}'";
                                    $result = $conn->query($query);
                        
                        ?>
                        
                                                        <tbody>
                                                        <?php
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                                    {
                        ?>
                                                                                            <tr><td align="center"><?php echo $row['name'] ?></td>"
                                                                                                <td align="center"><?php echo $row['type'] ?></td>
                                                                                                <td align="right"><?php echo $row['size'] ?></td>
                                                                                            <?php
                                    }
                                    echo " </tbody></table>";
                                
            
            
            ?><br><br>
                                <form action="" method="post" enctype="multipart/form-data">

                                    <center><input type="submit" value="Download" name="submit1"></center>

                                    </form>
                                    <?php
            if (isset($_REQUEST['submit1']))
            {

                $query201 = "select * from files where hash='{$hash}'";
                $result201 = $conn->query($query201);
                $row201 = mysqli_fetch_array($result201, MYSQLI_ASSOC);
                $file201 = file_put_contents($row201['name'], $row201['data']);
                $filename = $row201['name'];

                $nametosend = $row201['name'];
                echo "<script>window.location.href='generatelink.php?filename=$nametosend&hash=$hash'</script>";
            }
        }
        else
        {
            $query211 = "select * from requests where hash='{$hash}' and  ip='{$owner}' and status='blocked'";
            $result211 = $conn->query($query211);

            $num123 = mysqli_num_rows($result211);
            if ($num123 > 0)
            {
                echo "Your request is not acepted. Please check later...";
            }
            else
            { ?>
                                    <center>
                                        <h3>This file is locked by the owner of the file</h3><br>
                                        <h4>Send request with message to ask permission from the owner</h4><br><br>
                                    <form action="" method="post">
                                        <input type="textbox" name="message"><br><br>
                                        <input type="submit" name="submit4" value="Send Message" >
                                    </center>
                                        <?php
                if (isset($_REQUEST['submit4']))
                {
                    $query229 = "select * from files where hash='{$hash}'";
                    $result229 = $conn->query($query229);
                    $row229 = mysqli_fetch_array($result229, MYSQLI_ASSOC);
                    $hash_owner = $row229['owner'];
                    $query230 = "insert into requests values('$hash','$owner','{$_POST['message']}','blocked','$hash_owner')";
                    $result230 = $conn->query($query230);
                    echo "<script>window.location.href='download.php?hash=$hash'</script>";
                }
            }
        }
    }

}
else
{ //if user is unregistered
    $localIP = getHostByName(getHostName());

    if ($filestatus == "open") //if { user is unregistered } { file permission is open }
    
    {
        $query277 = "select * from guestdownloadtime where hash='{$hash}' and ip='$localIP'";
        $result277 = $conn->query($query277);
        $num277 = mysqli_num_rows($result277);
        if ($num277 < 1)                        //if { user is unregistered } { file permission is open } { user acessing first time }
        {
?>
                <table align='center'>
								<thead>
                                    <th>Name</th>
                                    <th>File Type</th>
                                    <th>Size</th>
                                </thead>
                                
                                <?php
            include 'dbconnection1.php';
            $query = "select * from files where hash='{$hash}'";
            $result = $conn->query($query);

?>

                                <tbody>
                                <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
?>
                                                                    <tr><td align="center"><?php echo $row['name'] ?></td>"
                                                                        <td align="center"><?php echo $row['type'] ?></td>
                                                                        <td align="right"><?php echo $row['size'] ?></td>
                                                                    <?php
            }
            echo " </tbody></table>";
?>						
				<br><br><br>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <center><input type="submit" value="Download" name="submit289"></center>
                                </form>
                                                        
                                <?php
            if (isset($_REQUEST['submit289']))
            {
                
               // echo "<script>window.location.href='makedownload.php?hash=$hash'</script>";
               include "makedownload.php";
               echo "<script>window.location.href='slowgeneratelink.php?filename=$nametosend&hash=$hash'</script>";

            }
        }
        else        //if { user is unregistered } { file permission is open } { user acessing second time }
        {
            $query291 = "select * from guestdownloadtime where hash='{$hash}' and  ip='{$localIP}'";//here
            $result291 = $conn->query($query291);
            $row291 = mysqli_fetch_array($result291, MYSQLI_ASSOC);

            date_default_timezone_set('Europe/Berlin');

            $date1 = strtotime($row291['time']);
            $date2 = strtotime(date("Y-m-d H:i:s"));

            include 'caltimediff.php';

            //echo $row291['time'];

            

            if ($dminutes >= 10 or $dhours > 1 or $ddays > 1 or $dmonths > 1 or $dyears > 1) //Check if user acesses this file 10 minutes ago if yes the allow them to download file
            
            {
?>
                                <table align='center'>
                                <thead>
                                    <th>Name</th>
                                    <th>File Type</th>
                                    <th>Size</th>
                                </thead>
                                
                                <?php
                include 'dbconnection1.php';
                $query = "select * from files where hash='{$hash}'";
                $result = $conn->query($query);

?>

                                <tbody>
                                <?php
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
?>
                                                                    <tr><td align="center"><?php echo $row['name'] ?></td>"
                                                                        <td align="center"><?php echo $row['type'] ?></td>
                                                                        <td align="right"><?php echo $row['size'] ?></td>
                                                                    <?php
                }
                echo " </tbody></table>";
?>						
                <br><br><br>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <center><input type="submit" value="Download" name="submit357"></center>
                                </form>
                                                        
                                <?php
                if (isset($_REQUEST['submit357']))
                {
                    //echo "<script>window.location.href='makedownload.php?hash=$hash'</script>";
                    include "makedownload.php";
                    echo "<script>window.location.href='slowgeneratelink.php.php?filename=$nametosend&hash=$hash'</script>";
                }
            }
            else
            {   
                echo "you downloded the file ".$dminutes."minutes ago. Please retry after 10 minutes wait time is over";
                include 'test.php';
            }

        }

    }//if { user is unregistered } { file permission is blocked }
    else
    {

        $query372 = "select * from requests where hash='{$hash}' and  ip='{$localIP}'";
        $result372 = $conn->query($query372);

        $num372 = mysqli_num_rows($result372);
        if ($num372 < 1)                       //if { user is unregistered } { file permission is blocked } { user is requesting file first time }
        {
?>
                            <center>
                            <form action="" method="post">
                                <input type="textbox" name="message"><br><br>
                                <input type="submit" name="submit4" value="Send Message" >
                            </font>
                            </center>
                                <?php
                if (isset($_REQUEST['submit4']))
                {
                $query229 = "select * from files where hash='{$hash}'";
                $result229 = $conn->query($query229);
                $row229 = mysqli_fetch_array($result229, MYSQLI_ASSOC);
                $hash_owner = $row229['owner'];
                $localIP = getHostByName(getHostName());
                $query230 = "insert into requests values('$hash','$localIP','{$_POST['message']}','blocked','$hash_owner')";
                $result230 = $conn->query($query230);
                echo "<script>window.location.href='download.php?hash=$hash'</script>";
                }
        }
        else                    //if { user is unregistered } { file permission is blocked } { user is requesting file second time }
        { 
            


            $query408 = "select * from requests where hash='{$hash}' and  ip='{$localIP}' and status='blocked'";
            $result408 = $conn->query($query408);
            $num408 = mysqli_num_rows($result408);
            if ($num408 >0)                             //if { user is unregistered } { file permission is blocked } { user is still blocked }
                                {
                                    echo "Your request is not acepted. Please check later...";

                                }
                                else{                       //if { user is unregistered } { file permission is blocked } { user is not blocked }
                                
                                    $query451 = "select * from guestdownloadtime where hash='{$hash}' and  ip='{$localIP}'";//here
                                    $result451 = $conn->query($query451);
                                    $row451 = mysqli_fetch_array($result451, MYSQLI_ASSOC);
                        
                                    date_default_timezone_set('Europe/Berlin');
                        
                                    $date1 = strtotime($row451['time']);
                                    $date2 = strtotime(date("Y-m-d H:i:s"));
                        
                                    include 'caltimediff.php';
                        
                                    //echo $row451['time'];
                        
                                    //printf("          %d years, %d months, %d days, %d hours, " . "%d minutes, %d seconds", $dyears, $dmonths, $ddays, $dhours, $dminutes, $dseconds);
                        
                                    if ($dminutes >= 10 or $dhours > 1 or $ddays > 1 or $dmonths > 1 or $dyears > 1) //Check if user acesses this file 10 minutes ago if yes the allow them to download file
                                    
                                    {
                        ?>
                                                        <table align='center'>
                                                        <thead>
                                                            <th>Name</th>
                                                            <th>File Type</th>
                                                            <th>Size</th>
                                                        </thead>
                                                        
                                                        <?php
                                        include 'dbconnection1.php';
                                        $query = "select * from files where hash='{$hash}'";
                                        $result = $conn->query($query);
                        
                        ?>
                        
                                                        <tbody>
                                                        <?php
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                                        {
                        ?>
                                                                                            <tr><td align="center"><?php echo $row['name'] ?></td>"
                                                                                                <td align="center"><?php echo $row['type'] ?></td>
                                                                                                <td align="right"><?php echo $row['size'] ?></td>
                                                                                            <?php
                                        }
                                        echo " </tbody></table>";
                        ?>						
                                        <br><br><br>
                                                        <form action="" method="post" enctype="multipart/form-data">
                                                            <center><input type="submit" value="Download" name="submit526"></center>
                                                        </form>
                                                                                
                                                        <?php
                                        if (isset($_REQUEST['submit526']))
                                        {
                                           // echo "<script>window.location.href='makedownload.php?hash=$hash'</script>";
                                           include "makedownload.php";
                                           echo "<script>window.location.href='slowgeneratelink.php?filename=$nametosend&hash=$hash'</script>";
                                        }
                                    }
                                    else        //user need to wait 10 minutes to download file
                                    {
                                        echo "You downloded the file ".$dminutes."minutes ago. Please retry after 10 minutes wait time is over";
                                        include 'test.php';
                                    }
                                }

            }
        }
    }
}
?>
                            

                    
                            </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <!-- End Page Header area -->

                                                    <!-- Start Breadcrumb -->

                                                    <!-- End Breadcrumb -->


                                                    <!-- Start main content -->
                                                    <main>
                                                        <!-- Start About -->


                                                        </div>
                                                        </div>
                                                        </div>
                                                        <!-- Start Feature Content -->
                                                        </div>
                                                        </div>
                                                        </div>
                                                        </div>
                                                        </section>
                                                        <!-- End About -->

                                                        <!-- Start Skills -->

                                                        <!-- End Team -->

                                                        <!-- Start Clients -->
                                                        <div id="mu-clients">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="mu-clients-area">

                                                                            <!-- Start Clients brand logo -->
                                                                            <div class="mu-clients-slider">

                                                                                <div class="mu-clients-single">
                                                                                    <img src="assets/images/client-brand-1.jpg" alt="Brand Logo">
                                                                                </div>

                                                                                <div class="mu-clients-single">
                                                                                    <img src="assets/images/client-brand-2.jpg" alt="Brand Logo">
                                                                                </div>

                                                                                <div class="mu-clients-single">
                                                                                    <img src="assets/images/client-brand-3.jpg" alt="Brand Logo">
                                                                                </div>

                                                                                <div class="mu-clients-single">
                                                                                    <img src="assets/images/client-brand-4.jpg" alt="Brand Logo">
                                                                                </div>

                                                                                <div class="mu-clients-single">
                                                                                    <img src="assets/images/client-brand-5.jpg" alt="Brand Logo">
                                                                                </div>

                                                                                <div class="mu-clients-single">
                                                                                    <img src="assets/images/client-brand-6.jpg" alt="Brand Logo">
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Clients brand logo -->

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Clients -->
                                                        <footer id="mu-footer">
                                                            <div class="mu-footer-bottom">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mu-footer-bottom-area">
                                                                                <p class="mu-copy-right">&copy; Copyright 2022 <a rel="nofollow" href="index.php">Drop In</a>. All right reserved.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </footer>
                                                        <!-- End footer -->

                                                        <!-- JavaScript -->
                                                        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
                                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
                                                        <!-- Slick slider -->
                                                        <script type="text/javascript" src="assets/js/slick.min.js"></script>
                                                        <!-- Progress Bar -->
                                                        <script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
                                                        <!-- Filterable Gallery js -->
                                                        <script type="text/javascript" src="assets/js/jquery.filterizr.min.js"></script>
                                                        <!-- Gallery Lightbox -->
                                                        <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
                                                        <!-- Counter js -->
                                                        <script type="text/javascript" src="assets/js/counter.js"></script>
                                                        <!-- Ajax contact form  -->
                                                        <script type="text/javascript" src="assets/js/app.js"></script>


                                                        <!-- Custom js -->
                                                        <script type="text/javascript" src="assets/js/custom.js"></script>

                                                        <!-- About us Skills Circle progress  -->
                                                        <script>
                                                            // First circle
                                                            new Circlebar({
                                                                element : "#circle-1",
                                                                type : "progress",
                                                                maxValue:  "90"
                                                            });
		
                                                            // Second circle
                                                            new Circlebar({
                                                                element : "#circle-2",
                                                                type : "progress",
                                                                maxValue:  "84"
                                                            });

                                                            // Third circle
                                                            new Circlebar({
                                                                element : "#circle-3",
                                                                type : "progress",
                                                                maxValue:  "60"
                                                            });

                                                            // Fourth circle
                                                            new Circlebar({
                                                                element : "#circle-4",
                                                                type : "progress",
                                                                maxValue:  "74"
                                                            });
                                                            $(window).load(function(){
                                                                $('#slider')._TMS({
                                                                    banners:true,
                                                                    waitBannerAnimation:false,
                                                                    preset:'diagonalFade',
                                                                    easing:'easeOutQuad',
                                                                    pagination:true,
                                                                    duration:400,
                                                                    slideshow:8000,
                                                                    bannerShow:function(banner){
                                                                        banner.css({marginRight:-500}).stop().animate({marginRight:0}, 600)
                                                                    },
                                                                    bannerHide:function(banner){
                                                                        banner.stop().animate({marginRight:-500}, 600)
                                                                    }
                                                                })
                                                            })
                                                        </script>

                                                        </body>
                                                        </html>
