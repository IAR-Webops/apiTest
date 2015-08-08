<?php

$curl = curl_init(); 

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost:3000/access/users/2',
    CURLOPT_CUSTOMREQUEST => 'DELETE'
));

$res = curl_exec($curl);

curl_close($curl);

echo $res;
?>
