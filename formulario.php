<?php
require_once "./classes/processaFormulario.php";

$oAeroporto = new \processaFormulario();
$aOpcoes = $oAeroporto->getAeroportos();

// require_once "./classes/routes.php";
// $oSiglas = new \routes();
// $aOpcoes = $oSiglas -> getNomeCerto();

echo "<form action='index.php' method='post'>
        <label for='getGrafos'>Selecione o Aeroporto para saber o menor custo:</label>
        <select name='aeroporto' id='aeroporto'>";
        
foreach ($aOpcoes as $opcao) {
    echo "<option value='$opcao'>$opcao</option>";
}

echo "</select>
        <input type='submit' value='Enviar'>
    </form>";
?>