<?php
// This is a comment. Anything with two slashes in front of it is a comment and will be used to explain this file if you wish to modify it.
// This file was generated by Sunrise Waterfall on Sep , 00:00:00
// First, define a variable that will hold our email.
$body = '';
// Write a little greeting so we know what the message is about.
$body .= "This is an automatically generated notification from the mail form of test mailer. \n ";
// Do the standard check for if the item is included in post
if(isset($_POST['0'])) {
// included. Fantastic!
$temp = $_POST['0'];
// some basic validation checks 
if($temp==="") {
// Show an error message.
echo '<h1>there was a problem!</h1>';
echo 'You missed out a required field! click back in your browser and try again.';
echo 'The missing field has the label: Enter your email id';
exit();
}
// append to the mail
$body .= "Q: Enter your email id \n ";
$body .= "A: '.$temp.' \n ";
} else {
// Show an error message.
echo '<h1>there was a problem!</h1>';
echo 'You missed out a required field! click back in your browser and try again.';
echo 'The missing field has the label: Enter your email id';
exit();
}
// Was anythinggiven for the multi line text field?
if(isset($_POST['1'])) {
$temp = $_POST['1'];
} else {
// Show an error message.
echo '<h1>there was a problem!</h1>';
echo 'You missed out a required field! click back in your browser and try again.';
echo 'The missing field has the label: Enter your message';
exit();
}
// Now check if the variable is empty.
if ($temp === "") {
// Show an error message.
echo '<h1>there was a problem!</h1>';
echo 'You missed out a required field! click back in your browser and try again.';
echo 'The missing field has the label: Enter your message';
exit();
}
// Append it to the mail:
$body .= "Q: Enter your message \n ";
$body .= "A: '.$temp.' \n ";
// Send the mail
mail("pranavsavla2003@gmail.com", "Automated mail from the mail form of test mailer", $body, "noreply@herokuapp.com");
// Show the success message.
echo '<doctype html>';
echo '<head>';
echo '<title>Success!</title>';
echo '</head>';
echo '<body>';
echo 'Success';
echo '</body>';
echo '</html>';
// End of file
?>