<?php

require 'MailUtils.php';

$mail = new MailUtils('xx@xxx.xx', 'hello', 'exo 179', 'xxx@xxxxxxx.xxx');

echo $mail->sendMail();
