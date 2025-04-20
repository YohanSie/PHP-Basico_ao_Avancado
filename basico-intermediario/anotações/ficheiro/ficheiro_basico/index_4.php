<?php

// Podemos criar pastas de forma recursiva.
// Como não vamos usar o segundo argumento, usamos named arguments
// para definir o valor do terceiro parâmetro
mkdir(__DIR__ . '/aaa/bbb', recursive: true);