<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

function Logger($mensagem = '', $level = 'info'){
    // criar o canal de log
    $log = new Logger('registro_logss');
    $log->pushHandler(new StreamHandler('logs.log'));

    // adicionar registro de logs condicionado pelo level
    switch ($level){
        case 'info':
            $log->info($mensagem);
            break;
        case 'notice':
            $log->notice($mensagem);
            break;
        case 'warning':
            $log->warning($mensagem);
            break;
        case 'error':
            $log->error($mensagem);
            break;
        case 'critical':
            $log->critical($mensagem);
            break;
        case 'alert':
            $log->alert($mensagem);
            break;
        case 'emergency':
            $log->emergency($mensagem);
            break;
        default:
            $log->info($mensagem);
            break;
    }
}