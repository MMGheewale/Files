<?php
    include 'dbconnection1.php';
    $hash = $_GET['hash'];

    $query = "UPDATE `blocklistserver` SET `status`='open' WHERE hash='$hash'";
    $result = $conn->query($query)or die(mysql_error());

    $query = "delete from requests where hash='{$hash}'";
    $result = $conn->query($query);


    $query = "delete from guestdownloadtime where hash='{$hash}'";
    $result = $conn->query($query);


    echo "<script>window.location.href='managefiles.php'</script>";

    ?>