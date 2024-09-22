<?php 

    $car = $_POST['car'];
    $cat = $_POST['cat'];
    $total = $car * $cat;

    echo $car;
    echo $cat;
     

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Total = <?php echo $total ?>
    
</body>
</html>