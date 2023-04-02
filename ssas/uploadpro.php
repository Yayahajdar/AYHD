<?php

// Include the database configuration file
include 'pdo.php';
$statusMsg = '';
$photo="";
// File upload path
$targetDir = "Images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    $photo= 'images/'.$fileName;
    var_dump($_FILES["file"]);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;


if (!empty($_POST)) {
    if (
        isset($_POST["Titre"], $_POST["descriptif"], $_POST["author"])
        && !empty($_POST["Titre"]) && !empty($_POST["descriptif"]) && !empty($_POST["author"])&&!empty($photo)
    ) {
        $Titre = strip_tags($_POST["Titre"]);
 

        $descriptif = strip_tags($_POST["descriptif"]);
      $full_desc = strip_tags($_POST["ful_desc"]);
        $author = strip_tags($_POST["author"]);
        $date = strip_tags($_POST["date"]);
               $dop = date('Y-m-d', strtotime($_POST['date']));
        $id =  strip_tags($_POST["id"]); 
        $sql = "INSERT INTO projects (Titre, descriptif , author ,date, imgpro, proid )
            VALUES ('$Titre', '$descriptif','$author','$dop' ,'$photo','$id' )";
        $query = $db->prepare($sql);
        $query->execute();
        echo "modify successfully";
    } else {
       echo  "le formulaire est incomplet";
    }
}
header( "refresh:1; url=profil.php" );
?>

