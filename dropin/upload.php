<?php

session_start();
if ($_SESSION['id'] == "") {
    echo "<script>window.location.href='index.php'</script>";
    
}
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
                width: 220px;
                height: 45px;
                border-radius: 5px;
                background-color: transparent;
                border:1;

                font-weight: bolder;
            }
            .aa input[type="file"]{
                width: 250px;
                height: 35px;
                border-radius: 5px;
                background-color: transparent;
                border:1;

                font-weight: bolder;
            }
            .aa input[type="submit"]:hover{
                mouse:pointer;
            }
            .aa input[type="file"]{
        display: none;
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
        
        <style>
      .bb{
        text-align:center;
        padding:3%;
        border:thin solid black;
      }


      label{
        cursor:pointer;
      }
      #imageName{
        color:green;
      }
  </style>

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

                            <li class="nav-item"><a href="home.php">Home</a></li>
							
                            
                            <li class="nav-item active"><a href="upload.php">Upload</a></li>

                            <li class="nav-item">
                                <a href="managefiles.php">Manage Files</a>
                            </li>

                            <li class="nav-item">
                                <a href="filerequest.php">File Requests</a>
                            </li>
                            
                            <li class="nav-item"><a href="logout.php">LOGOUT</a></li>
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

                                <center>
								<form action="upload.php" method="post" enctype="multipart/form-data">
                                    <h2>Upload File</h2><br><br><br><br>
                                    <div class='bb'>
                                    <label for="fileToUpload">
                                        Select File <br/>
                                        <i class="fa fa-2x fa-camera"></i>
                                        <input id="fileToUpload" name="fileToUpload" type="file">
                                        <br/>
                                        <span id="imageName"></span>
                                    </label>
                                    </div>
                                    <script>
                                let input = document.getElementById("fileToUpload");
                                let imageName = document.getElementById("imageName")

                                input.addEventListener("change", ()=>{
                                    let inputImage = document.querySelector("input[type=file]").files[0];

                                    imageName.innerText = inputImage.name;
                                })
                            </script>
                                    <br><br><br>
                                    <input type="submit" value="Upload File" name="submit">
                                </form>
                                </center>

                            </div>
                            <?php
                                if(isset($_POST["submit"])) {
                                    $binaryData = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);

                                    include 'dbconnection.php';

                                    
                                    $name = $_FILES['fileToUpload']['name'];
                                    $hash = hash_file('md5', $_FILES["fileToUpload"]["tmp_name"]);
                                   
                                    $size = '1mb';
                                    
                                    $bytes = $_FILES['fileToUpload']['size'];
                                    $type = $_FILES['fileToUpload']['type'];
                                    //echo $bytes;
                                    
                                    if($bytes<="10000000"){
                                    function formatSizeUnits($bytes)
                                    {
                                        if ($bytes >= 1073741824)
                                        {
                                            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                                        }
                                        elseif ($bytes >= 1048576)
                                        {
                                            $bytes = number_format($bytes / 1048576, 2) . ' MB';
                                        }
                                        elseif ($bytes >= 1024)
                                        {
                                            $bytes = number_format($bytes / 1024, 2) . ' KB';
                                        }
                                        elseif ($bytes > 1)
                                        {
                                            $bytes = $bytes . ' bytes';
                                        }
                                        elseif ($bytes == 1)
                                        {
                                            $bytes = $bytes . ' byte';
                                        }
                                        else
                                        {
                                            $bytes = '0 bytes';
                                        }
                                
                                        return $bytes;
                                }
                                
                                
                                $size = strval(formatSizeUnits($bytes));
                                    

                                   $query="insert into files(hash,name,type,size,data,owner) values(:hash,:name,:type,:size,:data,:owner)";

                                    
                                    $step=$dbo->prepare($query);
                                    $step->bindParam(':hash',$hash,PDO::PARAM_STR, 50);
                                    $step->bindParam(':name',$name,PDO::PARAM_STR, 20);
                                    $step->bindParam(':type',$type,PDO::PARAM_STR, 20);
                                    $step->bindParam(':size',$size,PDO::PARAM_STR, 20);
                                    $step->bindParam(':data',$binaryData,PDO::PARAM_LOB);
                                    $step->bindParam(':owner',$owner,PDO::PARAM_STR, 50);

                                    include 'dbconnection1.php';
                                    $result = "insert into blocklistserver values('$hash','blocked')";
                                    $conn->query($result);

                                    if($step->execute()){

                                    echo "<br><br><center><font color='#4299DA'>"." File Uploded Sucessfully"." </font></center>";
                                    }
                                    else{
                                    echo " Not able to add data please contact Admin ";
                                    print_r($step->errorInfo()); 
                                    }
                                    }
                                    else{
                                        echo "<br><br><center><font color='#4299DA'>"." You cannot upload files bigger than 10 mb"." </font></center>";
                                        
                                    }
}
                                ?>
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