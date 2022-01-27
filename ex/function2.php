<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Funtion</h1>
    <h2>Basic</h2>
    <?php
        function basic() {
            print("Alphaba<br>");
            print("Glinda<br>");
        }
        basic();
        basic();
        basic();
        basic();
        basic();
        basic();
        basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
        function sum($A, $B) {
            print($A + $B."<br>");
        }
        sum(4, 6);
        sum(5, 6);
    ?>
    <h2>return</h2>
    <?php
        function sum2($A, $B) {
            return $A+$B;
        }
        print(sum2(2,4));
        file_put_contents('result.txt', sum2(2,4));
    ?>
</body>
</html>