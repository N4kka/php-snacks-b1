<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>

<body>

    <?php
    $matches = [
        [
            'home_team' => 'Virtus Bologna',
            'visiting_team' => 'Olimpia Milano',
            'home_team_points' => '2666',
            'visiting_team_points' => '2465'
        ],
        [

            'home_team' => 'Fortitudo Pompea Bologna',
            'visiting_team' => 'Dolomiti Energia Trentino',
            'home_team_points' => 82,
            'visiting_team_points' => 83
        ],
        [
            'home_team' => 'Pallacanestro Trieste',
            'visiting_team' => 'Virtus Roma',
            'home_team_points' => 72,
            'visiting_team_points' => 33
        ],
        [
            'home_team' => 'Openjobmetis Varese',
            'visiting_team' => 'Germani Basket Brescia',
            'home_team_points' => 101,
            'visiting_team_points' => 99
        ],
    ];
    ?>
    <h2>Basket matches calendar</h2>
    <ul>
        <?php
        for ($i = 0; $i < count($matches); $i++) {
        ?>
            <?php $current_match = $matches[$i]; ?>
            <li>
                <?php echo $current_match["home_team"]; ?> -
                <?php echo $current_match["visiting_team"]; ?> |
                <?php echo $current_match["home_team_points"]; ?> -
                <?php echo $current_match["visiting_team_points"]; ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>