<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();
// Include the database configuration file
include 'pdo.php';
$statusMsg = '';

// File upload path
$targetDir = "Images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$photo= 'images/'.$fileName;
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    var_dump($_FILES["file"]);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
         
        $id = $_SESSION["user"]["id"];
        $insert   = "UPDATE projects SET imgpro= '$photo' where projets_id = $id";
        $insert = $db->prepare($insert);
        $insert->execute();     
            if($insert){
                echo " <script>
                Swal.fire(
                'Good job!',
                'The file has been uploaded successfully',
                 'success'
                    )</script>";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{var_dump($_GET);
        $statusMsg = 'Please select a file to upload.';
       echo " <script>
           Swal.fire(
           'ooops ///!',
           'Only JPG, JPEG, PNG, GIF files are allowed',
            'error'
                )</script>";
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    var_dump($_GET);
     $statusMsg = 'Please select a file to upload.';
    echo " <script>
        Swal.fire(
        'ooops ///!',
        'Please select a file to upload',
         'error'
             )</script>";
 
}

// Display status message
echo $statusMsg;

header( "refresh:2; url=profil.php" )
?>