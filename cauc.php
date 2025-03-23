<?php
// Simulación de datos obtenidos desde una base de datos
$obligaciones_db = [
    'I - Obligaciones de Adimplência Financiera' => [
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
            'titulo' => 'FGTS',
            'fuente' => 'CAIXA',
            'validade' => '08/04/2025',
            'color' => 'text-green-500',
            'icon' => '&#10004;',
            'detalles_link' => '#',
        ]
    ],
    'II - Obligaciones de Convênios Federais' => [
        [
            'estado' => 'A comprobar',
            'titulo' => 'Prestação de Contas de Convênios Federais',
            'fuente' => 'SIAFI',
            'validade' => '30/06/2025',
            'color' => 'text-red-500',
            'icon' => '&#9888;',
            'detalles_link' => '#',
        ],
        [
            'estado' => 'Comprobado',
            'titulo' => 'Execução Orçamentária de Convênios',
            'fuente' => 'SICONV',
            'validade' => '15/09/2025',
            'color' => 'text-green-500',
            'icon' => '&#10004;',
            'detalles_link' => '#',
        ]
    ],
    'II - Obligaciones de Convênios Federais' => [
        [
            'estado' => 'A comprobar',
            'titulo' => 'Prestação de Contas de Convênios Federais',
            'fuente' => 'SIAFI',
            'validade' => '30/06/2025',
            'color' => 'text-red-500',
            'icon' => '&#9888;',
            'detalles_link' => '#',
        ],
        [
            'estado' => 'Comprobado',
            'titulo' => 'Execução Orçamentária de Convênios',
            'fuente' => 'SICONV',
            'validade' => '15/09/2025',
            'color' => 'text-green-500',
            'icon' => '&#10004;',
            'detalles_link' => '#',
        ]
    ],
    'II - Obligaciones de Convênios Federais' => [
        [
            'estado' => 'A comprobar',
            'titulo' => 'Prestação de Contas de Convênios Federais',
            'fuente' => 'SIAFI',
            'validade' => '30/06/2025',
            'color' => 'text-red-500',
            'icon' => '&#9888;',
            'detalles_link' => '#',
        ],
        [
            'estado' => 'Comprobado',
            'titulo' => 'Execução Orçamentária de Convênios',
            'fuente' => 'SICONV',
            'validade' => '15/09/2025',
            'color' => 'text-green-500',
            'icon' => '&#10004;',
            'detalles_link' => '#',
        ]
    ],
    'III - Obligaciones de Convênios Federais 3' => [
        [
            'estado' => 'A comprobar',
            'titulo' => 'Prestação de Contas de Convênios Federais 3',
            'fuente' => 'SIAFI3',
            'validade' => '30/06/2025',
            'color' => 'text-red-500',
            'icon' => '&#9888;',
            'detalles_link' => '#',
        ],
        [
            'estado' => 'Comprobado',
            'titulo' => 'Execução Orçamentária de Convênios3',
            'fuente' => 'SICONV3',
            'validade' => '15/09/2025',
            'color' => 'text-green-500',
            'icon' => '&#10004;',
            'detalles_link' => '#',
        ]
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.0/flowbite.min.js"></script>
</head>
<body class="bg-gray-100">

    <div class="max-w-4xl my-4 mx-auto bg-white rounded-lg shadow-md p-6">
        <div class="text-sm text-gray-500">Fuente: Tesouro Nacional</div>
        <div class="text-sm text-gray-500">Actualizado em: 20 Marzo 2025 20:33</div>
        <div class="text-sm text-gray-500">Regra: Actualizado de segunda a sexta</div>

        <!-- Acordeón dinámico -->
        <div id="accordion-container" class="mt-4">
            <?php $index = 1; ?>
            <?php foreach ($obligaciones_db as $categoria => $obligaciones): ?>
                <h2 id="accordion-heading-<?php echo $index; ?>">
                    <button type="button" 
                            class="flex items-center justify-between w-full p-4 font-bold border-b border-gray-300 focus:ring-4 focus:ring-gray-200 transition"
                            onclick="toggleAccordion('accordion-body-<?php echo $index; ?>', 'accordion-icon-<?php echo $index; ?>')">
                        <span class="text-lg md:text-xl text-gray-700"><?php echo $categoria; ?></span>
                        <svg id="accordion-icon-<?php echo $index; ?>" class="w-4 h-4 transition-transform transform rotate-0 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-body-<?php echo $index; ?>" class="hidden p-4 bg-gray-50 border border-gray-300 rounded-b-lg">
                    <?php foreach ($obligaciones as $key => $obligacion): ?>
                        <div class="flex items-center justify-between mt-4 border-t pt-4">
                            <div class="max-w-[70%] sm:max-w-full">
                                <div class="flex items-center <?php echo $obligacion['color']; ?> font-semibold">
                                    <span><?php echo $obligacion['icon']; ?></span>
                                    <span class="ml-2 text-base md:text-lg"><?php echo $obligacion['estado']; ?></span>
                                </div>
                                <h3 class="font-bold text-base md:text-lg text-gray-700"><?php echo "$index." . ($key + 1) . " - " . $obligacion['titulo']; ?></h3>
                                <p class="text-sm md:text-base text-gray-600">Fuente: <?php echo $obligacion['fuente']; ?></p>
                                <p class="text-sm md:text-base text-gray-600">Validade: <?php echo $obligacion['validade']; ?></p>
                            </div>
                            <div>
                                <a href="<?php echo $obligacion['detalles_link']; ?>">
                                    <span class="text-blue-500 hover:underline">Ver detalles</span>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php $index++; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        function toggleAccordion(bodyId, iconId) {
            let body = document.getElementById(bodyId);
            let icon = document.getElementById(iconId);

            if (body.classList.contains("hidden")) {
                body.classList.remove("hidden");
                icon.classList.add("rotate-180");
            } else {
                body.classList.add("hidden");
                icon.classList.remove("rotate-180");
            }
        }
    </script>

</body>
</html>