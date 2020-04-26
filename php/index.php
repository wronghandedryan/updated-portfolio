<?php
  $host_name = 'db5000390306.hosting-data.io';
  $database = 'dbs375341';
  $user_name = 'dbu253084';
  $password = '<Enter your password here.>';
  $connect = mysql_connect($host_name, $user_name, $password, $database);

  if (mysql_errno()) {
    die('<p>Failed to connect to MySQL: '.mysql_error().'</p>');
  } else {
    echo '<p>Connection to MySQL server successfully established.</p >';
  }
?>
<?php
  $host_name = 'db5000390306.hosting-data.io';
  $database = 'dbs375341';
  $user_name = 'dbu253084';
  $password = '<Enter your password here.>';
  $connect = mysqli_connect($host_name, $user_name, $password, $database);

  if (mysqli_connect_errno()) {
    die('<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>');
  } else {
    echo '<p>Connection to MySQL server successfully established.</p >';
  }
?>
<?php
  $host_name = 'db5000390306.hosting-data.io';
  $database = 'dbs375341';
  $user_name = 'dbu253084';
  $password = '<Enter your password here.>';
  $dbh = null;

  try {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  } catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
  }
?>