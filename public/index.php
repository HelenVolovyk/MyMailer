<?php

require_once '../vendor/autoload.php';

use Mailer\Transport\Message;
/**
 * @param string $subject;
 * @param string $templateName;
 * @param array $vars;
 * @param string $to;
 */

Message::send($subject, $templateName, $vars, $to);
