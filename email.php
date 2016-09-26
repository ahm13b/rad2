<form action="" method="post">
    <input type="submit" value="Send details to embassy" />
    <input type="hidden" name="button_pressed" value="1" />
</form>

<?php

if(isset($_POST['button_pressed']))
{
    $to      = 'ahmedmahdytech@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: ahm13b@my.fsu.edu' . "\r\n" .
        'Reply-To: ahm13b@my.fsu.edu' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>
