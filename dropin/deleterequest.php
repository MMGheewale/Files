<?php
session_start();
if ($_SESSION['id'] == "") {
    echo "<script>window.location.href='index.php'</script>";
    
}

    include 'dbconnection1.php';
    $hash = $_GET['hash'];
    $ip = $_GET['ip'];

    $query = "DELETE FROM requests WHERE `hash`='$hash' and `ip`='$ip'";
    $result = $conn->query($query) or die(mysql_error());
    echo "<script>window.location.href='filerequest.php'</script>";

    ?>