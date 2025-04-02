<?php
$datos = [
    [
        "municipio" => "ACARI",
        "año" => 2022,
        "creche_em_tempo_integral_publica" => 1220,
        "creche_em_tempo_integral_conveniada" => 770,
        "creche_tempo_integral" => 1990,
        "creche_em_tempo_parcial_publica" => 1005,
        "creche_em_tempo_parcial_conveniada" => 600,
        "creche_parcial" => 1605,
        "pre_escola_em_tempo_integral_publica" => 2283,
        "pre_escola_em_tempo_integral_conveniada" => 1877,
        "pre_escola_em_tempo_integral" => 4160,
        "pre_escola_em_tempo_parcial_publica" => 1600,
        "pre_escola_em_tempo_parcial_conveniada" => 900,
        "pre_escola_parcial" => 2500,
        "ensino_fundamental_em_tempo_parcial_anos_iniciais" => 5210,
        "ensino_fundamental_em_tempo_parcial_anos_finais" => 5100,
        "series_iniciais_urbanas" => 450,
        "series_iniciais_rurais" => 200,
        "series_finais_urbanas" => 420,
        "series_finais_rurais" => 175,
        "tempo_integral" => 4300,
        "educacao_especial" => 430,
        "atendimiento_educacao_especial_aee" => 80,
        "avaliacao_no_processo" => 100,
        "educ_indigena_quilombo" => 30
    ],
    [
        "municipio" => "ACARI",
        "año" => 2023,
        "creche_em_tempo_integral_publica" => 1300,
        "creche_em_tempo_integral_conveniada" => 800,
        "creche_tempo_integral" => 2100,
        "creche_em_tempo_parcial_publica" => 1100,
        "creche_em_tempo_parcial_conveniada" => 650,
        "creche_parcial" => 1750,
        "pre_escola_em_tempo_integral_publica" => 2400,
        "pre_escola_em_tempo_integral_conveniada" => 1900,
        "pre_escola_em_tempo_integral" => 4300,
        "pre_escola_em_tempo_parcial_publica" => 1650,
        "pre_escola_em_tempo_parcial_conveniada" => 950,
        "pre_escola_parcial" => 2600,
        "ensino_fundamental_em_tempo_parcial_anos_iniciais" => 5300,
        "ensino_fundamental_em_tempo_parcial_anos_finais" => 5200,
        "series_iniciais_urbanas" => 460,
        "series_iniciais_rurais" => 210,
        "series_finais_urbanas" => 430,
        "series_finais_rurais" => 180,
        "tempo_integral" => 4400,
        "educacao_especial" => 440,
        "atendimiento_educacao_especial_aee" => 85,
        "avaliacao_no_processo" => 110,
        "educ_indigena_quilombo" => 35
    ],
    [
        "municipio" => "ACARI",
        "año" => 2024,
        "creche_em_tempo_integral_publica" => 1400,
        "creche_em_tempo_integral_conveniada" => 850,
        "creche_tempo_integral" => 2250,
        "creche_em_tempo_parcial_publica" => 1200,
        "creche_em_tempo_parcial_conveniada" => 700,
        "creche_parcial" => 1900,
        "pre_escola_em_tempo_integral_publica" => 2500,
        "pre_escola_em_tempo_integral_conveniada" => 2000,
        "pre_escola_em_tempo_integral" => 4500,
        "pre_escola_em_tempo_parcial_publica" => 1700,
        "pre_escola_em_tempo_parcial_conveniada" => 1000,
        "pre_escola_parcial" => 2700,
        "ensino_fundamental_em_tempo_parcial_anos_iniciais" => 5400,
        "ensino_fundamental_em_tempo_parcial_anos_finais" => 5300,
        "series_iniciais_urbanas" => 470,
        "series_iniciais_rurais" => 220,
        "series_finais_urbanas" => 440,
        "series_finais_rurais" => 185,
        "tempo_integral" => 4500,
        "educacao_especial" => 450,
        "atendimiento_educacao_especial_aee" => 90,
        "avaliacao_no_processo" => 120,
        "educ_indigena_quilombo" => 40
    ]
];
$años = array_unique(array_column($datos, 'año'));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Educativos</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .contenedor {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .contenedor-tabla {
            overflow-x: auto;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            font-size: 12px;
            min-width: 100px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        div#graficos-contenedor {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
    </style>
</head>
<body>
<div class="contenedor">
    <h2 style="text-align: center; color: #4CAF50;">
        Municipio: <?= $datos[0]['municipio'] ?>
    </h2>

    <div class="contenedor-tabla">
        <table>
            <thead>
                <tr>
                    <th>Años</th>
                    <th>Creche em tempo integral pública</th>
                    <th>Creche em tempo integral conveniada</th>
                    <th>CRECHE TEMPO INTEGRAL</th>
                    <th>Creche em tempo parcial pública</th>
                    <th>Creche em tempo parcial pública</th>
                    <th>CRECHE PARCIAL</th>
                    <th>Pré-Escola em tempo integral pública</th>
                    <th>Pré-Escola em tempo integral conveniada</th>
                    <th>PRÉ-ESCOLA TEMPO INTEGRAL</th>
                    <th>Pré-Escola em tempo parcial pública</th>
                    <th>Pré-Escola em tempo parcial conveniada</th>
                    <th>PRÉ-ESCOLA PARCIAL</th>
                    <th>Ensino Fundamental em tempo parcial - anos INICIAIS</th>
                    <th>Ensino Fundamental em tempo parcial - anos FINAIS</th>
                    <th>SÉRIES INICIAIS URBANAS</th>
                    <th>SÉRIES INICIAIS RURAIS</th>
                    <th>SÉRIES FINAIS URBANAS</th>
                    <th>SÉRIES FINAIS RURAIS</th>
                    <th>TEMPO INTEGRAL</th>
                    <th>EDUCAÇÃO ESPECIAL</th>
                    <th>ATENDIMENTO EDUCAÇÃO ESPECIAL AEE</th>
                    <th>AVALIAÇÃO NO PROCESSO</th>
                    <th>EDUC. INDÍGENA / QUILOMBO</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $dato) : ?>
                    <tr>
                        <td><?= $dato['año'] ?></td>
                        <td><?= $dato['creche_em_tempo_integral_publica'] ?></td>
                        <td><?= $dato['creche_em_tempo_integral_conveniada'] ?></td>
                        <td><?= $dato['creche_tempo_integral'] ?></td>
                        <td><?= $dato['creche_em_tempo_parcial_publica'] ?></td>
                        <td><?= $dato['creche_em_tempo_parcial_conveniada'] ?></td>
                        <td><?= $dato['creche_parcial'] ?></td>
                        <td><?= $dato['pre_escola_em_tempo_integral_publica'] ?></td>
                        <td><?= $dato['pre_escola_em_tempo_integral_conveniada'] ?></td>
                        <td><?= $dato['pre_escola_em_tempo_integral'] ?></td>
                        <td><?= $dato['pre_escola_em_tempo_parcial_publica'] ?></td>
                        <td><?= $dato['pre_escola_em_tempo_parcial_conveniada'] ?></td>
                        <td><?= $dato['pre_escola_parcial'] ?></td>
                        <td><?= $dato['ensino_fundamental_em_tempo_parcial_anos_iniciais'] ?></td>
                        <td><?= $dato['ensino_fundamental_em_tempo_parcial_anos_finais'] ?></td>
                        <td><?= $dato['series_iniciais_urbanas'] ?></td>
                        <td><?= $dato['series_iniciais_rurais'] ?></td>
                        <td><?= $dato['series_finais_urbanas'] ?></td>
                        <td><?= $dato['series_finais_rurais'] ?></td>
                        <td><?= $dato['tempo_integral'] ?></td>
                        <td><?= $dato['educacao_especial'] ?></td>
                        <td><?= $dato['atendimiento_educacao_especial_aee'] ?></td>
                        <td><?= $dato['avaliacao_no_processo'] ?></td>
                        <td><?= $dato['educ_indigena_quilombo'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div id="graficos-contenedor"></div>
</div>

<script>
    const datos = <?php echo json_encode($datos); ?>;
    const ctx = document.getElementById("graficos-contenedor");

    const colores = [
        "#FF6384", "#36A2EB", "#FFCE56", "#4BC0C0", "#9966FF", "#FF9F40",
        "#FFCD56", "#C9CBCF", "#32CD32", "#8A2BE2", "#00CED1", "#DC143C",
        "#7FFF00", "#FFD700", "#6495ED", "#A52A2A", "#6B8E23", "#FF4500",
        "#2E8B57", "#B22222", "#D2691E", "#483D8B"
    ];

    function crearGraficoDoughnut(datosFiltrados, idCanvas) {
        if (!datosFiltrados) return;

        // Excluir "año" y "promedio_total"
        const labels = Object.keys(datosFiltrados).filter(key => key !== "año" && key !== "municipio");
        const valores = labels.map(key => datosFiltrados[key]);

        new Chart(document.getElementById(idCanvas).getContext("2d"), {
            type: "doughnut",
            data: {
                labels: labels,
                datasets: [{
                    data: valores,
                    backgroundColor: colores.slice(0, labels.length),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: "right" }
                }
            }
        });
    }

    // Generar los gráficos para cada año
    datos.forEach((dato) => {
        const año = dato.año;
        const canvasId = `grafico-${año}`;

        // Crear el título y el canvas para el gráfico
        const section = document.createElement("div");
        section.innerHTML = `<h3 style="text-align: center;">Datos del Año ${año}</h3>
                             <canvas id="${canvasId}" style="width: 585px; height: 585px; margin: auto;"></canvas>`;

        document.getElementById("graficos-contenedor").appendChild(section);

        // Crear el gráfico
        setTimeout(() => crearGraficoDoughnut(dato, canvasId), 100);

    });
</script>
</body>
</html>