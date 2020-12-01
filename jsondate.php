<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // using array
        $date =array ("date" => date('d-m-Y'));
        echo json_encode($date);
        echo "hello";
        echo "hello world";
        echo "<br>";
        echo "<br>";
    // using object
        echo json_encode($date,JSON_FORCE_OBJECT);

    ?>
</body>
</html>