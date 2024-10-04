<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    // se agrega el dominio
    CURLOPT_URL => 'https://opticaangel3.000webhostapp.com/productos.api.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));
$response = curl_exec($curl);
curl_close($curl);
$datos = json_decode($response);
echo $datos[0]->producto;
