<?php
    // モデル(M)
    // 投稿の設計図を作る
    class Post{
        // プロパティ
        public $id;
        public $user_id; // ユーザー番号
        public $title; //タイトル
        public $content; // 内容
        public $image; // 画像ファイル名
        public $created_at; //登録日時
        // コンストラクタ
        public function __construct($user_id="", $title="", $content="", $image=""){
            $this->user_id = $user_id;
            $this->title = $title;
            $this->content = $content;
            $this->image = $image;
        }
    }
 