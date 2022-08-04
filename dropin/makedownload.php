<?php
//$hash = $_GET['hash'];
$localIP = getHostByName(getHostName());
$date = date("Y/m/d");
include 'dbconnection1.php';
$h = date('H');
$i = date('i');
$year = date("Y");
$month = date("m");
$day = date("d");


$query17 = "select * from guestdownloadtime where hash='{$hash}' and ip='$localIP'";
$result17 = $conn->query($query17);
$num17 = mysqli_num_rows($result17);
if($num17>0)
{

    $query = "UPDATE `guestdownloadtime` SET `time`=now() WHERE `hash`='$hash' and `ip`='$localIP'";
    $result = $conn->query($query) or die(mysql_error());
}
else{
    
$query48 = "insert into guestdownloadtime values('$hash','$localIP',now())";
$result48 = $conn->query($query48) or die(mysql_error());

}



$query331= "select * from files where hash='{$hash}'";
            $result257 = $conn->query($query331);
            $row331 = mysqli_fetch_array($result257, MYSQLI_ASSOC);
            $file257 = file_put_contents($row331['name'], $row331['data']);
            $nametosend = $row331['name'];
                                                   
            //echo "<script>window.location.href='index.php'</script>";
            //echo "<script>window.location.href='download.php?hash=$hash'</script>";


            

?>