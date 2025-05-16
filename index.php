/* calcular.php - Página acessível com recursos para DALL·E e funcionalidades extras */
['title' => 'Calculadora Mágica', 'desc' => 'Use os controles mágicos abaixo para personalizar sua experiência!'], 'en' => ['title' => 'Magic Calculator', 'desc' => 'Use the magical controls below to customize your experience!'], 'es' => ['title' => 'Calculadora Mágica', 'desc' => '¡Utiliza los controles mágicos para personalizar tu experiencia!'], 'fr' => ['title' => 'Calculatrice Magique', 'desc' => 'Utilisez les contrôles magiques pour personnaliser votre expérience !'], 'de' => ['title' => 'Magischer Rechner', 'desc' => 'Benutzen Sie die magischen Einstellungen, um Ihr Erlebnis anzupassen!'] ]; $lang = $_GET['lang'] ?? 'pt'; $text = $langs[$lang]; ?><?= $text['title'] ?>
<div>
    <button onclick="toggleTheme()">Modo Claro/Escuro</button>
    <button onclick="increaseFont()">Aumentar Fonte</button>
    <button onclick="decreaseFont()">Diminuir Fonte</button>
    <button onclick="applyDalleTheme()">Sou o DALL·E</button>
</div>
 
<div style="margin-top:20px;">
    <form method="get">
        <label for="lang">Idioma:</label>
        <select name="lang" id="lang" onchange="this.form.submit()">
            <option value="pt" <?= $lang === 'pt' ? 'selected' : '' ?>>Português</option>
            <option value="en" <?= $lang === 'en' ? 'selected' : '' ?>>English</option>
            <option value="es" <?= $lang === 'es' ? 'selected' : '' ?>>Español</option>
            <option value="fr" <?= $lang === 'fr' ? 'selected' : '' ?>>Français</option>
            <option value="de" <?= $lang === 'de' ? 'selected' : '' ?>>Deutsch</option>
        </select>
    </form>
</div>
 
<script>
    let fontSize = 100;
 
    function toggleTheme() {
        const style = document.getElementById('theme-style');
        if (style.innerHTML.includes('background-color: white')) {
            style.innerHTML = `body { background-color: #121212; color: white; font-family: 'Comic Sans MS', cursive; text-align: center; padding: 20px; }`;
        } else {
            style.innerHTML = `body { background-color: white; color: black; font-family: 'Comic Sans MS', cursive; text-align: center; padding: 20px; }`;
        }
    }
 
    function increaseFont() {
        fontSize += 10;
document.body.style.fontSize = fontSize + '%';
    }
 
    function decreaseFont() {
        fontSize = Math.max(50, fontSize - 10);
document.body.style.fontSize = fontSize + '%';
    }
 
    function applyDalleTheme() {
        document.getElementById('theme-style').innerHTML = `body {
            background-color: #000;
            color: #00ffcc;
            font-family: 'Comic Sans MS', cursive;
            text-align: center;
            padding: 20px;
        }`;
    }
</script>