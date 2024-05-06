<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>
<body>
    <main>
        <h1>HOTELS:</h1>
        <ul>
            <?php
                for($i = 0; $i < count($hotels); $i++){

                    $hotel = $hotels[$i];
            
                    $name = $hotel['name'];
                    $description = $hotel['description'];
                    $parking = $hotel['parking'];
                    $vote = $hotel['vote'];
                    $distance_to_center = $hotel['distance_to_center'];
            
                    // var_dump($hotel);

                    ?>
                    <li>
                        <ul>
                            <li><h3>Name: </h3><?php echo $name ?></li>
                            <li><h3>Description: </h3><?php echo $description ?></li>
                            <li><h3>Parking: </h3><?php echo $parking ?></li>
                            <li><h3>Vote: </h3><?php echo $vote ?></li>
                            <li><h3>Distance to center: </h3><?php echo $distance_to_center ?>km</li>
                        </ul>
                    </li>
                    <?php
            
                }
            ?>
        </ul>
    </main>
</body>
</html>