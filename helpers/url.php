<?php

// Constrói a URL base do site combinando o protocolo, 
// Nome do servido, diretório atual e barra final.

$BASE_URL = "http://" .$_SERVER['SERVER_NAME'] .dirname($_SERVER["REQUEST_URI"].'?').'';

?>