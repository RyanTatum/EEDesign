<?php
  $number = $_POST["phonenumber"];
  $subject = "";
  $content = $_POST["temp"];
  $headers = "Server\r\n";
  var_dump(mail('5154194755@vtext.com', '', 'HELLLO'))
  if(mail($number,$subject,$content,$headers))
  {
	  header("location: index.php");
  }
  else
  {
	  header("location: index.php");
  }
?>