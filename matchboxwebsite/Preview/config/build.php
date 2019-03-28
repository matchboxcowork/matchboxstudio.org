<?php

/*
 Loads configuration variables from either dev.php or prod.php, by checking 
 the value of the MBX_ENV variable, if it is defined. To change config 
 environments, set the MBX_ENV variable in your server container.
 */
if (getenv('MBX_ENV') == 'production') {
    require 'prod.php';
} else {
    require 'dev.php';
}

?>
