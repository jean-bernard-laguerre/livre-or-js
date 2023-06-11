<?php

    $bdd = new PDO("mysql:host=localhost;dbname=livreor;charset=utf8", "root", "");

    function getMessages() {
        $sql = "SELECT content, date, user.login FROM comment
                JOIN user ON user_id = user.id";

        $req = $GLOBALS["bdd"]->prepare($sql);
        $req->execute();
        $res = $req->fetchall(PDO::FETCH_ASSOC);

        return $res;
    }
?>