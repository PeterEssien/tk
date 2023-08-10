<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("986.h.filess.io","KwestaDB_duckanyboy","45cd3f791b190d685d77192edd6b515a6001cd2f","KwestaDB_duckanyboy");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
