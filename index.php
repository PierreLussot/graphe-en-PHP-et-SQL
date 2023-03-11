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
    <script>
        const labels = [
            'Janvier',
            'Fevrier',
            'Mars',
            'Avril',
            'Mais',
            'Juin',
            'Juillet',
            'Aout',
            'Septembre',
            'Octobre',
            'Novembre',
            'Decembre'
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'My first dateset',
                backgroundColor: 'rgb(255,99,132)',
                borderColor: 'rgb(255,99,132)',
                data: [0, 10, 5, 2, 20, 30, 45, 5, 14, 33, 20, 20],
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