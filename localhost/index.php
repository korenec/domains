<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi user!</title>
</head>
<body>
<h1>This Test page index.php</h1>
<?php

 //-----------------------------------------------------------------------------

$guess = $_POST['guess'];
$numPetals = $_POST['numPetals'];

echo "$guess проверка $numPetals";

printGreeting();
printDice();
printForm();

function printGreeting(){
    global $guess, $numPetals;
    if (empty($guess)){
        echo "<h3>Welcome to Petals Around the Rose:_____\$guess is empty!!!</h3>";
    } else if ($guess == $numPetals){
        echo "<h3>Победа !!!</h3>";
    } else {
echo <<<HERE
<h3>from last try: </h3>
you guessed: $guess<br><br>
-and the correct answer was: $numPetals petals around the rose<br>
Проигрыш !
HERE;
}
}

function printDice(){
    global $numPetals;

    echo "<h3>New Roll:</h3>";
    $numPetals = 0;

    $die1 = rand(1,6);
    $die2 = rand(1,6);
    $die3 = rand(1,6);
    $die4 = rand(1,6);
    $die5 = rand(1,6);
    $die6 = rand(1,6);

    showDie($die1);
    showDie($die2);
    showDie($die3);
    showDie($die4);
    showDie($die5);

    echo "<br><br>";

    calcNumPetals($die1);
    calcNumPetals($die2);
    calcNumPetals($die3);
    calcNumPetals($die4);
    calcNumPetals($die5);
}

function showDie($value){
echo <<<HERE
<img src = "die$value.jpg" herght = 100 width = 100>
HERE;
}

function calcNumPetals($value){
    global $numPetals;

    switch ($value){
        case 3:
            $numPetals += 2;
            break;
        case 5:
            $numPetals +=4;
            break;
    }
}

function printForm(){
    global $numPetals;
echo <<<HERE
<h3>How Many petals around the rose?</h3><br>

<form method = "post" action="index.php">
<input type = "text" 
        name = "guess" 
        value = "">

<input type = "hidden" 
        name = "numPetals" 
        value = "$numPetals">
<br>
<input type="submit"
        value="Оттослать!!">
</form>
HERE;
}
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

<br>
</body>
</html>