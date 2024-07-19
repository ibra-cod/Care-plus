<?php 
use App\App\App;
$app = new App ();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header class=" bg-indigo-700 text-white font-bold ">
    <?php $app->requireIt('includes/nav') ?>

    <div>
        <form action="">
            
        </form>
    </div>
</header>