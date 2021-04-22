<?php
    // C
    // 外部ファイルの読みこみ
    require_once 'daos/UserDAO.php';
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // DAOを使って、そんなユーザーいるかDBを検索
    // いれば、そのユーザーのインスタンスを取得
    $login_user = UserDAO::login($email, $password);
    
    // そんな人がDBにいれば
    if($login_user !== false){
        $_SESSION['login_user'] = $login_user;
        header('Location: top.php');
        exit;
        
    }else{
        header('Location: login.php');
        exit;
    }