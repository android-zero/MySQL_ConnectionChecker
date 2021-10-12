<?php
$link=mysqli_connect('localhost','kiruthik','Toor@1234');
if(!$link){
  die('Could not connect: ' . mysqli_error($link));
}
echo 'Connected Successfully';
mysqli_close($link);
?>
