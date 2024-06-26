<?php
require_once('admin_functions.php');
require_once '../../assets/php/send_code.php';

if(isset($_GET['login'])){
    if(checkAdminUser($_POST)['status']){
        $_SESSION['admin_auth']=checkAdminUser($_POST)['user_id'];
        header('Location:../');
    }else{
        $_SESSION['error']=[
        "field"=>"useraccess",
        "msg"=>"Incorrect email/password",
        ];
     header('Location:../');
    }
}
if(isset($_GET['logout'])){
    session_destroy();
    header('Location:../');
}
if(isset($_GET['updateprofile'])){
    if(updateAdmin($_POST)){
        $_SESSION['error']=[
            "field"=>"adminprofile",
            "msg"=>"profile update successfully !",
        ];
     header('Location:../?edit_profile');
    }else{
        $_SESSION['error']=[
            "field"=>"adminprofile",
            "msg"=>"something went wrong, try again later",
        ];
     header('Location:../?edit_profile');
    }
}


?>