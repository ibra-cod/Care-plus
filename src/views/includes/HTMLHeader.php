<?php 
use App\App\App;
$app = new App ();;

?>
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="flex flex-col min-h-full" > 
    <?php if ( $_SERVER['REQUEST_URI'] === '/' ) : ?>
        <?php $app->requireIt('includes/header'); ?>
    <?php else : ?>
        <?php $app->requireIt('includes/nav') ?>
    <?php endif ?>



    

