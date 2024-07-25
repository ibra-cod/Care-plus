<?php 
use App\App\App;
require_once './vendor/autoload.php';

$faker = Faker\Factory::create();
$db = new PDO("mysql:host=localhost;dbname=careAndLife", "root", "Trackmania12--!!", [
                PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_OBJ,
                PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);

$db->exec('TRUNCATE TABLE users');

// $password = password_hash('test', PASSWORD_BCRYPT);
// var_dump($password);
// exit();


for ($i=0; $i < 50; $i++) { 

    $number = $faker->randomNumber(9, true);
    (int)$zero =  0;
    $phoneNumber = $zero .= $number;
    $password = password_hash('test', PASSWORD_BCRYPT);

   $db->exec("
        INSERT INTO users SET firstname='{$faker->firstname()}', lastname='{$faker->lastname()}',email ='{$faker->freeEmail()}', number='{$phoneNumber}',password='$password' "
    
    );
}



