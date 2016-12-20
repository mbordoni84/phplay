<?php

/* 
 * Dipendenze per far funzionare il fuel sdk di MC
 */

if(function_exists('mcrypt_encrypt')) {
    echo "mcrypt is loaded! - ";
} else {
    echo "mcrypt isn't loaded!";
}


echo ('open ssl installed with version');
echo (OPENSSL_VERSION_NUMBER);


if (extension_loaded('soap')) {
  echo(' - soap is loaded');
}

?>