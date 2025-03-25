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
            'descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'descripcionTecnica' => 'Tributos, contrib. e deuda activa Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy',
        ],
        [
            'estado' => 'Comprobado',
            'titulo' => 'FGTS',
            'fuente' => 'CAIXA',
            'validade' => '08/04/2025',
            'color' => 'text-green-500',
            'icon' => '&#10004;',
            'descripcion' => 'FGTS It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'descripcionTecnica' => 'FGTS It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
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
            'descripcion' => 'Prestação de Contas de Convênios Federais2 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'descripcionTecnica' => 'Prestação de Contas de Convênios Federais2 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy',
        ],
        [
            'estado' => 'Comprobado',
            'titulo' => 'Execução Orçamentária de Convênios2',
            'fuente' => 'SICONV',
            'validade' => '15/09/2025',
            'color' => 'text-green-500',
            'icon' => '&#10004;',
            'descripcion' => 'Execução Orçamentária de Convênios2 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'descripcionTecnica' => 'Execução Orçamentária de Convênios2 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
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
            'descripcion' => 'Prestação de Contas de Convênios Federais 3 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'descripcionTecnica' => 'Prestação de Contas de Convênios Federais 3 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy',
        ],
        [
            'estado' => 'Comprobado',
            'titulo' => 'Execução Orçamentária de Convênios3',
            'fuente' => 'SICONV3',
            'validade' => '15/09/2025',
            'color' => 'text-green-500',
            'icon' => '&#10004;',
            'descripcion' => 'Execução Orçamentária de Convênios3 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'descripcionTecnica' => 'Execução Orçamentária de Convênios3 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
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
                            <!-- Modal toggle -->
                            <button data-modal-target="modal-<?php echo $index . '-' . $key; ?>" 
                                    data-modal-toggle="modal-<?php echo $index . '-' . $key; ?>"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" 
                                    type="button">
                                Ver detalles
                            </button>

                            <!-- Modal único por cada elemento -->
                            <div id="modal-<?php echo $index . '-' . $key; ?>" 
                                 tabindex="-1" aria-hidden="true" 
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow-sm overflow-y-auto max-h-[450px]">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                                            <h3 class="font-bold text-base md:text-lg text-gray-700">
                                                <?php echo "$index." . ($key + 1) . " - " . $obligacion['titulo']; ?>
                                            </h3>
                                            <button type="button" 
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" 
                                                    data-modal-hide="modal-<?php echo $index . '-' . $key; ?>">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Cerrar modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <div class="flex justify-center items-center <?php echo $obligacion['color']; ?> font-semibold">
                                                <span><?php echo $obligacion['icon']; ?></span>
                                                <span class="ml-2 text-base md:text-lg"><?php echo $obligacion['estado']; ?></span>
                                            </div>
                                            <div>
                                                <p class="text-sm md:text-base text-gray-600">Fuente: <?php echo $obligacion['fuente']; ?></p>
                                                <p class="text-sm md:text-base text-gray-600">Validade: <?php echo $obligacion['validade']; ?></p>
                                            </div>
                                            <p class="text-base leading-relaxed text-gray-500">
                                                <?php echo $obligacion['descripcion']; ?>
                                            </p>
                                            <p class="text-base leading-relaxed text-gray-500">
                                                <?php echo $obligacion['descripcionTecnica']; ?>
                                            </p>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                            <button data-modal-hide="modal-<?php echo $index . '-' . $key; ?>" 
                                                    type="button" 
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                Cerrar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

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