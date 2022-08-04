<?php
        include 'dbconnection1.php';
        $hash = $_GET['hash'];
    $query = "UPDATE `blocklistserver` SET `status`='blocked' WHERE `hash`='$hash'";
    $result = $conn->query($query) or die(mysql_error());
    echo "<script>window.location.href='managefiles.php'</script>";

    ?>