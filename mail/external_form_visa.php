<?php	
defined('C5_EXECUTE') or die("Access Denied.");

$subject = t("Visa.jp Notification");
$body = t("
To %s owner

Visa.jp applicaiton has been sent to you by following user:

Email %s
Name %s
Checkin Time %s %s:%s %s
Message %s
", $spaceName, $eMail, $name, $checkin_dt, $checkin_h, $checkin_m, $checkin_a, $message);