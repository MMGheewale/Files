<?php

$hash = $_GET['hash'];

include 'dbconnection1.php';
                                $query = "delete from files where hash='{$hash}'";
                                $result = $conn->query($query);
    

                                $query = "delete from requests where hash='{$hash}'";
                                $result = $conn->query($query);


                                $query = "delete from guestdownloadtime where hash='{$hash}'";
                                $result = $conn->query($query);


                                $query = "delete from blocklistserver where hash='{$hash}'";
                                $result = $conn->query($query);
                                echo "<script>window.location.href='managefiles.php'</script>";

?>