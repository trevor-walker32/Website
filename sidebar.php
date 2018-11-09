<?php 

session_start();

echo "My name is</br>";
echo $_SESSION['username'] . '</br> </br>';
echo "My email is</br>";
echo $_SESSION['email'] . '</br> </br>';


?>