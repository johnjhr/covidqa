<?php

$conn = mysql_connect("YOUR_DB_HOST", "YOUR_DB_NAME", "YOUR_DB_PASS");

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("epiz_24926192_qatarcovid")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

$sql = "SELECT date, tc, country
        FROM   data
        ORDER BY  tc DESC";

$result = mysql_query($sql);

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print";
    exit;
}

// While a row of data exists, put that row in $row as an associative array
// Note: If you're expecting just one row, no need to use a loop
// Note: If you put extract($row); inside the following loop, you'll
//       then create $userid, $fullname, and $userstatus
$row = mysql_fetch_assoc($result);
   // echo $row["id"];
  //  echo $row["date"];
  //  echo $row["tc"];
echo '<span style="font-size: 32pt;color:white">' . $row["tc"] . '                       ' .                                                              '</span>';
echo '<img src="i1.jpg" height="50" width="50"> ';



mysql_free_result($result);

?>

 

