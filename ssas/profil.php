<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="./assests/css/style.css">
<script language="JavaScript" type="text/javascript">
    function checkDelete() {
        return confirm('Are you sure?');
    }
</script>



<?php
session_start();
// if (!empty($_GET)) {
//     if (!isset($_GET["success"])) {
//         exit;
//     }
//     var_dump($_GET);
//     if ($_GET["success"] = "1") {
//         echo " <script>
//         Swal.fire(
//         'Good job!',
//         'The file has been uploaded successfully',
//          'success'
//             )</script>";
//         return;
//     }
// }

?>

<?php


require "./pdo.php";
?>

<?php
$id = $_SESSION["user"]["id"];
$sql = "SELECT *  from users where `id_user` = $id";
$query = $db->prepare($sql);
$query->execute();
$util = $query->fetch();
?>

<div class="navigation">
    <div class="user-box">
        <div class="image-box">
            <img src="<?= $util["img"]; ?>" alt="avatar">
        </div>
        <p class="username"> bonjour : <?= $_SESSION["user"]["username"] ?></p>
    </div>
    <div class="menu-toggle"></div>
    <ul class="menu">
        <li><a href="index.php"><i class="fa-solid fa-house-user"></i>Home</a></li>
        <li><a href="./vue/composant/deconnexion.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
    </ul>
</div>

<link rel="stylesheet" href="style.css">
<div class="wrap">
    <div class="tabs">
        <input class="tab" id="tab--1" type="radio" name="tabs" checked="checked" />
        <input class="tab" id="tab--2" type="radio" name="tabs" />
        <input class="tab" id="tab--3" type="radio" name="tabs" />
        <input class="tab" id="tab--4" type="radio" name="tabs" />
        <label class="button" id="button--1" for="tab--1"><i class="fa-solid fa-user "></i></i> PROFILE </label>
        <label class="button" id="button--2" for="tab--2"><i class="fa fa-briefcase "></i>PROJETS</label>
        <label class="button" id="button--3" for="tab--3"><i class="fa fa-envelope-open"></i>MESSAGES</label>
        <label class="button" id="button--4" for="tab--4"><i class="fa fa-graduation-cap"></i> SKILL</label>
        <div class="display" id="display--1"><span class="title">vos information personelles</span>
            <div id="container-profil">
                <div class="uli">
                    <h1>votre compte utilisateur</h1>
                    <div class="ccc">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="image-upload">
                                <div class="image-upload">
                                    <label for="file-input">
                                        <img src="<?= $util["img"]; ?>" alt="">
                                    </label>
                                    <input id="file-input" type="file" name="file" />

                                </div>
                            </div>
                            <input class="btnpro2" type="submit" name="submit" value="change">
                        </form>
                    </div>
                    <h2> Nom utilisateur : <?= $util["username"]; ?> </h2>
                    <p>e-mail : <?= $util["email"];  ?></p>
                    <a class="btnpro2" href="#changepass">modify password </a>
                </div>

                <div class="uli-mod">
                    <form class="uli-form" method="POST" action="modify.php">
                        <div>
                            <label for="username">username : </label>
                            <input type="text" name="username" id="username" placeholder="<?= $util["username"]; ?>">
                        </div>

                        <div>
                            <label for="email">email : </label>
                            <input type="email" name="email" id="email" placeholder="<?= $util["email"];  ?>">
                        </div>
                        <div>
                            <label for="descrip">descrip : </label>
                            <input type="text" name="descrip" id="descrip" placeholder="<?= $util["descrip"]; ?>">
                        </div>
                        <div>
                            <label for="tele">tele : </label>
                            <input type="number" name="tele" id="tele" placeholder="<?= $util["tele"]; ?>">
                        </div>
                        <div>
                            <label for="location">location : </label>
                            <input type="text" name="location" id="location" placeholder="<?= $util["location"];  ?>">
                        </div>
                        <div>
                            <label for="email2">email work : </label>
                            <input type="text" name="email2" id="email2" placeholder="<?= $util["email2"];  ?> ">
                        </div>

                        <button class="btnpro3" type="submit">valider la modify </button>
                    </form>

                </div>
            </div>

            <div class="change_pass" id="changepass">
                <form method="POST" action="password_change.php">
                    <table>
                        <td>existing password:</td>
                        <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td>new password:</td>
                            <td><input type="password" name="newpassword"></td>
                        </tr>
                        <tr>
                            <td>Re-new password:</td>
                            <td><input type="password" name="confirmnewpassword"></td>
                        </tr>
                    </table>
                    <button class="btnpro3" type="submit" value="Update Password">update password</button>
                </form>
            </div>

        </div>
        <div class="display" id="display--2"> <span class="title">Modify your projects</span>
            <div id="container-form">
                <h2>ADD projects</h2>
                <div class="form-infos">
                    <form method="POST" action="uploadpro.php" enctype="multipart/form-data">
                        <div class="proflex">
                            <div class="pho">
                                Select Image File to Upload: <br>
                                <input type="file" name="file">

                            </div>
                            <div class="bod">
                                <div>
                                    <label for="Titre">Titre : </label>
                                    <input type="text" name="Titre" id="Titre" placeholder="Titre">
                                </div>


                                <div>
                                    <label class="pos" for="descriptif"> descriptif: </label>
                                    <textarea type="text" name="descriptif" id="descriptif" placeholder="descriptif"> </textarea>
                                </div>

                                <div>
                                    <label class="pos" for="descriptif"> full descriptif: </label>
                                    <textarea type="textarea" name="ful_desc" id="ful_desc" placeholder=" full descriptif"> </textarea>
                                </div>

                                <div>
                                    <label for="author">author : </label>
                                    <input type="text" name="author" id="author" placeholder="author">
                                </div>
                                <div>
                                    <label for="date">date : </label>
                                    <input type="date" name="date" id="date" placeholder="date">
                                </div>
                                <input type="hidden" value=<?= $util['id_user'] ?> name="id" id="id">

                                <button class="btnpro2" type="submit" name="submit" value="Upload ">add project </button>
                            </div>
                        </div>
                    </form>
                </div>



                <?php
                $id = $util["id_user"];
                $sql = "SELECT * FROM projects where projects.proid=$id";
                $requete = $db->query($sql);
                $projets = $requete->fetchAll();
                ?>
                <?php foreach ($projets as $projet) : ?>

                    <div class="procon">
                        <div class="probluck">
                            <div class="">
                                <h2><?= $projet["Titre"] ?></h2>
                            </div>
                            <div class="imgpro">
                                <img src="<?= $projet["imgpro"] ?>">
                            </div>
                            <?php

                            $id = $projet["projets_id"];
                            ?>

                            <div class="">
                                <h5><?= $projet["date"] ?></h5>

                            </div>
                            <a type="button" class="btnpro2" href="deletepro.php?id=<?= $id ?>" onclick="return checkDelete()"> supprimer </a>
                            <a type="button" class="btnpro2" href="#mypopup?id=<?= $id ?>"> modifier </a>


                        </div>
                    </div>

                    <div class="popup" id="mypopup?id=<?= $id ?>">
                        <div class="popup-inner">
                            <form method="POST" action="modifypro.php" enctype="multipart/form-data">
                                <div class="view">
                                    <div class="vi">
                                        <div class="imgpromod">
                                            <img src="<?= $projet["imgpro"] ?>">
                                        </div>

                                        Select Image:
                                        <input type="file" name="file">
                                    </div>
                                    <div class="modpos">

                                        <div>
                                            <label for="Titre">Titre : </label>
                                            <input type="text" name="Titre" id="Titre" placeholder="<?= $projet["Titre"] ?>">
                                        </div>

                                        <div>
                                            <label class="pos" for="descriptif"> descriptif: </label>
                                            <textarea type="text" name="descriptif" id="descriptif" placeholder="<?= $projet["descriptif"] ?>"> </textarea>
                                        </div>

                                        <div>
                                            <label class="pos" for="descriptif"> full descriptif: </label>
                                            <textarea type="textarea" name="ful_desc" id="ful_desc" placeholder=" <?= $projet["ful_desc"] ?>"> </textarea>
                                        </div>

                                        <div>
                                            <label for="author">author : </label>
                                            <input type="text" name="author" id="author" placeholder="<?= $projet["author"] ?>">
                                        </div>
                                        <div>
                                            <label for="date">date : </label>
                                            <input type="date" name="date" id="date" placeholder="<?= $projet["date"] ?>">
                                        </div>
                                        <input type="hidden" value=<?= $projet['projets_id'] ?> name="id" id="id">

                                        <button class="btnpro2" type="submit" name="submit">modifier projet</button>
                                    </div>

                                </div>

                            </form>

                            <a class="popup-close" href="#">X</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="display" id="display--3"><span class="title">MESSAGES & NEWSLETTER</span>
            <?php
            $id = $util["id_user"];
            $sql = "SELECT * FROM contacts where con_id='$id'";
            $requete = $db->query($sql);
            $contacts = $requete->fetchAll();
            ?>

            <div class="messarow">

                <?php foreach ($contacts as $contact) : ?>
                    <?php $id = $contact["id"] ?>

                    <div class="messa">
                        <a href="#messbad?id=<?= $id ?>"> <span><?= $contact["name"] ?></span> : <?= $contact["email"] ?> </a>
                    </div>


                    <div class="messabody" id="messbad?id=<?= $id ?>">
                        <h4> FROM :</h4><?= $contact["name"] ?>
                        <h5> E-MAIL :</h5><?= $contact["email"] ?>
                        <h5> SUJET :</h5><?= $contact["subject"] ?>
                        <DIV class="suj">
                            <h5>message:</h5>
                            <p><?= $contact["message"] ?></p>
                        </DIV>
                        <a type="button" class="btnpro2" href="deletecon.php?id=<?= $id ?>" onclick="return checkDelete()"> supprimer </a>

                    </div>
                <?php endforeach; ?>


            </div>

        </div>
        <div class="display" id="display--4"><span class="title">Skill & Experience</span>
            <?php
            $id = $util["id_user"];
            $sql = "SELECT * FROM skillbar where sk_id='$id'";
            $requete = $db->query($sql);
            $skills = $requete->fetchAll();
            ?>
            <div class="messarow">

                <?php foreach ($skills as $skill) : ?>
                    <?php $id = $skill["id_skill"] ?>

                    <div class="messa">
                        <a href="#messbd?id=<?= $id ?>"> <span><?= $skill["sname"] ?></span> : <?= $skill["percent"] ?>% </a>


                    </div>


                    <div class="messabody" id="messbd?id=<?= $id ?>">


                        <form action="modifyskill.php?id=<?= $id ?>" method="post">
                            <div>
                                <label for="sname">Nom de skill : </label><br>
                                <input type="text" name="sname" id="sname" placeholder="<?= $skill["sname"]; ?>">
                            </div>

                            <div>
                                <label for="percent">percentage Entre 2 ~ 99: </label><br>
                                <input type="number" name="percent" id="percent" min=2 max=99 step="1" placeholder="<?= $skill["percent"];  ?>">
                            </div>
                            <div>
                                <label for="color">bar color (exp: red , #e67e22) : </label><br>
                                <input type="text" name="color" id="color" placeholder="<?= $skill["color"]; ?>">
                            </div>
                            <div>
                        </form>
                        <button class="btnpro2"> modifier </button>
                        <a type="button" class="btnpro2" href="deletskill.php?id=<?= $id ?>" onclick="return checkDelete()"> supprimer </a>
                    </div>



            </div>
        <?php endforeach; ?>
        <div class="messabody" id="newskill">

            <form method="post" action="newskill.php">
                <div>
                    <input type="text" name="sname" id="sname" placeholder="Nom de skill">
                </div>

                <div>

                    <input type="number" name="percent" id="percent" min=2 max=99 step="1" placeholder="percentage  Entre 2 ~ 99">
                </div>
                <div>

                    <input type="text" name="color" id="color" placeholder="bar color (exp: red , #e67e22)">
                </div>
                <div>
            </form>
            <button class="btnpro2"> New skill </button>
        </div>

        </div>
        <a href="#newskill" class="btnpro2" type="submit" name="submit">add skill </a>
    </div>


    <!-- ........................................................... -->
    <?php
    $id = $util["id_user"];
    $sql = "SELECT * FROM exper  where id_exp='$id' order by dateexp";
    $requete = $db->query($sql);
    $exps = $requete->fetchAll();
    ?>
    <div class="messarow">

        <?php foreach ($exps as $exp) : ?>
            <?php $id = $exp["exper_id"] ?>

            <div class="messa">
                <a href="#messbad?id=<?= $id ?>"> <span><?= $exp["dateexp"] ?></span> : <?= $exp["Titreexp"] ?> </a>


            </div>


            <div class="messabody" id="messbad?id=<?= $id ?>">


                <form action="modifyexp.php?id=<?= $id ?>" method="post">
                    <div>
                        <label for="dateexp">Temps de exper : </label><br>
                        <input type="text" name="dateexp" id="dateexp" placeholder="<?= $exp["dateexp"]; ?>">
                    </div>

                    <div>
                        <label for="Titreexp">Titre de exper : </label><br>
                        <input type="text" name="Titreexp" id="Titreexp" placeholder="<?= $exp["Titreexp"];  ?>">
                    </div>
                    <div>
                        <label for="descexp">your descriptif: </label><br>
                        <input type="text" name="descexp" id="descexp" placeholder="<?= $exp["descexp"]; ?>">
                    </div>
                    <div>
                </form>
                <button class="btnpro2"> modifier </button>
                <a type="button" class="btnpro2" href="deletexp.php?id=<?= $id ?>" onclick="return checkDelete()"> supprimer </a>
            </div>



    </div>
<?php endforeach; ?>
<div class="messabody" id="newexp">

    <form method="post" action="newexp.php">
        <div>
            <input type="text" name="dateexp" id="dateexp" placeholder="date">
        </div>

        <div>
            <input type="text" name="Titreexp" id="Titreexp" placeholder="titre">
        </div>
        <div>
            <input type="text" name="descexp" id="descexp" placeholder="desc">
        </div>
        <div>
    </form>
    <button class="btnpro2"> new exper </button>
</div>

</div>
<a href="#newexp" class="btnpro2" type="submit" name="submit">add exper </a>
</div>












</div>


<script>
    let menuToggle = document.querySelector('.menu-toggle');
    let navigation = document.querySelector('.navigation');

    menuToggle.onclick = function() {
        navigation.classList.toggle('active1');
    }
</script>