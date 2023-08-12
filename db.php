<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("gby.h.filess.io","CryptoHome_bendrawdo","e22f8adc12cb77f02b55e4643ffcfb3ef4c58977","CryptoHome_bendrawdo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
