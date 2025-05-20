<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['theme'] = $_POST['theme'];
    $_SESSION['fontSize'] = $_POST['fontSize'];
    $_SESSION['language'] = $_POST['language'];
    $_SESSION['colorBlind'] = $_POST['colorBlind'];
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
        <link rel="stylesheet" href="style-personalizar.css">
    <meta charset="UTF-8">
    <title>Personalizar Configurações</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Personalizar Configurações</h1>
    <form method="POST">
        <label for="theme">Tema:</label>
        <select name="theme" id="theme">
            <option value="light">Claro</option>
            <option value="dark">Escuro</option>
        </select>

        <label for="language">Idioma:</label>
        <select name="language" id="language">
            <option value="pt">Português</option>
            <option value="en">Inglês</option>
            <option value="es">Espanhol</option>
            <option value="de">Alemão</option>
            <option value="ja">Japonês</option>
        </select>

        <label for="colorBlind">Daltonismo:</label>
        <select name="colorBlind" id="colorBlind">
            <option value="no">Não</option>
            <option value="yes">Sim</option>
        </select>

        <label for="fontSize">Tamanho da Fonte:</label>
        <select name="fontSize" id="fontSize">
            <option value="medium">Médio</option>
            <option value="large">Grande</option>
            <option value="small">Pequeno</option>
        </select>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
