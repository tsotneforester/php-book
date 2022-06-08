<?php

$conn = mysqli_connect("localhost", "gpxge_tsotne", /* "password" , "db name*/);
$sql = "select * from emailid";
$result = mysqli_query($conn, $sql);


$recipients = array();
while($row = mysqli_fetch_array($result)) {
    $recipients[] = $row['email'];
		var_dump($recipients);
}

$to = 'info@gpx.ge';
$subject = "E-mail subject";
$body = "E-mail body";
$headers = 'From: info@gpx.ge' . "\r\n" ;
$headers .= 'Reply-To: info@gpx.ge' . "\r\n";
$headers .= 'BCC: ' . implode(', ', $recipients) . "\r\n";

  mail($to, $subject, $body, $headers);