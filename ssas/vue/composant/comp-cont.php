<?php
$nomErr = $emailErr = $subjectErr = $messageErr = "";
$nom = $email = $subject = $message = "";

function test_input($data)
{
  $data = stripslashes($data);
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (!empty($_POST)) {
  if (
    isset($_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"])
    && !empty($_POST["name"])
    && !empty($_POST["email"])
    && !empty($_POST["subject"])
    && !empty($_POST["message"])

  ) {
    $nom = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $subject = test_input($_POST["subject"]);
    $message = test_input($_POST["message"]);

    if (!preg_match("/^[a-zA-Z-'-. ]*$/", $nom)) {
      $nomerr = "Name is required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

      $emailerr = "format email invalide";
    }
    if (empty($nomerr) && empty($emailerr) && empty($subjectErr)) {

$id=$util['id_user'];
      $sql = "INSERT INTO contacts (name , email, subject ,message , con_id )
            VALUES (:name, :email, :subject , :message , '$id')";
      echo " <script>
Swal.fire(
  'Good job!',
  'your message sent ',
  'success'
)</script>";
      $query = $db->prepare($sql);
      $query->bindValue(":name", $nom, PDO::PARAM_STR);
      $query->bindValue(":email", $_POST["email"]);
      $query->bindValue(":subject", $subject);
      $query->bindValue(":message", $_POST["message"]);
      $query->execute();
    }
  } else {

    if (empty($_POST["name"])) {
      $nomErr = "nom manquant";
    }
    if (empty($_POST["email"])) {
      $emailErr = "email manquant";
    }
    if (empty($_POST["subject"])) {
      $subjectErr = "subject manquant";
    };
  }
};
?>
<?php
$Err = "";
$Err1 = "";
$con = "";
if (isset($_POST['submit']) and isset($_POST['email'])) {
  if (isset($_POST['email'])) {
    // Validate email address
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $Err = 'Please provide a valid email address!';
    }
    $id2=$util['id_user'];
    // Check if email exists in the database
    $stmt = $db->prepare("SELECT * FROM newsletter WHERE email = ? and nlet_id ='$id2' ");
    $stmt->execute([$_POST['email']]);
    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
      $Err1 = 'You\'re already a subscriber!';
    }
    
    // Insert email address into the database
    if(!empty($_POST['email']) && empty($Err1)){
    $stmt = $db->prepare("INSERT INTO newsletter (email,dat_sub , nlet_id) VALUES (?,?,'$id2')");
    $stmt->execute([$_POST['email'], date('Y-m-d\TH:i:s')]);
    // Output success response
    $con = 'Thank you for subscribing!';
  } }else {
    // No post data specified
    $Err = 'Please provide a valid email address!';
  }
}


?>


<div class="contact1">
  <div class="contact1">
    <div class="container-contact1">
      <div class="contact1-pic js-tilt" data-tilt>
        <div>
          <span class="contact1-form-title">
            Get in touch
          </span>

          <?php
          if (isset($_SESSION["user"])) : ?>

            <?php
            $id = $_SESSION["user"]["id"];

            $sql = "SELECT *  from users where id_user= $id ";
            $query = $db->prepare($sql);
            $query->execute();
            $util = $query->fetch();
            ?>
            <div class="info">
              <p> <i class="fa-solid fa-envelope"></i>E-mail moi: <span> <?= $util["email2"]; ?></span> </p> <br>
              <p><i class="fa-solid fa-phone"></i> Mon telephone : <span> <?= $util["tele"];  ?></span></p><br>
              <p><i class="fa-solid fa-location-dot"></i>Ma location : <span> <?= $util["location"];  ?></span></i></p><br>
            </div>

          <?php else : ?>
            <div class="info">
              <p> <i class="fa-solid fa-envelope"></i>E-mail moi: work@work.com</span> </p> <br>
              <p><i class="fa-solid fa-phone"></i> Mon telephone :0987654345678</span></p><br>
              <p><i class="fa-solid fa-location-dot"></i>Ma location : France _PAris</span></i></p><br>



            </div>
          <?php endif; ?>

          <!-- <img src="./Images/call.png" alt="IMG"> -->
        </div>
        <form class="newsle" action='' method='post'>

          <div class="news">

            <h4> Newsletter </h4>

            <input type="text" name='email' placeholder=" Enter your email....">

            <button class="contact1-form-btn1" type="submit" name='submit'>Subscribe</button> <br>

          </div>
          <div class="nmass">
            <?php
            if (empty($Err) && empty($Err1)) {
              echo $con;
            }
            if (empty($Err)) {
              echo $Err1;
            } else {
              echo $Err;
            }
            ?>
          </div>
        </form>

      </div>
      <form class="contact1-form validate-form" method="post">

        <div class="wrap-input1 validate-input" data-validate="Name is required">
          <input class="input1" type="text" name="name" placeholder="Name">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
          <input class="input1" type="text" name="email" placeholder="Email">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="Subject is required">
          <input class="input1" type="text" name="subject" placeholder="Subject">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="Message is required">
          <textarea class="input1" name="message" placeholder="Message"></textarea>
          <span class="shadow-input1"></span>
        </div>

        <div class="container-contact1-form-btn">
          <button class="contact1-form-btn">
            <span>
              Send Messsage
              <i class="fa fa-send" aria-hidden="true"></i>
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>

</div>






<script>
  (function($) {
    "use strict";


    /*[ Validate ]*/
    var name = $('.validate-input input[name="name"]');
    var email = $('.validate-input input[name="email"]');
    var subject = $('.validate-input input[name="subject"]');
    var message = $('.validate-input textarea[name="message"]');


    $('.validate-form').on('submit', function() {
      var check = true;

      if ($(name).val().trim() == '') {
        showValidate(name);
        check = false;
      }

      if ($(subject).val().trim() == '') {
        showValidate(subject);
        check = false;
      }


      if ($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
        showValidate(email);
        check = false;
      }

      if ($(message).val().trim() == '') {
        showValidate(message);
        check = false;
      }

      return check;
    });


    $('.validate-form .input1').each(function() {
      $(this).focus(function() {
        hideValidate(this);
      });
    });

    function showValidate(input) {
      var thisAlert = $(input).parent();

      $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
      var thisAlert = $(input).parent();

      $(thisAlert).removeClass('alert-validate');
    }



  })(jQuery);
</script>