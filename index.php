<?php

//echo date('l jS \of F Y h:i:s A');

require('FuelSDK-PHP-Dot9/ET_Client.php');
$myclient = new ET_Client();

$subscriber = new ET_Subscriber();
$subscriber->authStub = $myclient;
$response = $subscriber->get();
print_r($response);

?>