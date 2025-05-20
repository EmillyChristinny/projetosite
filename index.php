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

// Conteúdo em diferentes idiomas
$content = [
    'pt' => [
        'title' => 'História da Hello Kitty',
        'what_is' => 'O que é Hello Kitty?',
        'description' => 'A Hello Kitty é uma personagem fictícia criada pela designer Yuko Shimizu e lançada pela Sanrio em 1974. Desde então, ela se tornou um ícone global, representando amizade e amor.',
        'history' => 'História',
        'history_description' => 'A Hello Kitty foi inicialmente criada como um produto para carteiras e bolsas, mas rapidamente se expandiu para incluir uma variedade de produtos, desde roupas até brinquedos. Sua imagem é reconhecida em todo o mundo e ela se tornou um símbolo da cultura pop.',
        'curiosities' => 'Curiosidades',
        'curiosity_list' => [
            'O nome completo da Hello Kitty é Kitty White.',
            'Ela é uma gata, mas não tem boca, o que permite que as pessoas projetem suas próprias emoções nela.',
            'Hello Kitty é uma das personagens mais vendidas do mundo.'
        ]
    ],
    'en' => [
        'title' => 'Hello Kitty History',
        'what_is' => 'What is Hello Kitty?',
        'description' => 'Hello Kitty is a fictional character created by designer Yuko Shimizu and launched by Sanrio in 1974. Since then, she has become a global icon, representing friendship and love.',
        'history' => 'History',
        'history_description' => 'Hello Kitty was initially created as a product for wallets and bags, but quickly expanded to include a variety of products, from clothing to toys. Her image is recognized worldwide and she has become a symbol of pop culture.',
        'curiosities' => 'Curiosities',
        'curiosity_list' => [
            'Hello Kitty\'s full name is Kitty White.',
            'She is a cat but has no mouth, allowing people to project their own emotions onto her.',
            'Hello Kitty is one of the best-selling characters in the world.'
        ]
    ],
    'es' => [
        'title' => 'Historia de Hello Kitty',
        'what_is' => '¿Qué es Hello Kitty?',
        'description' => 'Hello Kitty es un personaje ficticio creado por la diseñadora Yuko Shimizu y lanzado por Sanrio en 1974. Desde entonces, se ha convertido en un ícono global, representando la amistad y el amor.',
        'history' => 'Historia',
        'history_description' => 'Hello Kitty fue inicialmente creada como un producto para carteras y bolsas, pero rápidamente se expandió para incluir una variedad de productos, desde ropa hasta juguetes. Su imagen es reconocida en todo el mundo y se ha convertido en un símbolo de la cultura pop.',
        'curiosities' => 'Curiosidades',
        'curiosity_list' => [
            'El nombre completo de Hello Kitty es Kitty White.',
            'Es un gato, pero no tiene boca, lo que permite que las personas proyecten sus propias emociones en ella.',
            'Hello Kitty es uno de los personajes más vendidos del mundo.'
        ]
    ],
    'de' => [
        'title' => 'Hello Kitty Geschichte',
        'what_is' => 'Was ist Hello Kitty?',
        'description' => 'Hello Kitty ist eine fiktive Figur, die von der Designerin Yuko Shimizu geschaffen und 1974 von Sanrio veröffentlicht wurde. Seitdem ist sie zu einem globalen Symbol geworden, das Freundschaft und Liebe repräsentiert.',
        'history' => 'Geschichte',
        'history_description' => 'Hello Kitty wurde ursprünglich als Produkt für Geldbörsen und Taschen geschaffen, erweiterte sich jedoch schnell, um eine Vielzahl von Produkten, von Kleidung bis Spielzeug, zu umfassen. Ihr Bild ist weltweit anerkannt und sie ist zu einem Symbol der Popkultur geworden.',
        'curiosities' => 'Kuriositäten',
        'curiosity_list' => [
            'Der vollständige Name von Hello Kitty ist Kitty White.',
            'Sie ist eine Katze, hat aber keinen Mund, was es den Menschen ermöglicht, ihre eigenen Emotionen auf sie zu projizieren.',
            'Hello Kitty ist eine der meistverkauften Figuren der Welt.'
        ]
    ],
    'ja' => [
        'title' => 'ハローキティの歴史',
        'what_is' => 'ハローキティとは？',
        'description' => 'ハローキティは、デザイナーの清水俁子によって1974年にサンリオから発表された某人物のキャラクターです。それ以来、友情と愛を象徴するグローバルアイコンとなりました。',
        'history' => '歴史',
        'history_description' => 'ハローキティは、最初は財布やバッグのための製品として作られましたが、すぐに衣類やおもちゃなど、さまざまな製品に拡大しました。彼女のイメージは世界中で認識されており、ポップカルチャーの象徴となっています。',
        'curiosities' => '豆知識',
        'curiosity_list' => [
            'ハローキティのフルネームはキティ・ホワイトです。',
            '彼女は猫ですが、口がないため、人々は彼女に自分の感情を投影できます。',
            'ハローキティは世界で最も売れているキャラクターの一つです。'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-<?php echo $theme; ?>.css">
    <link rel="stylesheet" href="style-daltonic.css" <?php echo $colorBlind === 'yes' ? '' : 'disabled'; ?>>
    <title><?php echo $content[$language]['title']; ?></title>
    <style>
        body { font-size: <?php echo $fontSize; ?>; display: flex; flex-direction: row; }
        main { flex: 3; padding: 1rem; }
        aside { flex: 1; padding: 1rem; background: #ffeef5; }
        aside form { display: flex; flex-direction: column; gap: 0.5rem; background: #fff; padding: 1rem; border-radius: 10px; }
        img.hello-img { max-width: 100%; margin-bottom: 4.5rem; border-radius: 4.5px; }
    </style>
</head>
<body class="<?php echo $themeClass . ' ' . $colorBlindClass; ?>">
    <main>
        <header>
            <h1><?php echo $content[$language]['title']; ?></h1>
        </header>
        <section>
            <h2><?php echo $content[$language]['what_is']; ?></h2>
            <p><?php echo $content[$language]['description']; ?></p>
            <img src="hello1.jpg" alt="Hello Kitty 1" class="hello-img">
        </section>
        <section>
            <h2><?php echo $content[$language]['history']; ?></h2>
            <p><?php echo $content[$language]['history_description']; ?></p>
            <img src="hello2.jpg" alt="Hello Kitty 2" class="hello-img">
        </section>
        <section>
            <h2><?php echo $content[$language]['curiosities']; ?></h2>
            <ul>
                <?php foreach ($content[$language]['curiosity_list'] as $curiosity): ?>
                    <li><?php echo $curiosity; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
        <footer>
            <p>&copy; 2025 Hello Kitty. Todos os direitos reservados.</p>
        </footer>
    </main>
    <aside>
        <h3> Personalize sua experiência</h3>
        <form action="save-config.php" method="post">
            <label for="theme">Tema:</label>
            <select name="theme" id="theme">
                <option value="light">Claro</option>
                <option value="dark">Escuro</option>
            </select>

            <label for="language">Idioma:</label>
            <select name="language" id="language">
                <option value="pt">Português</option>
                <option value="en">English</option>
                <option value="es">Español</option>
                <option value="de">Deutsch</option>
                <option value="ja">日本語</option>
            </select>

            <label for="colorBlind">Daltonismo:</label>
            <select name="colorBlind" id="colorBlind">
                <option value="no">Não</option>
                <option value="yes">Sim</option>
            </select>

            <label for="fontSize">Fonte:</label>
            <select name="fontSize" id="fontSize">
                <option value="small">Pequeno</option>
                <option value="medium">Médio</option>
                <option value="large">Grande</option>
            </select>

            <button type="submit">Salvar</button>
        </form>
    </aside>
</body>
</html>