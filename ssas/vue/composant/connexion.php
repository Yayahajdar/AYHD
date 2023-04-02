<?php
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


    require_once "./pdo.php";
    $sql = "SELECT *  from users where email=:email ";
    $query = $db->prepare($sql);
    $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();

   
    if (!$user) {
        die("utilisateur et /ou mot de pass incorrecte");
    }

    if (!password_verify($_POST["pass"],$user["pass"])) {
        die("utilisateur fuck_off");
    }
  
    $_SESSION["user"] = [
        "id" => $user["id"],
        "username" =>$user["username"],
        "email" =>$_POST["email"],
    ];
    header("location: profil.php");

}

    ?>

<div id="container-form modal-content animate ">
    <h2>connexion à votre compte : </h2>
    <div class="form-infos">
        <form method="post">
            <div class="">
                <label for="username">Nom de utilisateur :</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <div class=""></div>
                <label for="email"> E-mail</label>
                <input type="email" name="email" id="email">

            </div>
            <div>
                <div class=""></div>
                <label for="pass"> Mot de pass:</label>
                <input type="password" name="pass" id="pass">
                <div>
                    <button type="submit"> mon connecter</button>
                </div>
            </div>

        </form>


    </div>


</div>
