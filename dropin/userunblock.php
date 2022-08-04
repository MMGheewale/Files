<?php
session_start();
if ($_SESSION['id'] == "") {
    echo "<script>window.location.href='index.php'</script>";
    
}

    include 'dbconnection1.php';
    $hash = $_GET['hash'];
    $ip = $_GET['ip'];

    $query = "UPDATE `requests` SET `status`='open' WHERE `hash`='$hash' and `ip`='$ip'";
    echo $query;
    $result = $conn->query($query) or die(mysql_error());
    echo "<script>window.location.href='filerequest.php'</script>";

    ?>