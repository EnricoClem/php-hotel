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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotels</title>
</head>
<body>
    <header class="bg-primary p-2">
        <div class="container-md text-white">
            <h1>FindMyHotel</h1>
        </div>
    </header>
    <main class="container-sm p-3">
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to center</th>
                </tr>
            </thead>
            <tbody>
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
                        <tr class="<?php
                            if($i % 2 !== 0){
                                ?>
                                table-secondary
                                <?php
                            }
                        ?>"> 
                            <td><?php echo $name ?></td>
                            <td><?php echo $description ?></td>
                            <td><?php echo $parking === true ? '&#x2714' : '&#x2718'; ?></td>
                            <td><?php echo $vote ?></td>
                            <td><?php echo $distance_to_center ?>km</td>
                        </tr>
                        <?php
                
                    }
                ?>                
            </tbody>

        </table>
    </main>
</body>
</html>