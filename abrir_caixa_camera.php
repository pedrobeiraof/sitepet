<?php
system("gpio mode 3 out");
system("gpio write 3 0"); 
system("gpio mode 0 out");
system("gpio write 0 1");
sleep(5);
system("gpio write 0 0");
system("gpio write 3 1"); 
header('Location: camera.php');
?>
