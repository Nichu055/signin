<?php
$host = 'localhost';
$dbName = 'signin';
$dbUser= 'root';
$dbUserPassword = '';
$dbCon = mysqli_connect($host,$dbUser,$dbUserPassword,$dbName);

if ($dbCon) {
    echo 'Connection Successful';
}else {
    echo 'Connection failed';
}