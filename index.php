<?php 
$censuredWord = "";
$string = "Tenente Aldo Raine: Se hai sentito parlare di noi sai che il nostro lavoro non è fare prigionieri, ma uccidere i nazisti. E gli affari vanno a meraviglia. 
//Brad Pitt, Bastardi senza gloria.//";
echo $string . " "  . "<br>" . "//Lughezza caratteri citazione" . " "  . strlen($string) . "<br>";
echo "//Parola censurata:" . " " . "<strong>" . $_GET["censuredWord"] . "</strong>". "<br>";
$newString = str_replace($_GET["censuredWord"], "***", strtolower($string)) . "<br>";
echo $newString;
echo strlen($newString) . "<br>";
?>