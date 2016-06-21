<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phnno = $_POST['phnno'];
    $message = $_POST['message'];
    $from = 'From: ShivaCaterers Website'; 
    $to = 'mkedia3@gmail.com'; 
    $subject = 'New Message in ShivaCaterers Website';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Ph.no: $phnno\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>