<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
set_time_limit(0);


// local file that should be send to the client
//$local_file = $_GET['file'];
$local_file = $_GET['filename'];
// filename that the user gets as default
$download_file = $_GET['filename'];

// set the download rate limit (=> 20,5 kb/s)
$download_rate = 85; 
if(file_exists($local_file) && is_file($local_file)) {
    // send headers
    header('Cache-control: private');
    header('Content-Type: application/octet-stream'); 
    header('Content-Length: '.filesize($local_file));
    header('Content-Disposition: filename='.$download_file);

    // flush content
    flush();    
    // open file stream
    $file = fopen($local_file, "r");    
    while(!feof($file)) {

        // send the current file part to the browser
        print fread($file, round($download_rate * 1024));    

        // flush the content to the browser
        flush();

        // sleep one second
        sleep(1);    
    }    

    // close file stream
    fclose($file);}
else {
    die('Error: The file '.$local_file.' does not exist!');
}




if ($dl) {
} else {
    header('HTTP/1.0 503 Service Unavailable');
    die('Abort, you reached your download limit for this file.');
}
?>