
<?php
include "./vue/composant/head.php";
session_start();
if (isset($_SESSION["user"])) {
    header("location:profil.php");
    exit;
}
if (!empty($_POST)) {
    if (
        isset($_POST["username"], $_POST["email"], $_POST["pass"])
        && !empty($_POST["email"] && !empty(["pass"]))
    )
       

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            die("format e-mail invalide ");
        }


require_once "pdo.php";
    $sql = "SELECT *  from users where email=:email ";
    $query = $db->prepare($sql);
    $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();
   
    if (!$user) {
        die("utilisateur et /ou mot de pass incorrecte");
    }
    if (!password_verify($_POST["pass"],$user["pass"])) {
        die("pad pass");
    }
    $id = $db->lastInsertId();
    $_SESSION["user"] = [
        "id" => $user["id_user"],
        "username" =>$user["username"],
        "email" =>$_POST["email"],
        "img"=>$user["img"],
        "email2"=>$user["email2"],
        "loc"=>$user["location"],
        "tele"=>$user["tele"]
    ];
    header("location:profil.php");

}


    ?>
