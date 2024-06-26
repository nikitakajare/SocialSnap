<?php
require_once('admin_functions.php');
require_once '../../assets/php/send_code.php';

if(isset($_GET['block_user'])){
   
    if(blockUserByAdmin($_POST['user_id'])){
    
        $response['status']=true;

    }else{
        $response['status']=false;
    }

    echo json_encode($response);
}



if(isset($_GET['unblock_user'])){
   
    if(unblockUserByAdmin($_POST['user_id'])){
    
        $response['status']=true;

    }else{
        $response['status']=false;
    }

    echo json_encode($response);
}