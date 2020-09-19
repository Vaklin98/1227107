<?php 
echo "Hello world ";
$username ="Vaklin98";
echo $username."<br>";
echo"my name is $username  <br>";
$age = 12;
echo $age;
$istrue = true;
echo $istrue."<br>";
$username_Array = ["vaklin","danBoy"];
echo $username_Array[0];
 $username_Asoc_Array = ["username"=>"Vaklin","h"=>"3"];
 echo"<br>";
echo $username_Asoc_Array["h"];
echo"<br>";
for($i =0;$i<2;$i++) 
{
 echo $username_Array[$i]; 
 echo"<br>";  

}
foreach($username_Asoc_Array as $key => $dsad) 
{
    echo $key."<br>";
    echo $dsad."<br>";
}