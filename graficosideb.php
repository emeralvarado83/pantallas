<?php
$years = [2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025];

$data = [
    ["name" => "Municipios", "values" => array_fill(0, 10, ["planeado" => "Planeado", "observado" => "Observado"])],
    ["name" => "Alagoinhas", "values" => []],
    ["name" => "Escola Municipal Severino Flaviano", "values" => [
        ["planeado" => 4.00, "observado" => 2.90],
        ["planeado" => 2.50, "observado" => 1.00],
        ["planeado" => 3.70, "observado" => 2.00],
        ["planeado" => 3.00, "observado" => 2.00],
        ["planeado" => 2.20, "observado" => 3.00],
        ["planeado" => 3.50, "observado" => 3.00],
        ["planeado" => 3.00, "observado" => 3.00],
        ["planeado" => 3.50, "observado" => 2.00],
        ["planeado" => 3.00, "observado" => 3.50],
        ["planeado" => 4.00, "observado" => 3.30]
    ]],
    ["name" => "Gr Mul Antonio Jaco", "values" => [
        ["planeado" => 1.20, "observado" => 2.10],
        ["planeado" => 3.00, "observado" => 4.30],
        ["planeado" => 2.00, "observado" => 3.50],
        ["planeado" => 3.00, "observado" => 3.80],
        ["planeado" => 4.00, "observado" => 3.00],
        ["planeado" => 3.00, "observado" => 3.30],
        ["planeado" => 3.70, "observado" => 3.40],
        ["planeado" => 3.50, "observado" => 4.80],
        ["planeado" => 4.20, "observado" => 3.50],
        ["planeado" => 3.50, "observado" => 4.00]
    ]],
    ["name" => "Total", "values" => [
        ["planeado" => 5.20, "observado" => 5.00],
        ["planeado" => 5.50, "observado" => 5.30],
        ["planeado" => 5.70, "observado" => 5.50],
        ["planeado" => 6.00, "observado" => 5.80],
        ["planeado" => 6.20, "observado" => 6.00],
        ["planeado" => 6.50, "observado" => 6.30],
        ["planeado" => 6.70, "observado" => 6.40],
        ["planeado" => 7.00, "observado" => 6.80],
        ["planeado" => 7.20, "observado" => 7.00],
        ["planeado" => 7.50, "observado" => 7.30]
    ]]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficos IDEB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
            max-width: 900px;
            flex-direction: column;
        }
        .chart-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            width: 100%;
            margin-bottom: 20px;
        }
        canvas {
            max-width: 100%;
            height: 300px !important;
        }

        /* Estilos para la tabla */
        .tabla {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            overflow-x: auto; /* Permite el desplazamiento horizontal */
            display: block;  /* Hace que la tabla sea bloque para activar el scroll */
            margin-bottom: 20px;
        }

        /* Estilos para la cabecera */
        th {
            background-color: #f4f4f4;
            font-weight: bold;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
            min-width: 200px;  /* Ancho de las columnas */
        }

        /* Estilos para las celdas */
        td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: center;
            min-width: 200px;  /* Ancho de las columnas */
        }

        td div {
            display: flex;
            justify-content: center;
        }

        /* Estilo para celdas internas */
        .celda-interna {
            font-size: 12px;
            padding: 5px;
            border: 1px solid #ddd;
            text-align: center;
        }

        /* Cambio de color en las filas al pasar el ratón */
        tr:hover {
            background-color: #f9f9f9;
        }

        /* Estilos para la fila de Total */
        tr:last-child td {
            font-weight: bold;
            background-color: #e6e6e6;
        }

        /* Alineación de celdas con texto de fechas */
        td span {
            display: inline-block;
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="container">

<table class="tabla">
    <thead>
        <tr>
            <th>Año</th>
            <?php foreach ($years as $year) echo "<th>$year</th>"; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?php echo $row["name"]; ?></td>
                <?php foreach ($row["values"] as $value): ?>
                    <?php if (!empty($value)): ?>
                        <td>
                            <div>
                                <span class='celda-interna'><?php echo $value["planeado"]; ?></span>
                                <span class='celda-interna'><?php echo $value["observado"]; ?></span>
                            </div>
                        </td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

    <div class="chart-container">
        <h3>Comparación IDEB (2016-Actualidad)</h3>
        <canvas id="grafico"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = <?php echo json_encode($years); ?>;
    const totalData = <?php echo json_encode($data[4]['values']); ?>;
    
    const planeadoData = totalData.map(item => item.planeado);
    const observadoData = totalData.map(item => item.observado);

    let ctx = document.getElementById('grafico').getContext('2d');
    let grafico = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Planeado',
                data: planeadoData,
                backgroundColor: 'blue',
                borderColor: 'blue',
                borderWidth: 1
            }, {
                label: 'Observado',
                data: observadoData,
                backgroundColor: 'red',
                borderColor: 'red',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 0.2
                    }
                }
            }
        }
    });
</script>
    
</body>
</html>