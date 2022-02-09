<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi user!</title>
</head>
<body>
<h1>This Old Man</h1>
<?php

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