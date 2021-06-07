<?php

global $connection;

$connection = mysqli_connect('localhost','root','','cms');

if(!$connection){
    echo "Sorry something went wrong with connection ";
}

?>