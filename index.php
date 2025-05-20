<?php
session_start();

// Verifica se as configurações foram salvas
$theme = isset($_SESSION['theme']) ? $_SESSION['theme'] : 'light';
$fontSize = isset($_SESSION['fontSize']) ? $_SESSION['fontSize'] : 'medium';
$language = isset($_SESSION['language']) ? $_SESSION['language'] : 'pt';
?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-<?php echo $theme; ?>.css">
    <title>História da Hello Kitty</title>
    <style>
        body {
            font-size: <?php echo $fontSize; ?>;
        }
    </style>
</head>
<body>
    <header>
        <h1>História da Hello Kitty</h1>
        <a href="form.php">Personalizar</a>
    </header>
    <main>
        <p>A Hello Kitty foi criada em 1974 pela Sanrio e rapidamente se tornou um ícone da cultura pop...</p>
        <!-- Adicione mais conteúdo sobre a história da Hello Kitty -->
    </main>
    <footer>
        <p>&copy; 2025 Hello Kitty. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
