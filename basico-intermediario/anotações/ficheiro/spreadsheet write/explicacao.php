<?php

/* 
Depois de vermos como carregar ficheiros para o servidor com PHP,
está na altura de vermos como podemos ler dados a partir de ficheiros
XLSX (Excel) e CSV.

O PHP contém funções específicas para ler ficheiros CSV, mas neste caso,
como pretendemos também ler a partir de ficheiros do Excel, vamos recorrer
a uma das mais conhecidas dependências usadas para o efeito: o PhpSpreadsheet

NOTA: O PhpSpreadsheet contém um vasto conjunto de classes, objetos e métodos
para manipulação de dados em ficheiros de Excel (e de outras origens).

Vamos apenas ficar pelo básico de leitura e escrita de ficheiros XLSX e CSV.

A documentação desta dependência pode ser encontrada aqui:

https://phpspreadsheet.readthedocs.io/en/latest/

Dentro da pasta ficheiros_de_dados vamos encontrar dois ficheiros.
Um XSLX e outro CSV que contêm dados de: nome, email e telefone.

1. Para ler os ficheiros, primeiro teremos que adicionar a dependência ao nosso projeto.
Vamos usar o Composer.

composer require phpoffice/phpspreadsheet

2. Com a dependência descarregada, vamos ver o que acontece no script index_1.php

*/