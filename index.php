<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php require('chunks/cssLinks.html');?>
    <?php require('chunks/jsLinks.html');?>
</head>
<body>
    <div class="mainText p-2 container">
        <?php require('chunks/menu.html');?>
        <h1 class="row justify-content-center">Cloquet Service Center</h1>
        <div class="row justify-content-center align-center">
            <img class="shopImg align-center col col-md-8 col-sm-12" src="assests/whole1.png" />
            <p class="border border-4 border-primary col col-md-4 col-sm-12 fs-2 bg-dark text-white"><?php require('chunks/sidebar.txt');?></p>
        </div>
        <p class="row justify-content-center align-center"><?php require('chunks/home.txt');?></p>
    </div>
</body>
</html>

<!-- Forms
 https://getbootstrap.com/docs/5.3/forms/overview/
-->