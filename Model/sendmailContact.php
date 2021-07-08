<?php

$header="MIME-Version: 1.0\r\n";
$header.='From:"Phonemarket.com"<support@phonemarket.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';




mail("phonemarketintechs2@gmail.com", $object, $subject, $header);

?>
