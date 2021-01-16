<?php
$user_name=$_POST['account'];
$pwd=$_POST['pwd'];
$pwds=$_POST['pwds'];
$hobby=$_POST['hobby'];

// 判断两次密码是否一致   addEventListener
if($pwd!=$pwds){
    $response=[
            'errno'=>400001,
            'msg'=>'两次输入的密码不一致'
    ];
        die(json_encode($response));
}

if(strlen($pwd)<6){
    $responses=[
        'error'=>400001,
        'msg'=>'密码长度不够'
    ];
    die(json_encode($reponses));
}
//验证用户名是否存在
$pdo=getPdo();
$sql="select * from p_users where user_name=$user_name";


