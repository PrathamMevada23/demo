<?php
    $cnn =mysqli_connect("localhost","root","","db");
    if(!$cnn)
    echo"can not established" or die(mysqli_connect_error());
?>