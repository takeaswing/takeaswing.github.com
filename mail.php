<?php

mail('ben+tas@stolovitz.com', 'Site Response', $_POST['message'], 'From: ' . $_POST['email'] . "\r\n" .
    'Reply-To: ' . $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion());