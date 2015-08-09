<?php

$curl = curl_init(); 

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost:3000/access/users/4',
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_HTTPHEADER => array( 
        'key: a50ae06e9e3d35a79260bf2643c316bc996487d3',
        'Accept: TestApplication'
    )
));

$res = curl_exec($curl);

curl_close($curl);

echo $res;
?>
