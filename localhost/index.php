<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
    <style type = "text/css">
        body {
            background: #aacc77;
            color: purple;
        }
    </style>
</head>
<body>
<center>
<?php







//------------------------------------------------------------------------------------
// Игра угадай число компуктера !!

$num = $_GET['num'];
$player = $_GET['player'];

echo "<form>";
if (empty($num)){
    $num = rand(1,10);
    echo "Отгадай число от 1 до 10 <br>";
}

echo <<<HERE
<input type = "text" name = "player" value = "$player">
<input type = "hidden" name = "num" value = "$num">
<input type = "submit">
HERE;
if ($num == $player){
    echo "<br>Угадал !";
} else if ($num < $player){
    echo "<br> Загаданое число меньше вашего !";
} else if ($num > $player){
    echo "<br> Загаданое число Больше вашего !";
}
echo "</form>";

// //------------------------------------------------------------------------------------
// echo "<form>";
// // Poker
// $cash = $_GET['cash'];
// $secondRoll = $_GET['secondRoll'];
// $numFives = $_GET['numFives'];
// $numFours = $_GET['numFours'];
// $numPairs = $_GET['numPairs'];
// $numVals = $_GET['numVals'];
// $numPetals = $_GET['numPetals'];
// $numThrees = $_GET['numThrees'];
// $payoff = $_GET['payoff'];
// $theFile = $_GET['theFile'];
// $keepIt = $_GET['keepIt'];
// $die = $_GET['die'];



// if (empty($cash)){
//     $cash = 100;
// }

// rollDice();

// if ($secondRoll == TRUE){
//     echo "<h2>Второй бросок</h2>\n";
//     $secondRoll = FALSE;
//     evaluate();
// } else {
//     echo "<h2>Первый бросок</h2>\n";
//     $secondRoll = TRUE;
// }

// printStuff();

// function rollDice(){
//     global $die, $secondRoll, $keepIt;
//     echo "<table border = 1><td><tr>";
//     for ($i = 0; $i < 5; $i++){
//         if ($keepIt[$i] == ""){
//             $die[$i] = rand(1,6);
//         } else {
//             $die[$i] = $keepIt[$i];
//         }
//         $theFile = "die" . $die[$i] . ".jpg";
//         echo <<<HERE
// <td>
// <img src = "$theFile" height = 50 width = 50><br>
// HERE;
// if ($secondRoll == FALSE){
// echo <<<HERE
// <input type = "checkbox" name = "keepIt[$i]" value = $die[$i]>
// </td>
// HERE;
// }
// }
// echo <<<HERE
// </tr></td>
// <tr>
// <td colspan = "5">
// <center>
// <input type = "submit" value = "Перебросить кости">
// </center>
// </td>
// </tr>
// </table>
// HERE;
// }

// function evaluate(){
//     global $die, $cash;
//     $payoff = 0;
//     $cash -= 5;
//     $numVals = array(6);
//     for ($theVal = 1; $theVal <= 6; $theVal++){
//         for ($dieNum = 0; $dieNum < 5; $dieNum++){
//             if ($die[$dieNum] == $theVal){
//                 $numVals[$theVal]++;
//             }
//         }
//     }
//     // for ($i = 1; $i <= 6; $i++){  // участо кода для проверки
//     //     echo "$i: $numVals[$i]<br>\n";
//     // } 
//     $numPairs = 0;
//     $numThrees = 0;
//     $numFours = 0;
//     $numFives = 0;

//     for ($i = 1; $i <= 6; $i++){
//         switch ($numVals[$i]){
//             case 2:
//                 $numPairs++;
//                 break;
//             case 3:
//                 $numThrees++;
//                 break;
//             case 4:
//                 $numFours++;
//                 break;
//             case 5:
//                 $numFives++;
//                 break;
//         }
//     }
//     // Проверяем есть ли две пары
//     if ($numPairs == 2){
//         echo "у вас две пары!<br>\n";
//         $payoff = 1;
//     }
//     //проверка на три пары
//     if ($numThrees == 1){
//         if ($numPairs == 1){
//             echo "у вас full house!<br>\n";
//             $payoff = 5;
//         } else {
//             echo "You have three of a kind!<br>\n";
//             $payoff = 2;
//         }
//     }
//     // ищем четыре одинаковых
//     if ($numFours == 1){
//         echo "You have four of a kind!<br>\n";
//         $payoff = 5;
//     }
//     // ищем 5 одинаковых
//     if ($numFives == 1){
//         echo "You got five of a kind!<br>\n";
//         $payoff = 10;
//     }
//     // ищем стрит 
//     if (($numVals[1] == 1)
//     && ($numVals[2] == 1)
//     && ($numVals[3] == 1)
//     && ($numVals[4] == 1)
//     && ($numVals[5] == 1)){
//         echo "You have a straight!<br>\n";
//         $payoff = 10;
//     }
//     if (($numVals[2] == 1)
//     && ($numVals[3] == 1)
//     && ($numVals[4] == 1)
//     && ($numVals[5] == 1)
//     && ($numVals[6] == 1)){
//         echo "You have a straight!<br>\n";
//         $payoff = 10;
//     }
//     echo "You bet 2<br>\n";
//     echo "Payoff is $payoff<br>\n";
//     $cash += $payoff;
// }

// function printStuff(){
//     global $cash, $secondRoll;
//     echo "Cash: $cash\n";
//     // сохраняем переменные в скрытых полях
//     echo <<<HERE
// <input type = "hidden" name = "secondRoll" value = "$secondRoll">
// <input type = "hidden" name = "cash" value = "$cash">
// HERE;
// }
// echo "</form>";
//---------------------------------------------------------
// $txtBoxCounter = $_GET['txtBoxCounter'];
// $hdnCounter = $_GET['hdnCounter'];

// echo "<form>";
// $txtBoxCounter++;
// $hdnCounter++;
// echo <<<HERE

// <input type = "text" 
//        name = "txtBoxCounter" 
//        value = "$txtBoxCounter">

// <input type = "hidden"
//        name = "hdnCounter" 
//        value = "$hdnCounter">

// <h3>The hidden value is $hdnCounter</h3>

// <input type = "submit" 
//        value = "Прибавить +1">

// HERE;
// echo "</form>";


//---------------------------------------------------------------
// $place = array(
//     "",
//     "on my thumb",
//     "on my shoe",
//     "on my knee",
//     "on a door"
// );
// for ($verse = 1; $verse <= 4; $verse++){
//     echo "This old man, He played $verse<br>
//     He played knick-knack $place[$verse]<br>
//     ...with a knick, knack, pady-whck<br>
//     give a dog a  bone<br>
//     This old man came rolling home<br><br>";
// }

//--------------------------------------------------------------
// $rok[1] = "QQQQQ";
// $rok[2] = "wwwwww";
// $rok[3] = "eeeeee";

// for ($i = 1; $i <= 3; $i++){
//     echo "$i : $rok[$i]<br>";
// }
// echo "<br><br>";

// $test = array("qqqqqq", "wwwwwww", "eeeeeeee", "rrrrrrrr");

// for ($i = 0; $i < count($test); $i++){
//     echo "$i\n : $test[$i]<br>";
// }
//-------------------------------------------------------------
// $i =TRUE;
// while ($i){
//     echo "$e\n";
//     $e += 1;
//     if ($e==10){
//         $i = FALSE;
//     }
// }

//----------------------------------------------------------------------------------

// for ($i = 1; $i < 1000; $i++){   
//     if (($i%3)==0 || ($i%5)==0){
//         echo "$i\n,\n";
//         $sum += $i;      
//     } 
// }
// echo "Сумма=\n", $sum, "<br>";

 //-----------------------------------------------------------------------------
// $guess = $_POST['guess'];
// $numPetals = $_POST['numPetals'];

// $timme = time();
// $nowTime = $timme - $_POST['timme'];
// echo "<center>";
// echo "<br>";
// echo "Вы думали $nowTime секунд ";
// echo "<br>";

// printGreeting();
// printDice();
// printForm();

// function printGreeting(){
//     global $guess, $numPetals, $nowTime;
//     if (empty($guess)){
//         echo "<h3>Вы зашли первый раз в игру \"Угадай сколько лепестков у розы\"</h3>";
//     } else if ($guess == $numPetals){
//         if ($nowTime <= 6){
//             echo "<h1>Победа !!!</h1>";
//         } else {
//             echo "<h2>Вы слишком долго думали и проиграли !</h2>";
//         }
//     } else {
// echo <<<HERE
// <h2>Неверно !</h2>
// Ваш ответ : $guess <br>
// Правильный ответ: $numPetals лепестков у розы !<br>
// Проигрыш !
// HERE;
// }
// }

// function printDice(){
//     global $numPetals;

//     echo "<br>";
//     $numPetals = 0;

//     $die1 = rand(1,6);
//     $die2 = rand(1,6);
//     $die3 = rand(1,6);
//     $die4 = rand(1,6);
//     $die5 = rand(1,6);
//     $die6 = rand(1,6);

//     showDie($die1);
//     showDie($die2);
//     showDie($die3);
//     showDie($die4);
//     showDie($die5);

//     echo "<br><br>";

//     calcNumPetals($die1);
//     calcNumPetals($die2);
//     calcNumPetals($die3);
//     calcNumPetals($die4);
//     calcNumPetals($die5);
// }

// function showDie($value){
// echo <<<HERE
// <img src = "die$value.jpg" herght = 100 width = 100>
// HERE;
// }

// function calcNumPetals($value){
//     global $numPetals;

//     switch ($value){
//         case 3:
//             $numPetals += 2;
//             break;
//         case 5:
//             $numPetals +=4;
//             break;
//     }
// }

// function printForm(){
//     global $numPetals, $timme;
// echo <<<HERE
// <h3> Сколько лепестков розы Вы насчитали ? </h3><br>

// <form method = "post" action="index.php">
// <input type = "text" 
//         name = "guess" 
//         value = "">

// <input type = "hidden" name = "timme" value = "$timme">

// <input type = "hidden" 
//         name = "numPetals" 
//         value = "$numPetals">
// <br>
// <input type="submit"
//         value="Отослать!!">

// </form>
// HERE;
// }
// echo "</center>";
 //---------------------------------------------------------------------------------------------



// $x = rand(1,5);

// $h = "Hellicopter";
// $s = "Silent";

// switch($x){
//     case 1:
//         echo $h;
//         break;
//     case 2:
//         echo $s;
//         break;
//     case 3:
//         echo "It is 3 @@";
//         break;
//     case 4:
//         echo $h, $s;
//         break;
//     case 5:
//         echo "it is imposible", "<br>", "real is cool<br>", "yahooohh";
//         break;
//     default:
//     echo "it is default!!";
// }




 //-----------------------------------------------
// $a = "I have a value";
// $b = "I have a value";
// print <<<HERE
// outside the function,<br>
// \$a is "$a", and<br>
// \$b is "$b"<br>
// HERE;

// myFunction();
// function myFunction(){
// global $a;  //глобальная переменная
// print <<<HERE
// inside the function,<br>
// \$a is "$a", and<br>
// \$b is "$b"<br>
// HERE;
// }

/* // ------------------------------------------------------------------------------------------
// Возвращаем значение: функции chorus()  страница 103
function chorus(){
$output = <<<HERE
...with a knick-knack<br>
paddy-whack<br>
give a dog a bone<br>
this old man came rolling home<br><br><br>
HERE;
return $output;
}
echo chorus();
*/
 //------------------------------------------------------------------------------------------
// страница 96
// $userName = $_GET['userName']; // пример не работает без этой строки !!!
// if (empty($userName)){
// print <<<HERE
// <form>
// Please enter your name:
// <input type = "text" name = "userName"><br>
// <input type = "submit">
// </form>
// HERE;
// } else {
// print "<h3>Hi there, $userName!</h3>";
// }

//--------------------------------------------------------------------------------------------------
/* // страница 101
print verse(1);
print chorus();
print verse(2);
print chorus();
print verse(3);
print chorus();
print verse(4);
print chorus();

function verse($stanza){
    switch ($stanza){
        case 1:
            $place = "thumb";
            break;
        case 2:
            $place = "shoe";
            break;
        case 3:
            $place = "knee";
            break;
        case 4:
            $place = "door";
            break;
        default:
        $place = "i dont know where";
    }
$output = <<<HERE
This old man, he played $stanza<br>
He played knick-knack on my $place<br><br>
HERE;
return $output;
}

function chorus(){
    $output = <<<HERE
...with a knick-knack<br>
paddy-whack<br>
give a dog a bone<br>
this old man came rolling home<br><br><br>
HERE;
return $output;
}
*/

//-------------------------------------------------------------------------------------------------

// function verse1(){
// print <<<HERE
// old man old man he shet<br>
// lala old man shet<br><br><br>
// HERE;
// }
// function verse2(){
// print <<<HERE
// old man222 old man222 he shet<br>
// lala old222 man shet<br><br><br>
// HERE;
// }
// function chorus(){
// print <<<HERE
// ...with a knick-knack chorus<br><br><br>
// HERE;
// }
?>
</center>
</body>
</html>