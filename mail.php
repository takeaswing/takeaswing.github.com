<?php

mail('ben+tas@stolovitz.com', 'Site Response', $_GET['message'], 'From: ' . $_GET['email'] . "\r\n" .
    'Reply-To: ' . $_GET['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion());