<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="/cursophp/style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_GET["nome"] ?? null;
        $sobrenome = $_GET["sobrenome"] ?? null;

        // Usar ?? para definir valores padrão e redirecionar se forem nulos
        $nome ??= "<script>
                  alert('Por favor, preencha o campo Nome!');
                  window.location.href = 'restcountries.html';
               </script>";
        $sobrenome ??= "<script>
                      alert('Por favor, preencha o campo Sobrenome!');
                      window.location.href = 'restcountries.html';
                   </script>";

        // Se nenhum script foi executado, exibe a saudação
        if (!is_null($nome) && !is_null($sobrenome)) {
            echo "<p>É um prazer te conhecer, $nome $sobrenome! Este é meu site.</p>";
        }
        ?>
        <input type="button" value="Voltar" onclick="window.location.href='restcountries.html';">
    </main>
</body>
</html>