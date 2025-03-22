<?php
// Arreglo de objetos representando cada tarjeta
$cards = [
    ["img" => "iconos/logo-famup.png", "title" => "FAMUP"],
    ["img" => "iconos/lucro.png", "title" => "Receitas Constitucionais"],
    ["img" => "iconos/educacion.png", "title" => "Educação", "badge" => "Novo Visual"],
    ["img" => "iconos/asistencia-social.png", "title" => "Assistência Social"],
    ["img" => "iconos/impuestos.png", "title" => "Arrecadações Municipais", "badge" => "Novo Visual"],
    ["img" => "iconos/trofeo.png", "title" => "Ranking"],
    ["img" => "iconos/latido-del-corazon.png", "title" => "Saúde", "badge" => "Novo Visual"],
    ["img" => "iconos/bonos-del-gobierno.png", "title" => "Obrigações Federais", "extraIcon" => "iconos/no-me-gusta.png"],
    ["img" => "iconos/grafico-de-barras.png", "title" => "Índices Constitucionais", "extraIcon" => "iconos/me-gusta.png"],
    ["img" => "iconos/personas.png", "title" => "Despesa com pessoal", "badge" => "Novo Visual"],
    ["img" => "iconos/sistema-integrado.png", "title" => "Integrações"],
    ["img" => "iconos/coche.png", "title" => "Veículos", "newbadge" => "Novo"],
    ["img" => "iconos/documento.png", "title" => "Prévia Fiscal", "extraIcon" => "iconos/no-me-gusta.png"],
    ["img" => "iconos/subasta.png", "title" => "Processos Legais", "extraIcon" => "iconos/notificacion.png"],
    ["img" => "iconos/maletin.png", "title" => "Empregos", "newbadge" => "Novo"],
    ["img" => "iconos/datos-moviles.png", "title" => "Transferegov"],
    ["img" => "iconos/certificado.png", "title" => "Certidões", "extraIcon" => "iconos/no-me-gusta.png"],
    ["img" => "iconos/caja-registradora.png", "title" => "Fluxo de Caixa", "badge" => "Novo Visual"],
    ["img" => "iconos/analitica.png", "title" => "Indicadores Gerenciais", "badge" => "Novo Visual"],
    ["img" => "iconos/grandes-almacenes.png", "title" => "Empresas", "badge" => "Novo Visual"],
];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <div class="bg-blue-600 text-white p-4 flex justify-between items-center">
        <select class="bg-blue-600 text-white text-lg font-semibold outline-none">
            <option>Água Branca - PB</option>
            <option>João Pessoa - PB</option>
            <option>Campina Grande - PB</option>
            <option>Patos - PB</option>
        </select>
        <button class="text-white text-lg">☰</button>
    </div>

    <!-- Grid de Cards -->
    <div class="p-4 grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-5">

        <?php foreach ($cards as $card): ?>
            <a href="#" class="bg-white p-4 rounded-lg shadow hover:shadow-xl hover:scale-105 transition-transform duration-300 ease-in-out flex flex-col items-start gap-2 relative">
                <img src="<?php echo htmlspecialchars($card['img']); ?>" alt="Icono <?php echo htmlspecialchars($card['title']); ?>" class="h-10">
                <h3 class="text-base md:text-lg text-gray-700 font-semibold"><?php echo htmlspecialchars($card['title']); ?></h3>
                <?php if (isset($card['badge'])): ?>
                    <span class="absolute top-0 right-0 bg-blue-500 text-white text-xs px-2 py-1 rounded-bl-lg"><?php echo htmlspecialchars($card['badge']); ?></span>
                <?php endif; ?>
                <?php if (isset($card['newbadge'])): ?>
                    <span class="absolute top-0 right-0 bg-green-500 text-white text-xs px-2 py-1 rounded-bl-lg"><?php echo htmlspecialchars($card['newbadge']); ?></span>
                <?php endif; ?>
                <?php if (isset($card['extraIcon'])): ?>
                    <img src="<?php echo htmlspecialchars($card['extraIcon']); ?>" alt="Icono extra" class="h-6 absolute top-2 right-2">
                <?php endif; ?>
            </a>
        <?php endforeach; ?>

    </div>

    <!-- Botón Flotante -->
    <div class="fixed bottom-4 right-4 bg-blue-600 p-4 rounded-full shadow-lg text-white text-2xl">
        <a href="descarga.php">⬇</a>
    </div>

</body>
</html>
