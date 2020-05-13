

<?php
if(isset($_POST['email'])) {


    $email_to = "bananburaidi@gmail.com";
    $email_subject = "o8o-b@hotmail.com";

    function died($error) {
      echo $error."<br /><br />";
      die(); }

    if(!isset($_POST['name']) ||
      !isset($_POST['email']) ||
      !isset($_POST['message'])) {
        died('نحن آسفون، ولكن حدثت مشكلة اثناء إرسال بياناتك'); }

    $first_name = $_POST['name'];
    $email_from = $_POST['email'];
    $comments = $_POST['message'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'الايميل الذي أدخلته غير صحيح<br />'; }

  if(strlen($comments) < 2) {
    $error_message .= 'الرجاء كتابة رسالتك<br />';}

  if(strlen($error_message) > 0) {
    died($error_message);}


?>
    <center>
    شكرا لك لتواصلك معنا. سوف نتواصل معك قريبا
    <br>
    <a href="home.html"> العودة الى الصفحة الرئيسية</a>
    </center>
    <?php

  }
?>
