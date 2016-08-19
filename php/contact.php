<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'b.albemar@gmail.com';
$title = 'Subject of the message';
$header = 'From: ' . $email;
$emailMsg = "Name: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit']) {
if (mail($to, $title, $emailMsg, $header)) {
echo "<script language='javascript'>
alert('Contact form sent.');
window.location.href = 'http:apedrolam.github.io';
</script>";
} else {
echo 'Oops! An error ocurred.';
}
}
?>