<?php

require_once '../vendor/autoload.php';

use Mailer\Transport\Message;

Message::send( $subject, $templateName,  $vars, $to);