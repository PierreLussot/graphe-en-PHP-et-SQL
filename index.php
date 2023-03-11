<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphe Chart js</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div>
        <canvas id="myChart"></canvas>
    </div>
    <?php

    $connexion = mysqli_connect('localhost', 'root', 'root', 'graphique');

    $req = mysqli_query($connexion, "SELECT moi , numero FROM moi");

    foreach ($req as $data) {
        $mois =  $data['moi'];
        $numeros = $data['mumero'];
    }


    ?>
    <script>
        const labels = <?= json_encode($mois) ?>;

        const data = {
            labels: labels,
            datasets: [{
                label: 'My first dateset',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                data: <?= json_encode($numeros) ?>,
            }]
        };

        const config = {
            type: 'line',
            data: data,
            option: {}
        };
    </script>

    <script>
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
</body>

</html>