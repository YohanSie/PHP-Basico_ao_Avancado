<?php
    /* 
    double quoted    
    echo "Conta";

    concatenação
    echo "Conta" . "PHP";

    Aspas duplas existe a interpretação do conteúdo dentro delas, como váriaveis e elementos utf-8/unicode
    echo "PHP \u{1F418}";

    não vai funcionar:
    echo 'PHP \u{1F418}';

    $nome = "Gustavo";
    echo "Olá $nome";

    console = Olá Gustavo

    echo 'Olá $nome';

    console = Olá $nome

    CONSTANTES:
    const ESTADO = "RJ";

    echo "Moro no ESTADO"; --> Moro no ESTADO
    echo "Moro no ". ESTADO; --> Moro no RJ

    Ano atual

    echo "Estamos no ano de date('Y')";
    echo "Estamos no ano de " . date('Y');

    $nom = "Rodrigo";
    $snom = "Nogueira";

    ERRADO:
    echo "$nom "Minotauro" $snom";
    echo '$nom "Minotauro" $snom';

    CERTO:
    echo "$nom \"Minotauro\" \$snom;

    \Sequências de escape:

    \n --> Nova linha;
    \t --> Tabulação horizontal;
    \\ --> Barra invertida;
    \$ --> Sinal de cifrão
    \u{} --> unicode;
    

    //Heredoc

    $canal = "Curso em Vídeo";
    $ano = date('Y');

    echo <<< FRASE
        Olá galera do $canal!
            Tudo Bem com vocês?
        Abraços! \u{1F596}
        FRASE;
    
    //Nowdoc

    $canal = "Curso em Vídeo";
    $ano = date('Y');

    echo <<< 'FRASE'
        Olá galera do $canal!
            Tudo Bem com vocês?
        Abraços! \u{1F596}
        FRASE;
    
    */
?>