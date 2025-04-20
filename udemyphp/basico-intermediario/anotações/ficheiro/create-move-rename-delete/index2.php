<?php

rename(__DIR__ . "/file_to_move.nfo", __DIR__ . "/destino/file_to_move.nfo");

rename(__DIR__ . "/destino/file_to_move.nfo", __DIR__ . "/destino/new_file_to_move.nfo");
