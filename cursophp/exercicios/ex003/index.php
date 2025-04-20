<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = Hexadecimal, 0b = Binário 0 = Octal
        // $num = 010;
        // echo "O valor da variavel é $num";

        // $v = 300;
        // var_dump($v)

        // $num = (int) 3e2;
        // echo "O valor é $num";
        // var_dump($num);

        // $vet = [6, 2, 4, 6];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>