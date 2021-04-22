<?php
    // モデル(M)
    // ユーザーの設計図を作る
    class User{
        // プロパティ
        public $id;
        public $name; // 名前
        public $email; //メールアドレス
        public $password; // パスワード
        public $created_at; //登録日時
        // コンストラクタ
        public function __construct($name="", $email="", $password=""){
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }
    }
 