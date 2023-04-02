<?php
include 'pdo.php';
$statusMsg = '';

// File upload path
$targetDir = "Images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
$photo = 'images/' . $fileName;
$id = $_POST["id"];
if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            if (!empty($_POST)) {
                if (!empty($fileName)) {
                    $sql = "UPDATE projects SET imgpro= '$photo' where projets_id = $id";
                    $insert = $db->prepare($sql);
                    $insert->execute();
                }
            }
            if ($insert) {
                $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a photo  to modify .';
}

$id = $_POST["id"];
$Titre = strip_tags($_POST["Titre"]);
$descriptif = $_POST["descriptif"];
$full = $_POST["ful_desc"];
$author = $_POST["author"];
$date = $_POST["date"];

if (!empty($Titre)) {
    $sql = "UPDATE projects SET Titre= '$Titre' where projets_id= $id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo " Titre modified " ;
}

if (!empty($descriptif)) {
    $sql = "UPDATE projects SET descriptif= '$descriptif' where projets_id= $id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo " descriptif modified "; 
}

if (!empty($full)) {
    $sql = "UPDATE projects SET ful_desc= '$full' where projets_id= $id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo " ful_desc modified ";
}

if (!empty($author)) {
    $sql = "UPDATE projects SET author= '$author' where projets_id= $id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo " author modified ";
}

if (!empty($date)) {
    $sql = "UPDATE projects SET date= '$date' where projets_id= $id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo " date modified ";
}


echo $statusMsg;  
header( "refresh:3; url=profil.php" );

?>