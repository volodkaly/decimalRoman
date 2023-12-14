<?php
function solution($number) {
if ($number<0 or $number>4999) echo 'Please enter a valid value';

else {
  $letters149 = [0=>"I",1=>"X",2=>"C",3=>"M"];
  $letters58 = [0=>"V",1=>"L",2=>"D"];
  $a = str_split ($number);
  
  foreach ($a as $key=>&$val){
  $a[$key]=1*($a[$key].str_repeat ("0",count($a)-$key));
    }
  foreach ($a as $key=>&$val){
     $a[$key] = preg_replace('/0/',"",$a[$key],1);
  }
   
  foreach ($a as $key=>&$val){
    if (substr_count($a[$key],"1") == 1)
      $a[$key] = $letters149[substr_count($a[$key],"0")];
      if (substr_count($a[$key],"2") == 1)
      $a[$key] = str_repeat($letters149[substr_count($a[$key],"0")],2);
      if (substr_count($a[$key],"3") == 1)
      $a[$key] = str_repeat($letters149[substr_count($a[$key],"0")],3);
      
      if ($a[$key]==4000)
      $a[$key] = "MMMM";
      if (substr_count($a[$key],"4") == 1 and $a[$key]!=4000)
      $a[$key] = $letters149[substr_count($a[$key],"0")].$letters58[substr_count($a[$key],"0")];
      if ($a[$key]==5000)
      $a[$key] = "MMMMM";
      if (substr_count($a[$key],"5") == 1 and $a[$key]!=5000)
      $a[$key] = $letters58[substr_count($a[$key],"0")];
      if ($a[$key]==6000)
      $a[$key] = "MMMMMM";
      if (substr_count($a[$key],"6") == 1 and $a[$key]!=6000)
      $a[$key] = $letters58[substr_count($a[$key],"0")].$letters149[substr_count($a[$key],"0")];
      if ($a[$key]==7000)
      $a[$key] = "MMMMMMM";
      if (substr_count($a[$key],"7") == 1 and $a[$key]!=7000)
      $a[$key] = $letters58[substr_count($a[$key],"0")].$letters149[substr_count($a[$key],"0")].$letters149[substr_count($a[$key],"0")];
      if ($a[$key]==8000)
      $a[$key] = "MMMMMMMM";
      if (substr_count($a[$key],"8") == 1 and $a[$key]!=8000)
      $a[$key] = $letters58[substr_count($a[$key],"0")].$letters149[substr_count($a[$key],"0")].$letters149[substr_count($a[$key],"0")].$letters149[substr_count($a[$key],"0")];
   
      if ($a[$key]==9000)
      $a[$key] = "MMMMMMMMM";
      if (substr_count($a[$key],"9") == 1 and $a[$key]!=9000)
      $a[$key] = $letters149[substr_count($a[$key],"0")].$letters149[substr_count($a[$key],"0")+1];
  }
  echo PHP_EOL.'Roman:'.PHP_EOL;
  echo implode("",$a);
}
}
$userInput = readline("Enter a number from 0 to 5000: ");

solution($userInput);
