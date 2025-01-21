<?php

switch ($idade = 10) {
    case ($idade >=30):
        echo "Voce pode entrar!\n";
            break;
    case ($idade >=15):
        echo "Voce precisa de permissao!\n";
            break;
    default:
        echo "Voce nao pode entrar!\n";
}
