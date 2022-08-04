<?php

$url = "https://www.tu-chemnitz.de/informatik/DVS/blocklist/13c426785ac06b27296ace1c54474a88";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Cookie: WTC_AUTHENTICATED=ghmo; _shibsession_7777772e74752d6368656d6e69747a2e64655f61707068747470733a2f2f7777772e74752d6368656d6e69747a2e64652f73686962626f6c657468=_501131ef3bae4b5709656667fbb4839a",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>