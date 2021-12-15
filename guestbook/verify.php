<?php
include("../site/connection.php");
require_once('recaptchalib.php');
  $privatekey = "6Le5NN8SAAAAAMw4KwgpRpo8GCTXUZy5LBKdQuJn";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {

  
if(isset($_POST['nama'],$_POST['email'],$_POST['url'],$_POST['pesan'])){
$nama = str_replace("--"," ",str_replace("'"," ",$_POST['nama']));
$email = str_replace("--"," ",str_replace("'"," ",$_POST['email']));
$url = str_replace("--"," ",str_replace("'"," ",$_POST['url']));
$comment = str_replace("'"," ",str_replace("'"," ",$_POST['pesan']));
mysql_query("INSERT INTO 1_guestbook (nama,email,situs,comment) VALUES('".$nama."','".$email."','".$url."','".$comment."')")
or die("error: ".mysql_error());
echo "<script>alert('terima kasih!');</script><meta http-equiv=\"refresh\" content=\"0;url=guestbook.php\" />";
}}

?>