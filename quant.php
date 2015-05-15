<?

$Misl="квант"; // (входящая мысль - смысл, идея, образ (группа, кластер), вопрос, ответ, сообщение, название, имя, существительное)

$biochislo=$Misl;

$biochislo= str_replace("и", "1", $biochislo);    $biochislo= str_replace("с", "1", $biochislo);    $biochislo= str_replace("э", "1", $biochislo);                                                       //1
$biochislo= str_replace("а", "2", $biochislo);    $biochislo= str_replace("й", "2", $biochislo);    $biochislo= str_replace("т", "2", $biochislo);    $biochislo= str_replace("п", "2", $biochislo);     //2
$biochislo= str_replace("б", "3", $biochislo);    $biochislo= str_replace("з", "3", $biochislo);    $biochislo= str_replace("м", "3", $biochislo);    $biochislo= str_replace("ю", "3", $biochislo);     //3
$biochislo= str_replace("в", "4", $biochislo);    $biochislo= str_replace("к", "4", $biochislo);    $biochislo= str_replace("ф", "4", $biochislo);    $biochislo= str_replace("я", "4", $biochislo);     //4
$biochislo= str_replace("д", "5", $biochislo);    $biochislo= str_replace("л", "5", $biochislo);    $biochislo= str_replace("х", "5", $biochislo);    $biochislo= str_replace("ы", "5", $biochislo);     //5
$biochislo= str_replace("е", "6", $biochislo);    $biochislo= str_replace("о", "6", $biochislo);    $biochislo= str_replace("ц", "6", $biochislo);    $biochislo= str_replace("ь", "6", $biochislo);     //6
$biochislo= str_replace("ё", "7", $biochislo);    $biochislo= str_replace("н", "7", $biochislo);    $biochislo= str_replace("ъ", "7", $biochislo);                                                       //7
$biochislo= str_replace("г", "8", $biochislo);    $biochislo= str_replace("у", "8", $biochislo);    $biochislo= str_replace("ч", "8", $biochislo);    $biochislo= str_replace("щ", "8", $biochislo);     //8
$biochislo= str_replace("ж", "9", $biochislo);    $biochislo= str_replace("р", "9", $biochislo);    $biochislo= str_replace("ш", "9", $biochislo);                                                       //9

$energy=$biochislo % 9;
// if ($energy==0) { $energy=9; } 

echo "--- Свойства Кванта ---"."<br><br>";

echo "Мысль=".$Misl."<br>";
echo "Биочисло=".$biochislo."<br>";
echo "Энергия=".$energy."<br>";

?>
