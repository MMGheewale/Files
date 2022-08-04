<?php

$email = $_GET['email'];

include 'dbconnection1.php';
                                $query = "delete from tbluserlogin where email='{$email}'";
                                $result = $conn->query($query);

                                $query = "select hash from files where owner='{$email}'";
                                $result175 = $conn->query($query);

                                while ($row = mysqli_fetch_array($result175, MYSQLI_ASSOC)) {
                                    $hash = $row['hash'];

                                    $query = "delete from files where hash='{$hash}'";
                                    $result = $conn->query($query);
        
    
                                    $query = "delete from requests where hash='{$hash}'";
                                    $result = $conn->query($query);
    
    
                                    $query = "delete from guestdownloadtime where hash='{$hash}'";
                                    $result = $conn->query($query);
    
    
                                    $query = "delete from blocklistserver where hash='{$hash}'";
                                    $result = $conn->query($query);
                                    echo "<script>window.location.href='managefiles.php'</script>";
                                    }



                                echo "<script>window.location.href='manage.php'</script>";


    



?>