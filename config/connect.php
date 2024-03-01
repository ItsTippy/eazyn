<?php

$ussername = "root";
$password = "12345";
$host = 'localhost';

$is_connect = mysqli_connect($host,$ussername,$password);

if($is_connect){
    mysqli_select_db($is_connect,'izindb');
}else {
    echo "TINJU";
} 