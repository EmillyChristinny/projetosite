<?php
session_start();

// Salvar preferências do usuário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['tema'] = $_POST['tema'] ?? 'claro';
    $_SESSION['idioma'] = $_POST['idioma'] ?? 'pt';
    $_SESSION['daltonico'] = $_POST['daltonico'] ?? 'nao';
    $_SESSION['fonte'] = $_POST['fonte'] ?? 'normal';
}

// Recuperar preferências
$tema = $_SESSION['tema'] ?? 'claro';
$idioma = $_SESSION['idioma'] ?? 'pt';
$daltonico = $_SESSION['daltonico'] ?? 'nao';
$fonte = $_SESSION['fonte'] ?? 'normal';
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Fofo Personalizável</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js" defer></script>
</head>
<body class="tema-<?php echo $tema; ?> fonte-<?php echo $fonte; ?> <?php echo $daltonico === 'sim' ? 'daltonico' : ''; ?>">
    <header>
        <h1>Bem-vindo ao Mundo Fofo!</h1>
    </header>

    <main>
        <form method="POST">
            <h2>🎨 Personalize sua Experiência</h2>

            <label for="tema">Tema:</label>
            <select name="tema" id="tema">
                <option value="claro" <?php if ($tema === 'claro') echo 'selected'; ?>>Claro</option>
                <option value="escuro" <?php if ($tema === 'escuro') echo 'selected'; ?>>Escuro</option>
            </select>

            <label for="idioma">Idioma:</label>
            <select name="idioma" id="idioma">
                <option value="pt" <?php if ($idioma === 'pt') echo 'selected'; ?>>Português</option>
                <option value="en" <?php if ($idioma === 'en') echo 'selected'; ?>>Inglês</option>
                <option value="ja" <?php if ($idioma === 'ja') echo 'selected'; ?>>Japonês</option>
            </select>

            <label for="daltonico">Você é daltônico?</label>
            <select name="daltonico" id="daltonico">
                <option value="nao" <?php if ($daltonico === 'nao') echo 'selected'; ?>>Não</option>
                <option value="sim" <?php if ($daltonico === 'sim') echo 'selected'; ?>>Sim</option>
            </select>

            <label for="fonte">Tamanho da Fonte:</label>
            <select name="fonte" id="fonte">
                <option value="normal" <?php if ($fonte === 'normal') echo 'selected'; ?>>Normal</option>
                <option value="grande" <?php if ($fonte === 'grande') echo 'selected'; ?>>Grande</option>
                <option value="muito-grande" <?php if ($fonte === 'muito-grande') echo 'selected'; ?>>Muito Grande</option>
            </select>

            <br><br>
            <button type="submit">Salvar Preferências</button>
        </form>

        <section>
            <h2>✨ Conteúdo Fofo</h2>
            <p>Veja conteúdos adoráveis com suporte à sua visão 🐱🎀</p>
            <img src="hellokitty.png" alt="Hello Kitty">
        </section>
    </main>
</body>
</html>
