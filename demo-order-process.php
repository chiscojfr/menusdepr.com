<?php  session_start();
if( isset($_POST['submit']) )
{
 $to = 'uxliner9@gmail.com'; // Replace with your email
 $subject = 'Reservation Order from website'; // Replace with your subject if you need
 $message = 'Name: ' . $_POST['name'] . "\n" .
       'Number of Guests: ' . $_POST['budget']. "\n" .
       'E-mail: ' . $_POST['email']. "\n" .
       'Phone: ' . $_POST['phone']. "\n" .
       'Date: ' . $_POST['start']. "\n" .
       'About project: ' . $_POST['comment']. "\n\n\n";
  
  mail ($to, $subject, $message, $headers);
}
?>