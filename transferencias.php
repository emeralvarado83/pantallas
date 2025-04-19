<?php
// Datos simulados desde PHP
$meses = [
    'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho',
    'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'
];

$valoresTransfSauAA = [120, 110, 130, 125, 115, 160, 135, 140, 155, 180, 165, 190];
$valoresSaudeBruto  = [150, 170, 165, 140, 210, 180, 190, 130, 120, 140, 150, 200];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Gráfico de Transferências</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }
    .container {
      max-width: 800px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    canvas {
      max-width: 100%;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <canvas id="graficoTransferencias" width="800" height="400"></canvas>
    </div>

  <script>
    // Variables desde PHP
    const labels = <?php echo json_encode($meses); ?>;
    const transfSauAA = <?php echo json_encode($valoresTransfSauAA); ?>;
    const saudeBruto = <?php echo json_encode($valoresSaudeBruto); ?>;

    const data = {
      labels: labels,
      datasets: [
        {
          label: 'TransfSauAA',
          backgroundColor: '#EC6E3D',
          data: transfSauAA
        },
        {
          label: 'Saúde Bruto',
          backgroundColor: '#EDD46D',
          data: saudeBruto
        }
      ]
    };

    const config = {
      type: 'bar',
      data: data,
      options: {
        plugins: {
          title: {
            display: true,
            text: 'COMPORTAMENTO MENSAL DAS TRANSFERÊNCIAS - COMPARANDO O MÊS DO ANO ANTERIOR',
            color: '#EC6E3D',
            font: {
              size: 16,
              weight: 'bold'
            }
          }
        },
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    new Chart(document.getElementById('graficoTransferencias'), config);
  </script>
</body>
</html>
