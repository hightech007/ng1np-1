<?php
$to = 'aska.szr@gmail.com';
$subject = 'Output kontakt forme - Aska - test';
$contact_submitted = 'Vaša poruka je uspešno poslata. Odgovorićemo Vam u najskorijem roku!<br />Srdačno "Aska"';

function email_is_valid($email) {
  return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
}
if (!email_is_valid($to)) {
  echo '<p style="color: red;">Morate napisati validnu email adresu 
da bi kontakt forma funkcionisala.</p>';
}
if (isset($_POST['contact_submitted'])) {
$return = "\r";
$youremail = trim(htmlspecialchars($_POST['your_email']));
$yourname = stripslashes(strip_tags($_POST['your_name']));
$yourmessage = stripslashes(strip_tags($_POST['your_message']));
$contact_name = "Ime: ".$yourname;
$message_text = "Poruka: ".$yourmessage;
$user_answer = trim(htmlspecialchars($_POST['user_answer']));
$answer = trim(htmlspecialchars($_POST['answer']));
$message = $contact_name . $return . $message_text;
$headers = "Od: ".$youremail;
if (email_is_valid($youremail) && !eregi("\r",$youremail) && !eregi("\n",$youremail) && $yourname != "" && $yourmessage != "" && substr(md5($user_answer),5,10) === $answer) {
  mail($to,$subject,$message,$headers);
  $yourname = '';
  $youremail = '';
  $yourmessage = '';
  echo '<p style="color: yellowgreen; font-size: 1.3em; text-shadow: 0px 1px 3px #212121;">'.$contact_submitted.'</p>';
}
else echo '<p style="color: orangered; font-size: 1.3em; text-shadow: 0px 1px 3px #212121;">
Molimo Vas ukucajte Vaše ime, Vašu validnu email adresu. Vašu poruku i Vaš odgovor na jednostavan 
matematički izraz, <br /> Sve to proverite pre nego što pošaljete poruku.<br />Pokušajte opet!</p>';
}
$number_1 = rand(1, 9);
$number_2 = rand(1, 9);
$answer = substr(md5($number_1+$number_2),5,10);
?>
<p>
<form id="contact" action="" method="post">
<span>Vaše Ime</span><br /><input class="contact" type="text" name="your_name" value="<?php echo $yourname; ?>" /><br />
<span>Vaš Email</span><br /><input class="contact" type="text" name="your_email" value="<?php echo $youremail; ?>" /><br />
<span>Vaša poruka</span><br /><textarea class="contact textarea" rows="7" cols="30" name="your_message">
<?php echo $yourmessage; ?></textarea><br />
<b>Спамбот протектор:</b><br /> 
Докажите да нисте робот, Молимо унесите тачан резултат:<br />
<span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ? </span><input type="text" name="user_answer" />
<input type="hidden" name="answer" value="<?php echo $answer; ?>" /><br />
<span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Pošalji" />
</form>
</p>