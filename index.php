<?php

$page_title = 'PHP Hotel';

$has_parking = isset($_GET['has_parking']) ? true : false;

var_dump($has_parking);

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
    <title><?php echo $page_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container-xl  mx-auto mt-4 border rounded">

<table class="table">
  <thead>
    <tr>
     
      <th scope="col">NAME</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">PARKING</th>
      <th scope="col">VOTE</th>
      <th scope="col">DISTANZA DAL CENTRO</th>
    </tr>
  </thead>
  <tbody>
  <?php
      foreach ($hotels as $hotel) {

        if ($hotel['parking'] === $has_parking || !$has_parking) {
      ?>
          <tr>
            <td><?php echo $hotel['name']; ?></td>
            <td><?= $hotel['description']; ?></td>
            <td><?= $hotel['parking'] ? 'SI' : 'NO'; ?></td>
            <td><?php echo $hotel['vote'] ?></td>
            <td><?php echo $hotel['distance_to_center'] ?> km</td>
          </tr>
      <?php
        }
      }
      ?>

  </tbody>
</table>

</div>

<div class="container-xl  mx-auto mt-4 border rounded">

<form action="" method="GET">
      <input id="has_parking" <?php echo $has_parking ? 'checked' : ''; ?> type="checkbox" name="has_parking">
      <label for="has_parking">Visualizza solo Hotel con il parcheggio ?</label>
      <input type="submit" value="filtra">
    </form>


</div>


    
</body>
</html>