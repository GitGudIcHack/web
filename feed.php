<?php require_once('connect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_f12_database_connect, $f12_database_connect);
$query_newsfeed_a = "SELECT * FROM newsfeed";
$newsfeed_a = mysql_query($query_newsfeed_a, $f12_database_connect) or die(mysql_error());


while($row_newsfeed_a = mysql_fetch_assoc($newsfeed_a))
{
        echo("<div class='feedItem'>");
    echo("<div class='title'>" . $feedItem['title'] . "</div>");
    echo("<div class='body'>" . $feedItem['body'] . "</div>");
    echo("</div>");



}
$totalRows_newsfeed_a = mysql_num_rows($newsfeed_a);
?>

<?php
mysql_free_result($newsfeed_a);
?>





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>

<script>
    function refreshNews()
    {
        $("#news").load("ajax.php")
    }
</script>
</head>

<body>





<div id="news"></div>
</body>
</html>


<script>
    function refreshNews()
    {
        $("#news").load("path/to/ajax.php")
    }
</script>

<div id="news"></div>






$sql = "SQL TO GET NEWS FEED";

$result = mysql_query($sql);

while($feedItem = mysql_fetch_assoc($result))
{
    echo("<div class='feedItem'>");
    echo("<div class='title'>" . $feedItem['title'] . "</div>");
    echo("<div class='body'>" . $feedItem['body'] . "</div>");
    echo("</div>");
}
