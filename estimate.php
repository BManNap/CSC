<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimate</title>
    <?php require('chunks/cssLinks.html');?>
    <?php require('chunks/jsLinks.html');?>
</head>
<body>
    <?php require('chunks/menu.html');
    echo '
        <h1>Make an Estimate</h1>
        <hr>
        <form class="estimateForm" method="post" action="/total.php">
            <input type="checkbox" id="oilChange" name="oilChange" value="oilChange"/>
            <label for="oilChange">Oil Change</label>
            <input type="checkbox" id="rotate" name="alignment" value="alignment"/>
            <label for="alignment">Alignment</label>
            <input type="checkbox" id="bulb" name="bulb" value="bulb"/>
            <label for="bulb">Bulb Replacement</label>
            <input type="checkbox" id="tireLeak" name="tireLeak" value="tireLeak"/>
            <label for="tireLeak">Tire Leak Repair</label>
            <input type="checkbox" id="tireNew" name="tireNew" value="tireNew"/>
            <label for="tireNew">New Tires</label>

            <input type="submit" value="Submit"/>
        </form>
        '
    ?>
</body>
</html>