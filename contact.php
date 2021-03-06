<?php

// configure variables
$from = 'info@oncotarget.com';
$sendTo = 'support@oncotarget.com';
$subject = 'New message from contact form';
$fields = array('name' => 'Name', 'phone' => 'Phone', 'email' => 'Email', 'address'=> 'Address', 'subject' => 'Subject' 'message' => 'Message'); // array variable name => Text to appear in email
$okMessage = 'Contact form successfully submitted. Thank you!';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// sending out the form

try
{
    $emailText = "You have new message from contact form\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    mail($sendTo, $subject, $emailText, "From: " . $from);

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}
