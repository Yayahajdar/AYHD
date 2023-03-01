<?php
$result = "";

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
     
//       require_once "pdo.php";




// 		$sql = 'INSERT INTO newsletter (email)  value (:email)';
//     $query = $db->prepare($sql);
//     $query->bindValue("email", $_POST["email"]);
//         $query->execute();
        
//         $id = $db->lastInsertId();
    



// 		     $sql1 = 'SELECT email FROM newsletter WHERE id_news = :id';
//           $query1 = $db->prepare($sql1);
//           $query1->bindValue(":id", $id);
//           $query1->execute();
//           $lastEmail = $query1->fetch();


          
//           foreach ($lastEmail as $email1) : 
            
        
        
//    if ( $_POST['email'] =  $lastEmail['email']  )
// 			{
// 			$result = "Your email is alredy registered.";
// 			}
// 			else{
// 			$result = "Your email has been successfully registered.!";
// 			}
// 			  endforeach;
//   } 
// }
// else 
// {  
//     $result = 'Please enter your email address.'; 
// }
// }
if (isset($_POST['submit']) and isset($_POST['email'])) {
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
        exit('You\'re already a subscriber!');
    }
    // Insert email address into the database
    $stmt = $db->prepare('INSERT INTO newsletter (email,dat_sub) VALUES (?,?)');
    $stmt->execute([ $_POST['email'], date('Y-m-d\TH:i:s') ]);
    // Output success response
    exit('Thank you for subscribing!');
} else {
    // No post data specified
    exit('Please provide a valid email address!');
}}
?>





<footer>
<div class="footer-container">
  <div class="footer-infos">
    <ul class="row-infos">
      <li><a href="#">copyright</a></li>
      <li><a href="#">contact</a></li>
      <li><a href="#">voir les projets</a></li>
      <li><a href="#">mentions légales</a></li>
    </ul>
  </div>

  <form action='' method='post'>

    <div class="news">
      
      <h4> Suivre newsletter </h4>
      
    <input type="text" name='email' placeholder=" Enter your email....">
  
      <button class="contact1-form-btn1" type="submit" name='submit' >Subscribe</button> <br>
    
  </div>
    <?php echo $result; ?>
  
  </form>
</div>


</footer>