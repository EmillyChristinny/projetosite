<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Hello Kitty</title>
  <link rel="stylesheet" href="style-claro.css"> <!-- já existente -->
  <style>
    body {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin: 0;
      padding: 20px;
      font-family: sans-serif;
    }

    .principal {
      width: 70%;
    }

    .formulario-lateral {
      width: 28%;
      background-color: #fff0f5;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .formulario-lateral h3 {
      margin-top: 0;
      color: #ff69b4;
    }

    .formulario-lateral label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }

    .formulario-lateral select, .formulario-lateral button {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .formulario-lateral button {
      background-color: #ff69b4;
      color: white;
      margin-top: 15px;
      cursor: pointer;
    }

    .formulario-lateral button:hover {
      background-color: #ff1493;
    }
  </style>
</head>
<body>

  <!-- CONTEÚDO PRINCIPAL DA SUA PÁGINA -->
  <div class="principal">
    <?php include 'pagina-original.php'; ?> <!-- ou cole aqui seu HTML atual -->
  </div>

  <!-- FORMULÁRIO NA DIREITA -->
  <div class="formulario-lateral">
    <form method="POST" action="salvar_config.php">
      <h3>🎀 Personalize sua experiência</h3>

      <label for="tema">Tema:</label>
      <select name="tema" id="tema">
        <option value="claro">Claro</option>
        <option value="escuro">Escuro</option>
      </select>

      <label for="idioma">Idioma:</label>
      <select name="idioma" id="idioma">
        <option value="pt">Português</option>
        <option value="es">Espanhol</option>
      </select>

      <label for="daltonismo">Daltonismo:</label>
      <select name="daltonismo" id="daltonismo">
        <option value="nao">Não</option>
        <option value="sim">Sim</option>
      </select>

      <label for="fonte">Fonte:</label>
      <select name="fonte" id="fonte">
        <option value="pequeno">Pequeno</option>
        <option value="medio" selected>Médio</option>
        <option value="grande">Grande</option>
      </select>

      <button type="submit">Salvar</button>
    </form>
  </div>

</body>
</html>
