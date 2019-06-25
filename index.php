<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php

    echo "<h1>Hi Everyone!!</h1>";

    //? Exercise 1:
    // Create your first fruit array containing: "Apple, Strawberry, Pineapple, Lemon".
    $fruits = [
        "apple",
        "strawberry",
        "pineapple",
        "lemon"
    ];
    // Display the value of the 2nd position.
    echo $fruits[1];

    //? Exercice 2:
    // Create an associative array that contains the number in stock for each item: 
    // 20 T-Shirts, 10 Caps and 5 Shoes.
    $stock = array(
        "t-shirts" => 20,
        "caps" => 10,
        "shoes" => 5
    );
    // Display the stock of caps.
    echo "<p>" . $stock["caps"] . "</p>" . "<br>";

    //? Exercice 3:
    // The clothing store has just received a new stock of shoes and caps.

    // Add 5 caps.
    $stock["caps"] += 5;

    echo $stock["caps"] . "<br>";

    // Add 20 shoes.
    $stock["shoes"] += 20;

    // Display the shoe stock
    echo $stock["shoes"] . "<br>";

    //? Exercice 4:
    // You have a list of contacts.
    // Each contact has a name, an email and a phone number.
    // Here is the list of these contacts:
    // > Name: Ricardo, Tel: 0677777777, Email: ricardo@gmail.com
    // > Name: Michael, Tel: 0606060606, Email: mj@gmail.com
    // > Name: Emmanuel, Tel: 0610101010, Email: manu@gmail.com
    $contact = [
        "Ricardo" => ["Tel" => 677777777, "Email" => "ricardo@gmail.com"],
        "Micheal" => ["Tel" => 606060606, "Email" => "mj@gmail.com"],
        "Emmanuel" => ["Tel" => 610101010, "Email" => "manu@gmail.com"]
    ];

    echo $contact["Ricardo"]["Tel"];

    var_dump($contact);

    // The goal of the exercise is to create an array that will contain all the information for ALL my contacts. 
    // I need to be able to access a contact's information easily and quickly.


    //? Exercice 5:
    // You need to create a web page with basics HTML tags.
    // In this page, you'll display all the characteristics of an imaginary character, from a role-play game.

    // The character information will be saved in variables.
    // There is four (4) informations: 
    // An avatar image
    // The last name
    // The first name
    // An array of characteristics (like attak point, defense point... put everything you want)
    // Use an associative array.

    $image = "https://nerdarchy.com/wp-content/uploads/2016/02/cleric.jpg";
    $firstName = "Thirion";
    $lastName = "Fordring";
    $stats = ["PHIdmg" => 8, "MAGdmg" => 5, "PHIdef" => 5, "MAGdef" => 6, "LCK" => 7];

    echo '<img src=' . $image . '>' . "<br>";
    echo $firstName . " ";
    echo $lastName . "<br>";
    var_dump($stats);

    ?>


    <p> Name:
        <?php echo $firstName . ' ' . $lastName ?> </p>
    <img src="<?php echo $image ?>">
    <ul>
        <li><?php echo $stats["PHIdmg"]; ?></li>
        <li><?php echo $stats["MAGdmg"]; ?></li>
        <li><?php echo $stats["PHIdef"]; ?></li>
        <li><?php echo $stats["MAGdef"]; ?></li>
        <li><?php echo $stats["LCK"]; ?></li>

    </ul>


</body>

</html>