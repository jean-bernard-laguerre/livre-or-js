<?php

    include "./database.php";

    class Comment{

        public $comment;
        public $user_id;

        function __construct($comment, $user_id)
        {
            $this->comment = $comment;
            $this->user_id = $user_id;
        }

        public function add() {

            $sql = "INSERT INTO comment (content, user_id, date) VALUES (?, ?, CURRENT_TIMESTAMP)";
            $req = $GLOBALS["bdd"]->prepare($sql);
            $req->execute([$this->comment, $this->user_id]);

        }
    }
?>