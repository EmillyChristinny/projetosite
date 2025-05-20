<?php
// Inicia a sessão para armazenar as preferências do usuário
session_start();

// Inclui o arquivo de configuração
include 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A História da Hello Kitty</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="<?php echo $_SESSION['theme']; ?> <?php echo $_SESSION['font_size']; ?> <?php echo $_SESSION['color_blind']; ?>">

    <header>
        <h1>A História da Hello Kitty</h1>
    </header>

    <section>
        <h2>Introdução</h2>
        <p>A Hello Kitty foi criada em 1974 pela designer Yuko Shimizu, da empresa japonesa Sanrio. Ela é uma gatinha branca com uma fita vermelha na orelha esquerda e sem boca, permitindo que as pessoas projetem seus próprios sentimentos nela.</p>
        <p>Desde então, a Hello Kitty se tornou um ícone global, presente em mais de 130 países e em milhares de produtos diferentes.</p>
    </section>

    <section>
        <h2>Personalize sua Experiência</h2>
        <form method="POST">
            <label for="theme">Tema:</label>
            <select name="theme" id="theme">
                <option value="light" <?php echo ($_SESSION['theme'] == 'light') ? 'selected' : ''; ?>>Claro</option>
                <option value="dark" <?php echo ($_SESSION['theme'] == 'dark') ? 'selected' : ''; ?>>Escuro</option>
            </select>

            <label for="language">Idioma:</label>
            <select name="language" id="language">
                <option value="pt-BR" <?php echo ($_SESSION['language'] == 'pt-BR') ? 'selected' : ''; ?>>Português</option>
                <option value="en-US" <?php echo ($_SESSION['language'] == 'en-US') ? 'selected' : ''; ?>>Inglês</option>
            </select>

            <label for="color_blind">Modo Daltonismo:</label>
            <select name="color_blind" id="color_blind">
                <option value="" <?php echo ($_SESSION['color_blind'] == '') ? 'selected' : ''; ?>>Nenhum</option>
                <option value="deuteranopia" <?php echo ($_SESSION['color_blind'] == 'deuteranopia') ? 'selected' : ''; ?>>Deuteranopia</option>
                <option value="protanopia" <?php echo ($_SESSION['color_blind'] == 'protanopia') ? 'selected' : ''; ?>>Protanopia</option>
                <option value="tritanopia" <?php echo ($_SESSION['color_blind'] == 'tritanopia') ? 'selected' : ''; ?>>Tritanopia</option>
            </select>

            <label for="font_size">Tamanho da Fonte:</label>
            <select name="font_size" id="font_size">
                <option value="small" <?php echo ($_SESSION['font_size'] == 'small') ? 'selected' : ''; ?>>Pequeno</option>
                <option value="medium" <?php echo ($_SESSION['font_size'] == 'medium') ? 'selected' : ''; ?>>Médio</option>
                <option value="large" <?php echo ($_SESSION['font_size'] == 'large') ? 'selected' : ''; ?>>Grande</option>
            </select>

            <button type="submit">Aplicar Preferências</button>
        </form>
    </section>

</body>
</html>
