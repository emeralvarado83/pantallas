<?php
// Arreglo de objetos representando cada obligación
$obligaciones = [
    [
        'estado' => 'A comprobar',
        'titulo' => 'Tributos, contrib. e deuda activa',
        'fuente' => 'PGFN/RFB',
        'validade' => '14/12/2024',
        'color' => 'text-red-500',
        'icon' => '&#9888;',
        'detalles_link' => '#',
    ],
    [
        'estado' => 'Comprobado',
        'titulo' => 'Regularidad no pagamento de precatórios judiciais',
        'fuente' => 'Transferegov.br',
        'validade' => '20/03/2025',
        'color' => 'text-green-500',
        'icon' => '&#10004;',
        'detalles_link' => '#',
    ],
    [
        'estado' => 'Comprobado',
        'titulo' => 'FGTS',
        'fuente' => 'CAIXA',
        'validade' => '08/04/2025',
        'color' => 'text-green-500',
        'icon' => '&#10004;',
        'detalles_link' => '#',
    ],
    [
        'estado' => 'Comprobado',
        'titulo' => 'Adimplência financiera',
        'fuente' => 'SAHEM',
        'validade' => '20/03/2025',
        'color' => 'text-green-500',
        'icon' => '&#10004;',
        'detalles_link' => '#',
    ],
    [
        'estado' => 'A comprobar',
        'titulo' => 'Poder Público Federal',
        'fuente' => 'CADIN',
        'validade' => '09/12/2024',
        'color' => 'text-red-500',
        'icon' => '&#9888;',
        'detalles_link' => '#',
    ]
];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAUC</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <div class="bg-blue-600 text-white p-4 flex justify-between items-center">
        <div class="flex items-center">
            <select class="bg-blue-600 text-white text-lg font-semibold outline-none">
                <option>Água Branca - PB</option>
                <option>João Pessoa - PB</option>
                <option>Campina Grande - PB</option>
                <option>Patos - PB</option>
            </select>
            <h3 class="text-white font-semibold ml-2">Obrigações Federais</h3>
        </div>
        <button class="text-white text-lg">☰</button>
    </div>

    <div class="max-w-md md:max-w-2xl lg:max-w-4xl my-4 mx-auto bg-white rounded-lg shadow-md p-6 md:p-8 lg:p-10">
        <div class="text-sm text-gray-500">Fuente: Tesouro Nacional</div>
        <div class="text-sm text-gray-500">Actualizado em: 20 Marzo 2025 20:33</div>
        <div class="text-sm text-gray-500">Regra: Actualizado de segunda a sexta</div>

        <div class="mt-4 flex justify-between items-center">
            <h2 class="text-lg md:text-xl font-bold">I - Obligaciones de Adimplência Financiera</h2>
            <span class="bg-red-500 text-white text-xs md:text-sm px-2 py-1 rounded ml-2">PDF</span>
        </div>

        <?php 
        $counter = 1; // Contador para los títulos
        foreach ($obligaciones as $obligacion): ?>
            <div class="flex items-center justify-between mt-6 border-t pt-4">
                <div class="max-w-[70%] sm:max-w-full">
                    <div class="flex items-center <?php echo $obligacion['color']; ?> font-semibold">
                        <span><?php echo $obligacion['icon']; ?></span>
                        <span class="ml-2 text-base md:text-lg"><?php echo $obligacion['estado']; ?></span>
                    </div>
                    <h3 class="font-bold text-base md:text-lg text-gray-700"><?php echo "1.$counter - " . $obligacion['titulo']; ?></h3>
                    <p class="text-sm md:text-base text-gray-600">Fuente: <?php echo $obligacion['fuente']; ?></p>
                    <p class="text-sm md:text-base text-gray-600">Validade: <?php echo $obligacion['validade']; ?></p>
                </div>
                <div>
                    <a href="<?php echo $obligacion['detalles_link']; ?>">
                        <span class="text-blue-500 hover:underline">Ver detalles</span>
                    </a>
                </div>
            </div>
        <?php 
        $counter++; // Incrementar el contador
        endforeach; ?>

    </div>

    <!-- Botón Flotante -->
    <div class="fixed bottom-4 right-4 bg-blue-600 p-4 rounded-full shadow-lg text-white text-2xl">
        <a href="descarga.php">⬇</a>
    </div>

</body>
</html>
