<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
    <style type = "text/css">
        body {
            background: green;
            color: tan;
        }
    </style>
</head>
<body>
<center>
<?php

$txtBoxCounter = $_GET['txtBoxCounter'];
$hdnCounter = $_GET['hdnCounter'];

echo "<form>";
$txtBoxCounter++;
$hdnCounter++;
echo <<<HERE

<input type = "text" 
       name = "txtBoxCounter" 
       value = "$txtBoxCounter">

<input type = "hidden"
       name = "hdnCounter" 
       value = "$hdnCounter">

<h3>The hidden value is $hdnCounter</h3>

<input type = "submit" 
       value = "Прибавить +1">

HERE;
echo "</form>";


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

// $sum;
// for ($i = 1; $i < 1000; $i++){   
//     if ($i%3 && $i%5){      
//     } else {
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