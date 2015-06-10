<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "office@balkan-frukt.rs";
    $email_subject = "Input poslat iz kontakt forme";
     
     
    function died($error) {
        // your error code can go here
        echo "Izvinjavamo se, doslo je do nekih gresaka prilikom popunjavanja formulara. ";
        echo "Error. greska.<br /><br />";
        echo $error."<br /><br />";
        echo "Molimo vratite se i ispravite greske.<br /><a href='index.php?q=kontakt'>Pokusajte ponovo</a><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Izvinjavamo se, doslo je do nekih gresaka prilikom popunjavanja formulara.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'E-Mail adresa koju ste uneli nije validna.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Ime koje ste uneli nije validno.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Prezime koju ste uneli nije validno.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'Poruka koju ste uneli nije validna.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Detalji forme.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Ime: ".clean_string($first_name)."\n";
    $email_message .= "Prezime: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telefon: ".clean_string($telephone)."\n";
    $email_message .= "Poruka: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<h1>Hvala sto ste nas kontaktirali. Odgovoricemo Vam u najskorijem mogucem roku!</h1>
 echo "Molimo vratite se i ispravite greske.<br /><a href='index.php?q=kontakt'>Vrati se na sajt</a></a><br />";
<?php
}
?>
