<?
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && !empty($_POST['name'])) {
    $message = 'Name: ' . $_POST['name'] . ' ';
    $message .= 'Phone: ' . $_POST['email'] . ' ';
    
    $mailTo = "info@example.com"; // Your e-mail
    $subject = "Letter from the site"; // Message subject
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: info@example.com <info@example.com>\r\n";
    if(mail($mailTo, $subject, $message, $headers)) {
        echo "Thank you, ".$_POST['name'].", we will contact you as soon as possible!"; 
    } else {
        echo "Message not sent!"; 
    }
}
?>