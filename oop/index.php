<?php
require_once "Car.php";
require_once "Person.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tugas OOP PHP</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            padding: 40px;
        }
        .container {
            width: 900px;
            margin: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-bottom: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th {
            background: #eeeeee;
            padding: 15px;
            font-size: 18px;
            text-align: left;
        }
        td {
            border-top: 1px solid #ddd;
            padding: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tugas OOP PHP</h1>
        <?php

        // Objek Car
        $avanza = new Car("Avanza", "Toyota");
        $almaz = new Car("Almaz", "Wuling");
        $mobilio = new Car("Mobilio", "Honda");

        $cars = [$avanza, $almaz, $mobilio];

        ?>
        <table>
            <tr>
                <th colspan="2">Class: Car 🚗</th>
            </tr>
            <?php foreach ($cars as $car) { ?>
                <tr>
                    <td>
                        <b>Car Name:</b> <?php echo $car->name; ?><br>
                        <b>Brand:</b> <?php echo $car->brand; ?><br>

                        <?php echo $car->startEngine(); ?><br>
                        <?php echo $car->stopEngine(); ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <?php

        // Objek Person
        $eko = new Person("Eko", "Eko");
        $joko = new Person("Joko", "Nugroho");
        $budi = new Person("Budi", "Nugraha");

        $persons = [$eko, $joko, $budi];
        ?>
        <table>
            <tr>
                <th colspan="2">Class: Person 👤</th>
            </tr>
            <?php foreach ($persons as $person) { ?>
                <tr>
                    <td>
                        <b>Name:</b> <?php echo $person->firstName . " " . $person->lastName; ?><br>

                        <?php echo $person->sayHello("Friend"); ?><br>
                        <?php echo $person->sayGoodBye("Friend"); ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>