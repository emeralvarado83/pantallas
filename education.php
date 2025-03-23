<?php
$dados = [
    ["titulo" => "IDEB", "novo_visual" => false],
    ["titulo" => "Índice de aplicação", "novo_visual" => true],
    ["titulo" => "Custo mensal por aluno", "novo_visual" => true],
    ["titulo" => "Dados Fundeb", "novo_visual" => true],
    ["titulo" => "RANKING", "novo_visual" => false]
];

$municipios = ["Água Branca - PB", "João Pessoa - PB", "Campina Grande - PB", "Patos - PB"];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educação</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="bg-blue-600 text-white p-4 flex justify-between items-center">
        <div class="flex items-center">
            <select class="bg-blue-600 text-white text-lg font-semibold outline-none">
                <?php foreach ($municipios as $municipio): ?>
                    <option><?= $municipio ?></option>
                <?php endforeach; ?>
            </select>
            <h3 class="text-white font-semibold ml-2">Educação</h3>
        </div>
        <button class="text-white text-lg">☰</button>
    </div>
    
    <div class="max-w-md md:max-w-2xl lg:max-w-4xl my-4 mx-auto bg-white rounded-lg shadow-md p-6 md:p-8 lg:p-10">
        <?php foreach ($dados as $dado): ?>
            <div class="flex items-center justify-between border-t mt-6 pt-4">
                <div class="max-w-[70%] sm:max-w-full flex">
                    <?php if ($dado["novo_visual"]): ?>
                        <span class="bg-blue-500 text-white text-xs leading-5 text-center px-2 py-1 rounded-md mr-2 min-w-[79px]">Novo Visual</span>
                    <?php endif; ?>
                    <h3 class="font-bold text-base md:text-lg text-gray-700"> <?= $dado["titulo"] ?> </h3>
                </div>
                <div>
                    <a href="#">
                        <span class="text-blue-500 hover:underline">Ver detalles</span>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="fixed bottom-4 right-4 bg-blue-600 p-4 rounded-full shadow-lg text-white text-2xl">
        <a href="descarga.php">⬇</a>
    </div>
</body>
</html>