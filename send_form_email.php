<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "christinewelch2007@gmail.com";
    $email_subject = "A New Large Order";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone-number']) ||
        !isset($_POST['date-time'])) 
        
        
        {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone-number']; // not required
    $date-time = $_POST['date-time']; // required
    $assam = $_POST['assam'];
    $jasmine = $_POST['jasmine'];
    $oolong = $_POST['oolong'];
    $pouchong = $_POST['pouchong'];
    $taiwanese = $_POST['taiwanese'];
    $jasmine-milk = $_POST['jasmine-milk'];
    $oolong-milk = $_POST['oolong-milk'];
    $pouchong-milk = $_POST['pouchong-milk'];
    $chicken = $_POST['chicken'];
    $pork = $_POST['pork'];
    $popcorn = $_POST['popcorn'];
    $beef = $_POST['beef'];
    $tofu = $_POST['tofu'];
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Order details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name : ".clean_string($first_name)."\n";
    $email_message .= "Last Name : ".clean_string($last_name)."\n";
    $email_message .= "Email : ".clean_string($email_from)."\n";
    $email_message .= "Telephone : ".clean_string($telephone-number)."\n";
    $email_message .= "Comments : ".clean_string($date-time)."\n";
    $email_message .= "Assam Black Tea : ".clean_string($assam)."\n";
    $email_message .= "Jasmine Green Tea : ".clean_string($jasmine)."\n";
    $email_message .= "Roasted Oolong Tea : ".clean_string($oolong)."\n";
    $email_message .= "Pouchong Tea : ".clean_string($pouchong)."\n";
    $email_message .= "Taiwanese Style Milk Tea : ".clean_string($taiwanese)."\n";
    $email_message .= "Jasmine Green Milk Tea : ".clean_string($jasmine-milk)."\n"; 
    $email_message .= "Roasted Oolong Milk Tea : ".clean_string($oolong-milk)."\n";  
    $email_message .= "Pouchong Milk Tea : ".clean_string($pouchong-milk)."\n";
    $email_message .= "Fried Chicken Cutlet over Rice : ".clean_string($chicken)."\n";  
    $email_message .= "Fried Pork Rib over Rice : ".clean_string($pork)."\n";
    $email_message .= "Popcorn Chicken over Rice : ".clean_string($popcorn)."\n";
    $email_message .= "Black Pepper Beef over Rice : ".clean_string($beef)."\n";
    $email_message .= "Vegetarian Tofu over Rice : ".clean_string($tofu)."\n";
    
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Remember to total the items and send a reply email. 
 
<?php
 
}
?>
