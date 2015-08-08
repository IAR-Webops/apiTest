<?php

$curl = curl_init(); 

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost:3000/access/users',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        'user_email' => 'dummy.usage1@gmail.com',
        'rollno' => 'ME00B001'
    )
));

$res = curl_exec($curl);

curl_close($curl);

echo $res;
?>
