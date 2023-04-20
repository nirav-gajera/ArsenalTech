<?php
session_start();

$counter = 0;

if(isset($_COOKIE['counter'])) {
  $counter = $_COOKIE['counter'];
}

if(isset($_SESSION['counter'])) {
  $counter = $_SESSION['counter'];
}

$counter++;

$_SESSION['counter'] = $counter;
setcookie('counter', $counter, time()+3600);

echo "Counter value is: " . $counter;
?>

<?php
session_start();

if (!isset($_SESSION['count'])) {
  
  $_SESSION['count'] = 0;
}


if (isset($_COOKIE['count'])) {
  $_SESSION['count'] = $_COOKIE['count'];
}

$_SESSION['count']++;

setcookie('count', $_SESSION['count'], time()+3600);

echo "Counter value is: ".$_SESSION['count'];
?>

