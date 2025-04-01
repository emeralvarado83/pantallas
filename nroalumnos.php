<?php
$datos = [
    [
        "municipio" => "ACARI",
        "año" => 2022,
        "guarderia_publica_tc" => 1220,
        "guarderia_afiliada_tc" => 770,
        "cuidado_tc" => 1990,
        "guarderia_publica_tp" => 1005,
        "guarderia_afiliada_tp" => 600,
        "cuidado_tp" => 1605,
        "preescolar_publico_tc" => 2283,
        "preescolar_afiliado_tc" => 1877,
        "preescolar_tc" => 4160,
        "preescolar_publico_tp" => 1600,
        "preescolar_afiliado_tp" => 900,
        "preescolar_tp" => 2500,
        "primaria_tp_inicial" => 5210,
        "primaria_tp_final" => 5100,
        "serie_urbana_inicial" => 450,
        "serie_rural_inicial" => 200,
        "serie_urbana_final" => 420,
        "serie_rural_final" => 175,
        "tiempo_integral" => 4300,
        "educacion_especial" => 430,
        "servicio_educacion_especial_aee" => 80,
        "evaluacion_proceso" => 100,
        "educacion_indigena_quilombo" => 30,
        "promedio_total" => 26750
    ],
    [
        "municipio" => "BARAUNA",
        "año" => 2022,
        "guarderia_publica_tc" => 1300,
        "guarderia_afiliada_tc" => 800,
        "cuidado_tc" => 2100,
        "guarderia_publica_tp" => 1100,
        "guarderia_afiliada_tp" => 650,
        "cuidado_tp" => 1750,
        "preescolar_publico_tc" => 2400,
        "preescolar_afiliado_tc" => 1900,
        "preescolar_tc" => 4300,
        "preescolar_publico_tp" => 1650,
        "preescolar_afiliado_tp" => 950,
        "preescolar_tp" => 2600,
        "primaria_tp_inicial" => 5300,
        "primaria_tp_final" => 5200,
        "serie_urbana_inicial" => 460,
        "serie_rural_inicial" => 210,
        "serie_urbana_final" => 430,
        "serie_rural_final" => 180,
        "tiempo_integral" => 4400,
        "educacion_especial" => 440,
        "servicio_educacion_especial_aee" => 85,
        "evaluacion_proceso" => 110,
        "educacion_indigena_quilombo" => 35,
        "promedio_total" => 27600
    ],
    [
       "municipio" => "BARRA DE SANTIAGO",
        "año" => 2023,
        "guarderia_publica_tc" => 1400,
        "guarderia_afiliada_tc" => 850,
        "cuidado_tc" => 2250,
        "guarderia_publica_tp" => 1200,
        "guarderia_afiliada_tp" => 700,
        "cuidado_tp" => 1900,
        "preescolar_publico_tc" => 2500,
        "preescolar_afiliado_tc" => 2000,
        "preescolar_tc" => 4500,
        "preescolar_publico_tp" => 1700,
        "preescolar_afiliado_tp" => 1000,
        "preescolar_tp" => 2700,
        "primaria_tp_inicial" => 5400,
        "primaria_tp_final" => 5300,
        "serie_urbana_inicial" => 470,
        "serie_rural_inicial" => 220,
        "serie_urbana_final" => 440,
        "serie_rural_final" => 185,
        "tiempo_integral" => 4500,
        "educacion_especial" => 450,
        "servicio_educacion_especial_aee" => 90,
        "evaluacion_proceso" => 120,
        "educacion_indigena_quilombo" => 40,
        "promedio_total" => 28565
    ],
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

        canvas {
            max-width: 100%;
        }
    </style>
</head>
<body>
<div class="contenedor">
    <div class="contenedor-tabla">
        <table>
            <thead>
                <tr>
                    <th>Municipios</th>
                    <th>Años</th>
                    <th>Guarderia Pública TC</th>
                    <th>Guarderia Afiliada TC</th>
                    <th>Cuidado TC</th>
                    <th>Guarderia Pública TP</th>
                    <th>Guarderia Afiliada TP</th>
                    <th>Cuidado TP</th>
                    <th>Preescolar Público TC</th>
                    <th>Preescolar Afiliado TC</th>
                    <th>Preescolar TC</th>
                    <th>Preescolar Público TP</th>
                    <th>Preescolar Afiliado TP</th>
                    <th>Preescolar TP</th>
                    <th>Primaria TP Inicial</th>
                    <th>Primaria TP Final</th>
                    <th>Serie Urbana Inicial</th>
                    <th>Serie Rural Inicial</th>
                    <th>Serie Urbana Final</th>
                    <th>Serie Rural Final</th>
                    <th>Tiempo Integral</th>
                    <th>Educación Especial</th>
                    <th>Servicio Educación Especial AEE</th>
                    <th>Evaluación Proceso</th>
                    <th>Educación Indígena / Quilombo</th>
                    <th>Promedio Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $dato) : ?>
                    <tr>
                        <td><?= $dato['municipio'] ?></td>
                        <td><?= $dato['año'] ?></td>
                        <td><?= $dato['guarderia_publica_tc'] ?></td>
                        <td><?= $dato['guarderia_afiliada_tc'] ?></td>
                        <td><?= $dato['cuidado_tc'] ?></td>
                        <td><?= $dato['guarderia_publica_tp'] ?></td>
                        <td><?= $dato['guarderia_afiliada_tp'] ?></td>
                        <td><?= $dato['cuidado_tp'] ?></td>
                        <td><?= $dato['preescolar_publico_tc'] ?></td>
                        <td><?= $dato['preescolar_afiliado_tc'] ?></td>
                        <td><?= $dato['preescolar_tc'] ?></td>
                        <td><?= $dato['preescolar_publico_tp'] ?></td>
                        <td><?= $dato['preescolar_afiliado_tp'] ?></td>
                        <td><?= $dato['preescolar_tp'] ?></td>
                        <td><?= $dato['primaria_tp_inicial'] ?></td>
                        <td><?= $dato['primaria_tp_final'] ?></td>
                        <td><?= $dato['serie_urbana_inicial'] ?></td>
                        <td><?= $dato['serie_rural_inicial'] ?></td>
                        <td><?= $dato['serie_urbana_final'] ?></td>
                        <td><?= $dato['serie_rural_final'] ?></td>
                        <td><?= $dato['tiempo_integral'] ?></td>
                        <td><?= $dato['educacion_especial'] ?></td>
                        <td><?= $dato['servicio_educacion_especial_aee'] ?></td>
                        <td><?= $dato['evaluacion_proceso'] ?></td>
                        <td><?= $dato['educacion_indigena_quilombo'] ?></td>
                        <td><?= $dato['promedio_total'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <label for="yearSelect">Selecciona un año:</label>
    <select id="yearSelect">
        <?php foreach ($años as $año) : ?>
            <option value="<?= $año ?>"><?= $año ?></option>
        <?php endforeach; ?>
    </select>
    <canvas id="grafico"></canvas>
</div>

<script>
    const datos = <?php echo json_encode($datos); ?>;
    const ctx = document.getElementById("grafico").getContext("2d");
    const yearSelect = document.getElementById("yearSelect");

    // Asegurar que el select tenga 2022 por defecto
    const añoPorDefecto = 2022;
    yearSelect.value = añoPorDefecto;

    function filtrarDatosPorAño(año) {
        return datos.filter(d => d.año == año);
    }

    function crearDataset(datosFiltrados) {
        return {
            labels: datosFiltrados.map(d => d.municipio),
            datasets: [{
                label: "Promedio Total",
                data: datosFiltrados.map(d => d.promedio_total),
                backgroundColor: "rgba(255, 99, 132, 0.5)",
                borderColor: "rgba(255, 99, 132, 1)",
                borderWidth: 1
            }]
        };
    }

    // Filtrar los datos por el año predeterminado antes de inicializar el gráfico
    let datosFiltrados = filtrarDatosPorAño(añoPorDefecto);

    const chart = new Chart(ctx, {
        type: "bar",
        data: crearDataset(datosFiltrados),
        options: { responsive: true, scales: { y: { beginAtZero: true } } }
    });
    
    // Evento para actualizar el gráfico al cambiar el año
    yearSelect.addEventListener("change", function () {
        datosFiltrados = filtrarDatosPorAño(this.value);
        chart.data = crearDataset(datosFiltrados);
        chart.update();
    });
</script>
</body>
</html>