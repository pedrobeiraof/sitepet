<?php
system("gpio mode 0 out");
system("gpio write 0 1");
sleep(5);
system("gpio write 0 0");
header('Location: index.html');
?>