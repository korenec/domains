<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document2</title>
</head>
<body>
<?php
$test1 = $_POST["test1"];
echo <<<HERE
<p>The spelling mistakes in the text had been highlighted in green.
The text is finished, but the pictures $test1 will have to be pasted in later.
You need to demonstrate to the examiners that you have more than a literal understanding of the text.
The students are reading "Lord of the Flies" as one of their set texts this year.
At this point in the speech, the minister departed from his prepared text.</p>
HERE;
?>
</body>
</html>