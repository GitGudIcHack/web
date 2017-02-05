<?php

$con = mysql_connect("mhutti1.eu","ichack","ichack","ichack");

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("COMMENTS", $con);

?>
