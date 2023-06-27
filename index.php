<?php
   $name = "bob";
   echo $name."<br/>";

   $lastname = "jérôme";
   $firstname = "Sauzet";
   $age = 50;
   echo nl2br($lastname."\n".$firstname."\n".$age."\n");

   $km = 1;
   echo $km."km <br />";
   $km += 1;
   echo $km." km <br />";
   $km += 1;
   echo $km." km <br />";

   $monString ="j'ai un beau string";
   $monInt = 2;
   $monFloat = 0.5;
   $monBool = true;

   echo $monString.", ".$monInt.", ".$monFloat.", ".$monBool."<br />";

   $int;
   echo $int = 1;
?>