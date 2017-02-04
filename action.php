<?php
if( $_POST )
{
  // At this point in the code, we know someone has posted data and
  // is trying to post a comment. We therefore need to now connect
  // to the database

  // Below we are setting up our connection to the server. Because
  // the database lives on the same physical server as our php code,
  // we are connecting to "localhost". inmoti6_myuser and mypassword
  // are the username and password we setup for our database when
  // using the "MySQL Database Wizard" within cPanel
  $con = mysql_connect("mhutti1.eu","ichack","ichack","ichack");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("COMMENTS", $con);

  $user_id = 0;
  $question_id = 0;
  $question_val = $_POST['question_val'];
  $option1 = $_POST['option1'];
  $option2 = $_POST['option2'];
  $count1 = 0;
  $count2 = 0;

  $question_val = mysql_real_escape_string($question_val);
  $option1 = mysql_real_escape_string($option1);
  $option2 = mysql_real_escape_string($option2);

  $query = "
  INSERT INTO `mhutti1.eu`.`COMMENTS` (`user_id`, `question_id`, `question_val`, `option1`,
        `option2`, `count1`, `count2`) VALUES (`$user_id`, `$question_id`, `$question_val`, `$option1`,
        `$option2`, `$count1`, `$count2`);";

  // Our SQL stated is stored in a variable called $query. To run the SQL command
  // we need to execute what is in the $query variable.
  mysql_query($query);

  // We can inform the user to what's going on by printing a message to
  // the screen using php's echo function
  echo "<h2>Thank you for your Comment!</h2>";

  // At this point, we've added the user's comment to the database, and we can
  // now close our connection to the database:
  mysql_close($con);
}
?>
