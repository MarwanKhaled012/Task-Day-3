<?php
session_start();
require_once('function.php');
require_once('variable.php') ; 


// Name 
clean_data($user_fname);
len($user_fname, 'First Name', 15, 3);



// Email
$user_email = filter_var($user_email, FILTER_SANITIZE_EMAIL);
filter('Email', $user_email, FILTER_VALIDATE_EMAIL);
//dd($error); 
//echo $user_email ; 



// user_Class_details
len_world('address', $user_Class_details);


//
if(empty($error)){
    $_SESSION['re_sc'] = true ; 
    header('Location: end.php') ; 
    echo 'true' ; 
}else{
    $_SESSION['old_data'] = $_POST; 
    $_SESSION ['errors'] = $error ;  
    header('Location: index.php');
}