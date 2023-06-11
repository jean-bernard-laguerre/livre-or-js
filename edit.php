<?php
    include "database.php";

    session_start();

    $content = trim(file_get_contents("php://input"));

    $data = json_decode($content, true);
    
    $sql = "UPDATE user 
            SET login = ?, password = ?
            WHERE id = ?";

    $req = $GLOBALS["bdd"]->prepare($sql);
    $req->execute( [$data["login"], hash("sha256", $data["password"]), $_SESSION["id"]] );

    $_SESSION["login"] = $data["login"];
?>