<?php
$user_phone = "110EG" ; 
$x = filter_var($user_phone , FILTER_SANITIZE_NUMBER_INT) ; 
echo ($x) ; 
?>