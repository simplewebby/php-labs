<?php

//Phone numbers as: 999-999-9999
$phone_pattern = '/^[[:digit:]]{3}-[[:digit:]]{3}-[[:digit:]]{4}$/';
//Credit card numbers as: 9999-9999-9999-9999
$credit_card_pattern = '/^[[:digit:]]{4}(-[[:digit:]]{4}){3}$/';
//Zip codes as either: 99999 or 99999-9999
$zip_pattern = '/^[[:digit:]]{5}(-[[:digit:]]{4})?$/';
// Dates as: mm/dd/yyyy
$date_pattern = '/^(0?[1-9]|1[0-2])\/(0?[1-9]|[12][[:digit:]]|3[01])\/
[[:digit:]]{4}$/     // on one line with no spaces';




function isPhoneValid($strPhone){
    global $phone_pattern;
    return preg_match($phone_pattern, $strPhone);
}

function valid_email ($email) {
    $parts = explode("@", $email);
    if (count($parts) != 2 ) return false;
    if (strlen($parts[0]) > 64) return false;
    if (strlen($parts[1]) > 255) return false;

    $atom = '[[:alnum:]_!#$%&\'*+\/=?^`{|}~-]+';
    $dotatom = '(\.' . $atom . ')*';
    $address = '(^' . $atom . $dotatom . '$)';
    $char = '([^\\\\"])';
    $esc  = '(\\\\[\\\\"])';
    $text = '(' . $char . '|' . $esc . ')+';
    $quoted = '(^"' . $text . '"$)';
    $local_part = '/' . $address . '|' . $quoted . '/';
    $local_match = preg_match($local_part, $parts[0]);
    if ($local_match === false
        || $local_match != 1) return false;
    $hostname =
        '([[:alnum:]]([-[:alnum:]]{0,62}[[:alnum:]])?)';
    $hostnames = '(' . $hostname .
                 '(\.' . $hostname . ')*)';
    $top = '\.[[:alnum:]]{2,6}';
    $domain_part = '/^' . $hostnames . $top . '$/';
    $domain_match = preg_match($domain_part, $parts[1]);
    if ($domain_match === false
        || $domain_match != 1) return false;

    return true;
}
// CC Validation
function valid_cc($strCard){
	global $credit_card_pattern;
	return preg_match($credit_card_pattern, $strCard);
}

//  Zip Code
function valid_zip($strZip){
	global $zip_pattern;
	return preg_match($zip_pattern, $strZip);
}
