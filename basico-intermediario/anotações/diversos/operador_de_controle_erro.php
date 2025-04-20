<?php

    $ficheiro = file('teste123.txt');

    // não mostra o erro e segue o código
    $ficheiro = @file('teste123.txt');

    echo 'fim';