<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 2</title>
</head>
<body>
<?php
$roll = rand(1,6);
print "<h1>Выпало число: $roll</h1>";

switch ($roll){
    case 1:
        $romValue = "I";
        break;
    case 2:
        $romValue = "II";
        break;
    case 3:
        $romValue = "III";
        break;
    case 4:
        $romValue = "IV";
        break;
    case 5:
        $romValue = "V";
        break;
    case 6:
        $romValue = "VI";
        break;
    default:
    print "Неработает свитч кейс !!";
}


print "<br>";
print "<img src=die$roll.jpg>";
print "<br>";
print "Римское значение: $romValue";

?>
<br>

</body>
</html>