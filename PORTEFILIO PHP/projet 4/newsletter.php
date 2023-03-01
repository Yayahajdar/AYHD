<?php
// $result = "";

// if (isset($_POST['submit']) and isset($_POST['email'])) {
// if ($_POST['email'] != "") 
// {  
//    $email = filter_var($_POST['email'] , FILTER_SANITIZE_EMAIL); 
 
// 		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
// 		{  
//                 $result = "The mail you entered is not a valid email address.";
// 		} 
// 		else
// 		{
// 		$link = mysqli_connect('localhost','root','');
// 		mysqli_select_db($link,'newsletter'); 	
// 		$sql = 'INSERT INTO newsletter SET email = "' . $email . '"';
// 		$sql1 = 'SELECT email FROM newsletter WHERE email = "'.$email.'"';

// 			if (mysqli_query ($link, $sql1) == true) 
// 			{
// 			$result = "Your email is alredy registered.";
// 			}
// 			else
// 			{
// 			if (mysqli_query ($link, $sql)) 
// 			{
// 			$result = "Your email has been successfully registered.!";
// 			}
// 			}
// } 
// }
// else 
// {  
//     $result = 'Please enter your email address.'; 
// }
// }



// Ensure post variable exists
if (isset($_POST['email'])) {
    // Validate email address
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        exit('Please provide a valid email address!');
    }
    // Check if email exists in the database
    require "./vue/composant/pdo.php";
    $stmt = $db->prepare('SELECT * FROM newsletter WHERE email = ?');
    $stmt->execute([ $_POST['email'] ]);
    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        exit('You\'re already subscribea r!');
    }
    // Insert email address into the database
    $stmt = $db->prepare('INSERT INTO newsletter (email,dat_sub) VALUES (?,?)');
    $stmt->execute([ $_POST['email'], date('Y-m-d\TH:i:s') ]);
    // Output success response
    exit('Thank you for subscribing!');
} else {
    // No post data specified
    exit('Please provide a valid email address!');
}
?>


?>