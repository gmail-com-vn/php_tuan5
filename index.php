<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $name1 = $date1 = $name2 = $date2 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name1 = $_POST["name1"];
        $name2 = $_POST["name2"];
        $date1 = new DateTime($_POST["date1"]);
        $date2 = new DateTime($_POST["date2"]);
        $diff = date_diff($date1, $date2);
    }
    ?>

    <div class="body-form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p>Họ tên:</p>
            <div>
                <input type="text" name="name1">
                <input type="date" name="date1" id="">
            </div>
            <div>
                <input type="text" name="name2">
                <input type="date" name="date2" id="">
            </div>
            <button type="submit"> Ok</button>
        </form>
    </div>
    <div>
        <p>Số tuổi của <?php echo $name1; ?> là:</p>
        <p><?php echo $date1; ?></p>
        <p>Số tuổi của <?php echo $name2; ?> là:</p>
        <p><?php echo $date2; ?></p>
        <p>Chênh lệch tuổi 2 người là:</p>
        <p><?php echo $diff;?></p>
    </div>
    
</body>

</html>