<?php
session_start();

// Verifica se as configurações foram salvas
$theme = isset($_SESSION['theme']) ? $_SESSION['theme'] : 'light';
$fontSize = isset($_SESSION['fontSize']) ? $_SESSION['fontSize'] : 'medium';
$language = isset($_SESSION['language']) ? $_SESSION['language'] : 'pt';
$colorBlind = isset($_SESSION['colorBlind']) ? $_SESSION['colorBlind'] : 'no';

// Define classes de estilo
$themeClass = $theme === 'dark' ? 'dark-theme' : '';
$colorBlindClass = $colorBlind === 'yes' ? 'daltonic' : '';
?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-<?php echo $theme; ?>.css">
    <link rel="stylesheet" href="style-daltonic.css" <?php echo $colorBlind === 'yes' ? '' : 'disabled'; ?>>
    <title>História da Hello Kitty</title>
    <style>
        body {
            font-size: <?php echo $fontSize; ?>;
        }
    </style>
</head>
<body class="<?php echo $themeClass . ' ' . $colorBlindClass; ?>">
    <header>
        <h1>História da Hello Kitty</h1>
        <nav>
            <a href="form.php">Personalizar</a>
        </nav>
    </header>
    <main>
        <section>
            <h2>O que é Hello Kitty?</h2>
            <p>A Hello Kitty é uma personagem fictícia criada pela designer Yuko Shimizu e lançada pela Sanrio em 1974. Desde então, ela se tornou um ícone global, representando amizade e amor.</p>
        </section>
        <section>
            <h2>História</h2>
            <p>A Hello Kitty foi inicialmente criada como um produto para carteiras e bolsas, mas rapidamente se expandiu para incluir uma variedade de produtos, desde roupas até brinquedos. Sua imagem é reconhecida em todo o mundo e ela se tornou um símbolo da cultura pop.</p>
        </section>
        <section>
            <h2>Curiosidades</h2>
            <ul>
                <li>O nome completo da Hello Kitty é Kitty White.</li>
                <li>Ela é uma gata, mas não tem boca, o que permite que as pessoas projetem suas próprias emoções nela.</li>
                <li>Hello Kitty é uma das personagens mais vendidas do mundo.</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Hello Kitty. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
