<?php
// Inicia a sessão
session_start();

// Define as preferências padrão
if (!isset($_SESSION['theme'])) {
    $_SESSION['theme'] = 'light';
    $_SESSION['language'] = 'pt-BR';
    $_SESSION['color_blind'] = '';
    $_SESSION['font_size'] = 'medium';
}

// Processa o formulário de personalização
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['theme'])) {
        $_SESSION['theme'] = $_POST['theme'];
    }
    if (isset($_POST['language'])) {
        $_SESSION['language'] = $_POST['language'];
    }
    if (isset($_POST['color_blind'])) {
        $_SESSION['color_blind'] = $_POST['color_blind'];
    }
    if (isset($_POST['font_size'])) {
        $_SESSION['font_size'] = $_POST['font_size'];
    }
}
?>
