<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
    $family = array(
        '경환',
        '두부',
        '쿠키'
    );
    echo $family[0].'<br>';
    echo $family[1].'<br>';
    echo $family[2].'<br>';
    var_dump(count($family));
    array_push($family, "정자", "경민");
    var_dump($family);
    ?>

    <br>
    
    <?php
    $dir = '/Applications/mampstack-8.0.13-0/apache2/htdocs/data';
    $files = scandir($dir);
    var_dump($files);
    ?>
</body>
</html>