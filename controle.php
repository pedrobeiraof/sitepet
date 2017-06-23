<html>
<?php
session_start();
?>
<div id="atu"><strong>
<?php                 
                            
              date_default_timezone_set('America/Sao_Paulo');
                  $hora_on =$_SESSION["hora"];
                  $min_on = $_SESSION["minuto"];
                  $hora_on1 =$_SESSION["hora1"];
                  $min_on1 = $_SESSION["minuto1"];
                  $hora_on2 =$_SESSION["hora2"];
                  $min_on2 = $_SESSION["minuto2"];
                    
                  $hora = date('H');
                  $minuto = date('i');
                  $segundo = date('s');
                  
              
              if($minuto == $min_on && $segundo == 1 && $hora == $hora_on){             
                    system("gpio mode 3 out");  
                        system("gpio write 3 0");                   
                    system("gpio mode 0 out");
                        system("gpio write 0 1");
                        shell_exec("sudo raspistill -o cam.jpg");
                        sleep(5);
                        system("gpio write 0 0");
                        system("gpio write 3 1");       
                  } 

                  if($minuto == $min_on1 && $segundo == 1 && $hora == $hora_on1){
                        system("gpio mode 3 out");
                        system("gpio write 3 0");                     
                  system("gpio mode 0 out");
                        system("gpio write 0 1");
                        sleep(5);
                        system("gpio write 0 0");
                        system("gpio write 3 1"); 
                  } 
    
                  if($minuto == $min_on2 && $segundo == 1 && $hora == $hora_on2){
                        system("gpio mode 3 out");
                        system("gpio write 3 0"); 
                       system("gpio mode 0 out");
                        system("gpio write 0 1");
                        sleep(5);
                        system("gpio write 0 0");
                        system("gpio write 3 1"); 
              }               
              
              system("gpio mode 2 in");
              if (system("gpio read 2") == 1){
                 $proximidade = 0;
              }
              if (system("gpio read 2") == 0){
                  $proximidade = 1;
              }
              
              $_SESSION['proximidade'] = $proximidade;
          ?>
          </strong></div>
          </html>