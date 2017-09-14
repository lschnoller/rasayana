<?php

echo "<table>
	<tr>
		<th>Severity</th>
		<td>$severity</td>
	</tr>
	<tr>
		<th>Message</th>
		<td>$message</td>
	</tr>
	<tr>
		<th>Filename</th>
		<td>$filepath</td>
	</tr>
	<tr>
		<th>Line Number</th>
		<td>$line</td>
	</tr>
</table>";
/*
if ( ! function_exists('curPageURL'))
{
function curPageURL() {
 $pageURL = 'http';
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
}

$message = "
<table>
	<tr>
		<th>Severity</th>
		<td>$severity</td>
	</tr>
	<tr>
		<th>Message</th>
		<td>$message</td>
	</tr>
	<tr>
		<th>Filename</th>
		<td>$filepath</td>
	</tr>
	<tr>
		<th>Line Number</th>
		<td>$line</td>
	</tr>
	<tr>
		<th>page</th>
		<td>".curPageURL()."</td>
	</tr>
</table>";
$to = ERRORS_EMAIL;		
$subject = 'PHP ERROR (GS)';
echo $message;
$headers = 'Content-type: text/html; charset=UTF-8' . "\n";
$headers .= 'From: ERROR REPORTER <'.ADMIN_EMAIL.'>' ;
mail($to, $subject, $message, $headers);
header( 'Location: http://www.rasayana-ayurveda.com/main_page/error' ) ;

*/
?>
