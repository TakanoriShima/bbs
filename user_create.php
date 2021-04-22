<?php
    // C
    // 外部ファイルの読みこみ
    require_once 'daos/UserDAO.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user = new User($name, $email, $password);
  
    // DAOを使って新規ユーザをデーターベースに保存
    UserDAO::insert($user);
        
    // 画面遷移
    header('Location: index.php');
    exit;
   
