<?php
$Hardware = ['Motherboard', 'Processor', 'Hard Disk', 'PC Coller', 'VGA Card', 'SSD'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4b</title>
</head>

<body>
    <h4>Macam-macam perangkat keras komputer</h4>
    <ol>
        <?php for ($i = 0; $i < count($Hardware); $i++) { ?>
            <li><?= $Hardware[$i]; ?></li>
        <?php } ?>
    </ol>

    <br>

    <h4>Macam-macam perangkat keras komputer baru</h4>
    <ol>
        <?php
        array_push($Hardware, 'Card Reader', 'Modem');
        sort($Hardware);
        for ($i = 0; $i < count($Hardware); $i++) { ?>
            <li><?= $Hardware[$i];
                ?></li>
        <?php } ?>
    </ol>
</body>

</html>