<?php

function ola($texto = "mundo", $periodo="Bom dia"){

    return "Olá $texto! $periodo! <br>";
}

echo ola("mundo", "Boa noite");
echo ola("Joao");
echo ola("jonhy", "Bom tarde");


?>