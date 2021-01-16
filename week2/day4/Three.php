<?php
    include "pdo.php";

    $pdo=getpdo();

    $account=$_GET('account');
    echo $account;
    // 查询数据库
    $sql="select * from p_users where account=$account";
    $res=$pdo->query($sql);
    $data=$res->fetch(PDO::FETCH_ASSOC);

    if($data){
        $response=[
            'errno'=>"400020",
            'msg'=>"用户名已存在",
        ];
    }else{
        $response=[
            'errno'=>"400020",
            'msg'=>"ok",
        ];

    }

?>