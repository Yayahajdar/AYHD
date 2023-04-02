<?php
include "./vue/composant/head.php";
session_start();
if (isset($_SESSION["user"])) {
    header("Location:profil.php");
    exit;
}


$Err1 = "";
$Err = "";
if (!empty($_POST)) {
    if (
        isset($_POST["username"], $_POST["email"], $_POST["pass"])
        && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["pass"])
    ) {
        $username = strip_tags($_POST["username"]);
        $_SESSION["error"] = [];

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $_SESSION["error"][] = "Adresse mail invalide";
        }

        $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

        require_once "./vue/composant/pdo.php";
        $stmt = $db->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$_POST['email']]);
        if ($stmt->fetch(PDO::FETCH_ASSOC)) {
            $Err='you allready register';
            echo $Err;
        } 
        else {
            require_once "./vue/composant/pdo.php";
            $sql = "INSERT INTO users(username, email, pass) VALUES (:username, :email, '$pass')";
            $query = $db->prepare($sql);
            $query->bindValue(":username", $username, PDO::PARAM_STR);
            $query->bindValue(":email", $_POST["email"]);
            $query->execute();

            $id = $db->lastInsertId();

            $_SESSION["user"] = [
                "id" => $id,
                "username" => $username,
                "email" => $_POST["email"],
            ];


            header("Location:profil.php");
        }
    }
}

?>
