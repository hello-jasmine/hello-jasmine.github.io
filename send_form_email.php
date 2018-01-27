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
    $jasmine_milk = $_POST['jasmine-milk'];
    $oolong_milk = $_POST['oolong-milk'];
    $pouchong_milk = $_POST['pouchong-milk'];
    $chicken = $_POST['chicken'];
    $pork = $_POST['pork'];
    $popcorn = $_POST['popcorn'];
    $beef = $_POST['beef'];
    $tofu = $_POST['tofu'];
 
   
 
 

 
    $email_message = "Order details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name : ".clean_string($first_name)."\n";
    $email_message .= "Last Name : ".clean_string($last_name)."\n";
    $email_message .= "Email : ".clean_string($email_from)."\n";
    $email_message .= "Telephone : ".clean_string($telephone-number)."\n";
    $email_message .= "Comments : ".clean_string($date_time)."\n";
    $email_message .= "Assam Black Tea : ".clean_string($assam)."\n";
    $email_message .= "Jasmine Green Tea : ".clean_string($jasmine)."\n";
    $email_message .= "Roasted Oolong Tea : ".clean_string($oolong)."\n";
    $email_message .= "Pouchong Tea : ".clean_string($pouchong)."\n";
    $email_message .= "Taiwanese Style Milk Tea : ".clean_string($taiwanese)."\n";
    $email_message .= "Jasmine Green Milk Tea : ".clean_string($jasmine_milk)."\n"; 
    $email_message .= "Roasted Oolong Milk Tea : ".clean_string($oolong_milk)."\n";  
    $email_message .= "Pouchong Milk Tea : ".clean_string($pouchong_milk)."\n";
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
