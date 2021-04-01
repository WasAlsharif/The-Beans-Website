<?php 
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
ini_set('sendmail_from', 'waseem.m.alsharif@gmail.com');

if (isset($_POST['txtName'])) {
$name = $_POST['txtName'];
}
else{
$name='no';
}
if (isset($_POST['txtEmail'])) {
$email = $_POST['txtEmail'];
}else{
$email='no';
}
if(isset($_POST['txtPhone'])) {
$phone = $_POST['txtPhone'];
}else{
$phone='no';}

if (isset($_POST['txtMessage'])) {
$message = $_POST['txtMessage'];
}else{
$message='no';
}
$formcontent="From: $name \n Message: $message \n Phone Number: $phone";
$recipient = "waseem.m.alsharif@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>

